# Configurações iniciais
PHP_SERVICE := kariri-contract
DC := docker-compose

# Comando para execução de comandos dentro do container PHP
EXEC_PHP := $(DC) exec -T php

# Ícones
CHECK_MARK := ✅
WARNING := ⚠️
INFO := ℹ️ 

# Cores
RED := \033[0;31m
GREEN := \033[0;32m
YELLOW := \033[1;33m
NC := \033[0m # No Color

# Verifica se o Docker está instalado
CHECK_DOCKER := @command -v docker > /dev/null 2>&1 || { echo >&2 "${YELLOW}${WARNING} Docker não está instalado. Abortando.${NC}"; exit 1; }
# Verifica se o Docker Compose está instalado
CHECK_DOCKER_COMPOSE := @command -v docker-compose > /dev/null 2>&1 || { echo >&2 "${YELLOW}${WARNING} Docker Compose não está instalado. Abortando.${NC}"; exit 1; }
# Função para verificar se o container está rodando
CHECK_CONTAINER_RUNNING := @docker ps | grep $(PHP_SERVICE) > /dev/null 2>&1 || { echo >&2 "${YELLOW}${WARNING}  O container $(PHP_SERVICE) não está ativo. Execute 'make up' para inicializá-lo.${NC}"; exit 1; }
# Verifica se o arquivo .env existe
CHECK_ENV := @test -f .env || { echo >&2 "${YELLOW}${WARNING}  Arquivo .env não encontrado. Execute 'make setup-env' para configurar.${NC}"; exit 1; }

## setup-env: Copia .env.example para .env se este último não existir
setup-env:
	@test -f .env || (cp .env.example .env && echo "${GREEN}${CHECK_MARK} Arquivo .env criado com sucesso a partir do .env.example${NC}")

check-environment:
	@echo "${GREEN}${INFO} Verificando Docker, Docker Compose e arquivo .env...${NC}"
	$(CHECK_DOCKER)
	$(CHECK_DOCKER_COMPOSE)
	$(CHECK_ENV)

check-container-running:
	$(CHECK_CONTAINER_RUNNING) 

## up: Sobe todos os serviços em background
up: check-environment
	@echo "${GREEN}${INFO} Subindo os serviços...${NC}"
	@$(DC) up -d
	@echo "${GREEN}${CHECK_MARK} Serviços em pé!${NC}"

## down: Para e remove todos os containers
down: check-environment
	@echo "${YELLOW}${INFO} Parando e removendo os serviços...${NC}"
	@$(DC) down
	@echo "${GREEN}${CHECK_MARK} Serviços parados e removidos!${NC}"

## down: Para e remove todos os containers
build: check-environment
	@echo "${YELLOW}${INFO} Buildando serviços...${NC}"
	@$(DC) build
	@echo "${GREEN}${CHECK_MARK} Serviços buildados!${NC}"

## status: Exibe o status dos containers
logs: check-environment
	@echo "${YELLOW}${INFO} Logs dos containers:${NC}"
	@$(DC) logs

## re-build: Reconstrói e reinicia os containers
re-build: check-environment
	@echo "${YELLOW}${INFO} Parando e removendo os serviços atuais...${NC}"
	@$(DC) down
	@echo "${GREEN}${INFO} Reconstruindo os serviços...${NC}"
	@$(DC) build
	@echo "${GREEN}${INFO} Reiniciando os serviços...${NC}"
	@$(DC) up -d
	@echo "${GREEN}${CHECK_MARK} Serviços reconstruídos e reiniciados com sucesso!${NC}"
	@$(DC) logs

## shell: Acessa o bash do container PHP
shell: check-environment check-container-running
	@echo "${GREEN}${INFO} Acessando o shell do container PHP...${NC}"
	@$(DC) exec php sh

## composer-install: Instala dependências do Composer. Uso make composer-install [PKG="[vendor/package [version]]"] [DEV="--dev"]
composer-install: check-environment check-container-running
	@echo "${GREEN}${INFO} Instalando dependências do Composer...${NC}"
	@if [ -z "$(PKG)" ]; then \
		$(EXEC_PHP) composer install; \
	else \
		$(EXEC_PHP) composer require $(PKG) $(DEV); \
	fi
	@echo "${GREEN}${CHECK_MARK} Operação do Composer concluída!${NC}"

## composer-remove: Remove dependências do Composer. Uso: make composer-remove PKG="vendor/package"
composer-remove: check-environment check-container-running
	@if [ -z "$(PKG)" ]; then \
		echo "${RED}${WARNING}  Você deve especificar um pacote para remover. Uso: make composer-remove PKG=\"vendor/package\"${NC}"; \
	else \
		$(EXEC_PHP) composer remove $(PKG); \
		echo "${GREEN}${CHECK_MARK} Pacote $(PKG) removido com sucesso!${NC}"; \
	fi

## composer-update: Atualiza dependências do Composer
composer-update: check-environment check-container-running
	@echo "${GREEN}${INFO} Atualizando dependências do Composer...${NC}"
	$(EXEC_PHP) composer update
	@echo "${GREEN}${CHECK_MARK} Dependências atualizadas!${NC}"

## test: Executa testes
test: check-environment check-container-running
	@echo "${GREEN}${INFO} Executando testes...${NC}"
	$(EXEC_PHP) ./vendor/bin/phpunit --testdox --colors=always tests 

	@echo "${GREEN}${CHECK_MARK} Testes concluídos!${NC}"

## test-file: Executa testes em uma classe específica test-file FILE=[file]
test-file: check-environment check-container-running
	@echo "${GREEN}${INFO} Executando teste da classe $(FILE)...${NC}"
	$(EXEC_PHP) ./vendor/bin/phpunit --testdox --colors=always tests/$(FILE)
	@echo "${GREEN}${CHECK_MARK} Teste da classe $(FILE) concluído!${NC}"

## coverage: Executar a cobertura de testes com formatação visual
coverage: check-environment check-container-running
	@echo "${GREEN}${INFO} Analisando Cobertura de Teste...${NC}"
	XDEBUG_MODE=coverage $(EXEC_PHP) ./vendor/bin/phpunit --coverage-text --colors=always tests | ccze -A

## coverage-html: Executar a cobertura de testes e gerar relatório HTML
coverage-html: check-environment check-container-running
	@echo "${GREEN}${INFO} Analisando Cobertura de Teste e gerando relatório HTML...${NC}"
	XDEBUG_MODE=coverage $(EXEC_PHP) ./vendor/bin/phpunit --coverage-html ./coverage-report-html tests
	@echo "${GREEN}${INFO} Relatório de Cobertura de Teste gerado em ./coverage-report-html${NC}"


## run-script: Executa um script PHP. Uso: make run-script SCRIPT="caminho/do/script.php"
run-script: check-environment check-container-running
	@echo "${GREEN}${INFO} Executando script: $(SCRIPT)...${NC}"
	$(EXEC_PHP) php $(SCRIPT)
	@echo "${GREEN}${CHECK_MARK} Script executado!${NC}"

## cs-check: Executa o PHP_CodeSniffer para verificar o estilo do código
cs-check: check-environment check-container-running
	@echo "${GREEN}${INFO} Verificando o estilo do código com PHP_CodeSniffer no diretório src/ e tests/...${NC}"
	$(EXEC_PHP) ./vendor/bin/phpcs src/ tests/
	@echo "${GREEN}${CHECK_MARK} Verificação de estilo do código concluída!${NC}"


## cs-fix: Executa o PHP CS Fixer para corrigir o estilo do código
cs-fix: check-environment check-container-running
	@echo "${GREEN}${INFO} Corrigindo o estilo do código com PHP CS Fixer...${NC}"
	$(EXEC_PHP) ./vendor/bin/php-cs-fixer fix
	$(EXEC_PHP) ./vendor/bin/phpcbf src/ tests/
	@echo "${GREEN}${CHECK_MARK} Estilo do código corrigido!${NC}"

## stan: Executa o PHPStan para análise estática do código
stan: check-environment check-container-running
	@echo "${GREEN}${INFO} Executando análise estática do código com PHPStan...${NC}"
	$(EXEC_PHP) ./vendor/bin/phpstan analyse
	@echo "${GREEN}${CHECK_MARK} Análise estática do código concluída!${NC}"

## security-check: Verifica vulnerabilidades de segurança nas dependências
security-check: check-environment check-container-running
	@echo "${GREEN}${INFO} Verificando vulnerabilidades de segurança com o Security Checker...${NC}"
	$(EXEC_PHP) ./vendor/bin/security-checker security:check
	@echo "${GREEN}${CHECK_MARK} Verificação de segurança concluída!${NC}"

## quality: Executa todos os comandos de qualidade
quality: check-environment check-container-running cs-check stan test security-check 
	@echo "${GREEN}${CHECK_MARK} Todos os comandos de qualidade foram executados!${NC}"

## help: Mostra os passos iniciais e comandos disponíveis
help:
	@echo "${GREEN}Passos iniciais para configurar o projeto:${NC}"
	@echo "1. ${YELLOW}Setup inicial do ambiente:${NC}"
	@echo "   ${GREEN}${CHECK_MARK} Copie o arquivo de ambiente:${NC} make setup-env"
	@echo "   ${GREEN}${CHECK_MARK} Suba os containers Docker:${NC} make up"
	@echo "   ${GREEN}${CHECK_MARK} Instale as dependências do Composer:${NC} make composer-install"
	@echo "2. ${YELLOW}Desenvolvimento:${NC}"
	@echo "   ${GREEN}${CHECK_MARK} Acesse o shell do container PHP:${NC} make shell"
	@echo "   ${GREEN}${CHECK_MARK} Execute um script PHP:${NC} make run-script SCRIPT=\"nome_do_script.php\""
	@echo "   ${GREEN}${CHECK_MARK} Execute os testes:${NC} make test"
	@echo "3. ${YELLOW}Manutenção:${NC}"
	@echo "   ${GREEN}${CHECK_MARK} Atualize as dependências do Composer:${NC} make composer-update"
	@echo "   ${GREEN}${CHECK_MARK} Limpe o cache da aplicação:${NC} make cache-clear"
	@echo "   ${RED}${WARNING}  Para e remove todos os containers Docker:${NC} make down"
	@echo "\n${GREEN}Comandos disponíveis:${NC}"
	@sed -n 's/^##//p' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ": "}; {printf "${YELLOW}%-30s${NC} %s\n", $$1, $$2}'

.PHONY: setup-env up down build logs re-build shell composer-install composer-update test test-file coverage coverage-html run-script cs-fix cs-check stan security-check quality help


