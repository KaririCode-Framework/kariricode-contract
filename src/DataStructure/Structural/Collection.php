<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure\Structural;

use KaririCode\Contract\DataStructure\Behavioral\Countable;
use KaririCode\Contract\DataStructure\Behavioral\Indexable;
use KaririCode\Contract\DataStructure\Behavioral\IterableCollection;

/**
 * Interface Collection.
 *
 * Defines the contract for a collection of elements.
 *
 * @category  Interfaces
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see       https://kariricode.org/
 */
interface Collection extends Countable, Indexable
{
    /**
     * Adds an element to the collection.
     *
     * @param mixed $element The element to add
     */
    public function add(mixed $element): void;

    /**
     * Adds all elements from another collection to this collection.
     *
     * @param Collection $collection The collection whose elements are to be added
     */
    public function addAll(Collection $collection): void;

    /**
     * Removes the first occurrence of a specific element from the collection.
     *
     * @param mixed $element The element to remove
     *
     * @return bool True if the element was removed, false otherwise
     */
    public function remove(mixed $element): bool;

    /**
     * Checks if the collection contains a specific element.
     *
     * @param mixed $element The element to check for
     *
     * @return bool True if the element is present, false otherwise
     */
    public function contains(mixed $element): bool;

    /**
     * Removes all elements from the collection.
     */
    public function clear(): void;

    /**
     * Checks if the collection is empty.
     *
     * @return bool True if the collection is empty, false otherwise
     */
    public function isEmpty(): bool;

    /**
     * Returns all elements of the collection as an array.
     *
     * @return array The elements of the collection
     */
    public function getItems(): array;
}
