# KaririCode Framework: Contract Component

[![en](https://img.shields.io/badge/lang-en-red.svg)](README.md)
[![pt-br](https://img.shields.io/badge/lang-pt--br-green.svg)](README.pt-br.md)

![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)
![Makefile](https://img.shields.io/badge/Makefile-1D1D1D?style=for-the-badge&logo=gnu&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![PHPUnit](https://img.shields.io/badge/PHPUnit-78E130?style=for-the-badge&logo=phpunit&logoColor=white)

## Overview

The Contract component is a fundamental part of the KaririCode Framework, providing a comprehensive set of interfaces that define contracts for various data structures and behaviors. These interfaces serve as the foundation for implementing robust, consistent, and interoperable data structure components within and beyond the KaririCode ecosystem.

## Key Features

- **Comprehensive Set of Interfaces**: Covers a wide range of data structures and behaviors.
- **Type Safety**: Leverages PHP 8.3+ features for better type checking and higher code reliability.
- **Flexibility**: Allows multiple implementations of the same interface, promoting code reuse and modularity.
- **Standardization**: Provides a consistent API across different implementations.

## Available Interfaces and Their Applications

### Structural Interfaces

#### Collection

Defines the contract for a collection of elements. Ideal for implementing lists, sets, and other custom collections.

**Suggested Applications:**

- Implementing a product catalog in an e-commerce site.
- Managing a task list in a productivity app.

#### Map

Defines the contract for map data structures, which store key-value pairs.

**Suggested Applications:**

- Implementing an in-memory data cache.
- Managing user sessions in a web application.

#### Set

Defines the contract for set data structures, which do not allow duplicate elements.

**Suggested Applications:**

- Maintaining a unique list of tags in a blog system.
- Implementing a spam filter based on IP addresses.

#### Queue

Defines the contract for queue data structures, which follow the FIFO (First-In-First-Out) principle.

**Suggested Applications:**

- Order processing system in a restaurant.
- Task management in a print system.

#### Stack

Defines the contract for stack data structures, which follow the LIFO (Last-In-First-Out) principle.

**Suggested Applications:**

- Implementing a browser history in a web browser.
- Managing function calls in a programming language interpreter.

#### Tree

Defines the contract for tree data structures.

**Suggested Applications:**

- Representing hierarchical structures such as product categories.
- Implementing a virtual file system.

#### Heap

Defines the contract for heap data structures.

**Suggested Applications:**

- Implementing a priority queue in a customer service system.
- Optimizing sorting and search algorithms.

#### Deque

Extends the Queue interface to define the contract for double-ended queue structures.

**Suggested Applications:**

- Implementing a circular buffer for stream processing.
- Developing a card game where cards can be added or removed from both ends.

### Behavioral Interfaces

#### Countable, Indexable, Modifiable, Searchable

These interfaces define common behaviors that can be applied to various data structures.

**Suggested Applications:**

- Implementing custom collections with specific functionalities.
- Developing wrappers for existing data structures to add new features.

#### Sortable, Comparable

Define contracts for objects that can be sorted and compared.

**Suggested Applications:**

- Implementing custom sorting algorithms.
- Developing ordered data structures, such as binary search trees.

#### IterableCollection, Iterator

Provide the ability to iterate over a collection.

**Suggested Applications:**

- Implementing custom collections that can be used in foreach loops.
- Developing specialized iterators to traverse complex data structures.

### Specialized Interfaces

#### BPlusTreeCollection

Defines the contract for B+ tree data structures.

**Suggested Applications:**

- Implementing database indexes for fast queries.
- Optimizing file systems for quick access to large volumes of data.

#### Serializable

Defines the contract for serializing and deserializing data.

**Suggested Applications:**

- Implementing a cache system that can store complex objects.
- Developing a custom data persistence mechanism.

## Installation

### Requirements

- PHP 8.3 or higher
- Composer

### Via Composer

```bash
composer require kariricode/contract
```

## Usage

To use these interfaces in your project, simply implement them in your classes. For example:

```php
use KaririCode\Contract\DataStructure\Collection;

class MyCollection implements Collection
{
    // Implement the methods defined in the Collection interface
}
```

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Support and Community

- **Documentation**: [https://kariricode.org](https://kariricode.org)
- **Issue Tracker**: [GitHub Issues](https://github.com/KaririCode-Framework/kariricode-contract/issues)
- **Community**: [KaririCode Club Community](https://kariricode.club)
- **Professional Support**: For enterprise-level support, contact us at support@kariricode.org

## Acknowledgments

- The KaririCode Framework team and contributors.
- The PHP community for their continuous support and inspiration.

---

Built with ❤️ by the KaririCode team. Empowering developers to build more robust and flexible PHP applications.

Maintained by Walmir Silva - [walmir.silva@kariricode.org](mailto:walmir.silva@kariricode.org)
