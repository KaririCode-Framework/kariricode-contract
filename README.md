# Kariri/Contract - Kariri PHP Framework

Kariri é um framework PHP moderno e poderoso, projetado para oferecer uma base sólida para o desenvolvimento de aplicações web. Ele segue os padrões e melhores práticas da comunidade PHP, como as PSRs, e utiliza os recursos mais modernos do PHP.

Para o Kariri PHP Framework, definir contratos através de interfaces no componente **Kariri\Contract** é essencial para promover a modularização e interoperabilidade entre os componentes. Esses contratos servem para garantir que os componentes possam se comunicar de maneira padronizada, mantendo a independência e a facilidade de substituição ou extensão. Vamos considerar as interfaces típicas que um componente de contrato poderia incluir, adaptando os nomes para refletir o uso do sufixo "Contract" (particularmente consideramos “Contract” mais semântico do que “Interface”, pelo fato de ser separado em um componente independente).

## Kariri\Contract Interfaces

O componente Kariri\Contract do Kariri PHP Framework define uma série de interfaces que estabelecem contratos para diferentes aspectos do desenvolvimento de aplicações web. Essas interfaces promovem uma arquitetura modular, flexível e interoperável. Aqui estão algumas das principais interfaces incluídas:

### Container

- **Kariri\Contract\Container\ContainerContract**: Define o contrato para o container de injeção de dependências, incluindo métodos para vincular interfaces a implementações concretas, resolver dependências e obter instâncias de classes.

### Console

- **Kariri\Contract\Console\CommandContract**: Define o contrato para comandos de linha de comando, incluindo métodos para executar o comando, definir argumentos e opções, e interagir com a entrada e saída do console.

### Middleware

- **Kariri\Contract\Middleware\MiddlewareContract**: Define o contrato para middleware, incluindo métodos para processar uma requisição HTTP antes ou depois de ser tratada pelo núcleo da aplicação.
- **Kariri\Contract\Middleware\PipelineContract**: Define o contrato para pipelines de middleware, permitindo a execução de uma sequência de middlewares para processar uma requisição HTTP.
- **Kariri\Contract\Middleware\KernelContract**: Define o contrato para o kernel HTTP, que é responsável por orquestrar o processamento de requisições HTTP, incluindo a execução de middlewares e o envio das respostas.

### Provider

- **Kariri\Contract\Provider\ProviderContract**: Define o contrato para providers, que são responsáveis por configurar e registrar serviços no container de injeção de dependências, bem como inicializar componentes e recursos do framework.

### Events

- **Kariri\Contract\Events\DispatcherContract**: Define o contrato para o despachante de eventos, incluindo métodos para registrar ouvintes de eventos, disparar eventos e propagar eventos através de diferentes camadas da aplicação.
- **Kariri\Contract\Events\ListenerContract**: Define o contrato para ouvintes de eventos, incluindo métodos para lidar com eventos específicos disparados pelo despachante de eventos.

### HTTP

- **Kariri\Contract\Http\RequestContract**: Define o contrato para lidar com requisições HTTP, incluindo métodos para recuperar dados da requisição, como cabeçalhos, parâmetros de consulta e corpo da requisição.
- **Kariri\Contract\Http\ResponseContract**: Define o contrato para lidar com respostas HTTP, incluindo métodos para definir cabeçalhos, códigos de status e corpo da resposta.

### Routing

- **Kariri\Contract\Routing\RouterContract**: Define o contrato para o sistema de roteamento, incluindo métodos para definir rotas, combinar requisições com rotas definidas e recuperar parâmetros das rotas correspondentes.

### Database

- **Kariri\Contract\Database\ConnectionContract**: Define o contrato para estabelecer e gerenciar conexões com bancos de dados, incluindo métodos para criar conexões, executar consultas e recuperar resultados.

### View

- **Kariri\Contract\View\RendererContract**: Define o contrato para renderização de views, incluindo métodos para renderizar templates, passar dados para templates e recuperar o resultado renderizado.

### Cache

- **Kariri\Contract\Cache\CacheContract**: Define o contrato para o sistema de cache, incluindo métodos para armazenar, recuperar e remover dados em cache.

### Session

- **Kariri\Contract\Session\SessionContract**: Define o contrato para gerenciar sessões, incluindo métodos para iniciar, ler e gravar dados de sessão.

### Validation

- **Kariri\Contract\Validation\ValidatorContract**: Define o contrato para validação de dados, incluindo métodos para definir regras de validação e executar a validação.

### Authentication

- **Kariri\Contract\Auth\AuthContract**: Define o contrato para autenticação e autorização, incluindo métodos para autenticar usuários, verificar permissões e gerenciar credenciais.

### Queue

- **Kariri\Contract\Queue\QueueContract**: Define o contrato para o sistema de filas, incluindo métodos para enviar e processar tarefas assíncronas.

### Logging

- **Kariri\Contract\Log\LoggerContract**: Define o contrato para registro de logs, incluindo métodos para registrar mensagens de log com diferentes níveis de severidade.

### Filesystem

- **Kariri\Contract\Filesystem\FilesystemContract**: Define o contrato para interagir com o sistema de arquivos, incluindo métodos para ler, gravar e gerenciar arquivos e diretórios.

### Requisitos

- PHP 8.3 ou superior
- Extensões PHP necessárias (dependendo dos recursos utilizados)

## Documentação

Em desenvolvimento

## Contribuição

Se você encontrou um problema ou tem uma sugestão de melhoria, sinta-se à vontade para abrir uma nova issue ou enviar um pull request no repositório do GitHub.

## Licença

O Kariri PHP Framework é licenciado sob a [MIT License](LICENSE).
