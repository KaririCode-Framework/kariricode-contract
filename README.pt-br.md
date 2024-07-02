# KaririCode Framework: Contract Component

[![en](https://img.shields.io/badge/lang-en-red.svg)](README.md)
[![pt-br](https://img.shields.io/badge/lang-pt--br-green.svg)](README.pt-br.md)

![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)
![Makefile](https://img.shields.io/badge/Makefile-1D1D1D?style=for-the-badge&logo=gnu&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![PHPUnit](https://img.shields.io/badge/PHPUnit-78E130?style=for-the-badge&logo=phpunit&logoColor=white)

## Visão Geral

O componente Contract é uma parte fundamental do KaririCode Framework, fornecendo um conjunto abrangente de interfaces que definem os contratos para várias estruturas de dados e comportamentos. Essas interfaces servem como base para implementar componentes de estrutura de dados robustos, consistentes e interoperáveis dentro do ecossistema KaririCode e além.

## Características Principais

- **Conjunto Abrangente de Interfaces**: Cobre uma ampla gama de estruturas de dados e comportamentos.
- **Segurança de Tipos**: Aproveita os recursos do PHP 8.3+ para melhor verificação de tipos e maior confiabilidade do código.
- **Flexibilidade**: Permite múltiplas implementações da mesma interface, promovendo reutilização de código e modularidade.
- **Padronização**: Fornece uma API consistente em diferentes implementações.

## Interfaces Disponíveis e Suas Aplicações

### Interfaces Estruturais

#### Collection

Define o contrato para uma coleção de elementos. Ideal para implementar listas, conjuntos e outras coleções personalizadas.

**Aplicações Sugeridas:**

- Implementação de um catálogo de produtos em um e-commerce.
- Gerenciamento de uma lista de tarefas em um aplicativo de produtividade.

#### Map

Define o contrato para estruturas de dados de mapa, que armazenam pares chave-valor.

**Aplicações Sugeridas:**

- Implementação de um cache de dados em memória.
- Gerenciamento de sessões de usuário em um aplicativo web.

#### Set

Define o contrato para estruturas de dados de conjunto, que não permitem elementos duplicados.

**Aplicações Sugeridas:**

- Manutenção de uma lista única de tags em um sistema de blog.
- Implementação de um filtro de spam baseado em endereços IP.

#### Queue

Define o contrato para estruturas de dados de fila, que seguem o princípio FIFO (First-In-First-Out).

**Aplicações Sugeridas:**

- Sistema de processamento de pedidos em um restaurante.
- Gerenciamento de tarefas em um sistema de impressão.

#### Stack

Define o contrato para estruturas de dados de pilha, que seguem o princípio LIFO (Last-In-First-Out).

**Aplicações Sugeridas:**

- Implementação de um histórico de navegação em um navegador web.
- Gerenciamento de chamadas de função em um interpretador de linguagem de programação.

#### Tree

Define o contrato para estruturas de dados em árvore.

**Aplicações Sugeridas:**

- Representação de estruturas hierárquicas, como categorias de produtos.
- Implementação de um sistema de arquivos virtual.

#### Heap

Define o contrato para estruturas de dados de heap.

**Aplicações Sugeridas:**

- Implementação de uma fila de prioridade em um sistema de atendimento ao cliente.
- Otimização de algoritmos de ordenação e busca.

#### Deque

Estende a interface Queue para definir o contrato para estruturas de fila de duas pontas.

**Aplicações Sugeridas:**

- Implementação de um buffer circular para processamento de streams de dados.
- Desenvolvimento de um jogo de cartas onde as cartas podem ser adicionadas ou removidas de ambas as extremidades.

### Interfaces Comportamentais

#### Countable, Indexable, Modifiable, Searchable

Estas interfaces definem comportamentos comuns que podem ser aplicados a várias estruturas de dados.

**Aplicações Sugeridas:**

- Implementação de coleções personalizadas com funcionalidades específicas.
- Desenvolvimento de wrappers para estruturas de dados existentes para adicionar novas funcionalidades.

#### Sortable, Comparable

Definem contratos para objetos que podem ser ordenados e comparados.

**Aplicações Sugeridas:**

- Implementação de algoritmos de ordenação personalizados.
- Desenvolvimento de estruturas de dados ordenadas, como árvores de busca binária.

#### IterableCollection, Iterator

Fornecem a capacidade de iterar sobre uma coleção.

**Aplicações Sugeridas:**

- Implementação de coleções personalizadas que podem ser usadas em loops foreach.
- Desenvolvimento de iteradores especializados para percorrer estruturas de dados complexas.

### Interfaces Especializadas

#### BPlusTreeCollection

Define o contrato para estruturas de dados de árvore B+.

**Aplicações Sugeridas:**

- Implementação de índices de banco de dados para consultas rápidas.
- Otimização de sistemas de arquivos para acesso rápido a grandes volumes de dados.

#### Serializable

Define o contrato para serializar e desserializar dados.

**Aplicações Sugeridas:**

- Implementação de um sistema de cache que pode armazenar objetos complexos.
- Desenvolvimento de um mecanismo de persistência de dados personalizado.

## Instalação

### Requisitos

- PHP 8.3 ou superior
- Composer

### Via Composer

```bash
composer require kariricode/contract
```

## Uso

Para usar essas interfaces em seu projeto, simplesmente implemente-as em suas classes. Por exemplo:

```php
use KaririCode\Contract\DataStructure\Collection;

class MinhaColecao implements Collection
{
    // Implemente os métodos definidos na interface Collection
}
```

## Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para detalhes.

## Suporte e Comunidade

- **Documentação**: [https://kariricode.org](https://kariricode.org)
- **Rastreador de Problemas**: [GitHub Issues](https://github.com/KaririCode-Framework/kariricode-contract/issues)
- **Comunidade**: [Comunidade KaririCode Club](https://kariricode.club)
- **Suporte Profissional**: Para suporte de nível empresarial, entre em contato conosco em support@kariricode.org

## Agradecimentos

- A equipe do KaririCode Framework e contribuidores.
- A comunidade PHP por seu contínuo apoio e inspiração.

---

Construído com ❤️ pela equipe KaririCode. Capacitando desenvolvedores a construir aplicações PHP mais robustas e flexíveis.

Mantido por Walmir Silva - [walmir.silva@kariricode.org](mailto:walmir.silva@kariricode.org)
