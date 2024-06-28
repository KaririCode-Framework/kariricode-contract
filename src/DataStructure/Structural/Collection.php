<?php

declare(strict_types=1);

namespace KaririCode\Contract\Structure;

use KaririCode\Contract\Behavioral\Countable;
use KaririCode\Contract\Behavioral\Indexable;
use KaririCode\Contract\DataStructure\IterableCollection;

/**
 * Interface Collection.
 *
 * Defines the contract for a collection of elements.
 *
 * @package   KaririCode\Contract\Structure
 * @category  Interfaces
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 * @see       https://kariricode.org/
 */
interface Collection extends Countable, Indexable, IterableCollection
{
    /**
     * Adds an element to the collection.
     *
     * @param mixed $element The element to add
     * @return void
     */
    public function add(mixed $element): void;

    /**
     * Adds all elements from another collection to this collection.
     *
     * @param Collection $collection The collection whose elements are to be added
     * @return void
     */
    public function addAll(Collection $collection): void;

    /**
     * Removes the first occurrence of a specific element from the collection.
     *
     * @param mixed $element The element to remove
     * @return bool True if the element was removed, false otherwise
     */
    public function remove(mixed $element): bool;

    /**
     * Checks if the collection contains a specific element.
     *
     * @param mixed $element The element to check for
     * @return bool True if the element is present, false otherwise
     */
    public function contains(mixed $element): bool;

    /**
     * Removes all elements from the collection.
     *
     * @return void
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
