<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface CollectionList
 *
 * Represents a collection of items with list-based operations.
 * Extends IterableCollection, Countable, and ArrayAccess for additional functionality.
 *
 * @package   KaririCode-Framework
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 * @link      https://kariricode.org/
 */
interface CollectionList extends IterableCollection, \Countable, \ArrayAccess
{
    /**
     * Adds an item to the collection.
     *
     * @param mixed $item The item to add.
     */
    public function add(mixed $item): void;

    /**
     * Removes an item from the collection.
     *
     * @param mixed $item The item to remove.
     * @return bool True if the item was successfully removed, false otherwise.
     */
    public function remove(mixed $item): bool;

    /**
     * Gets an item from the collection by index.
     *
     * @param int $index The index of the item to retrieve.
     * @return mixed The item at the specified index.
     */
    public function get(int $index): mixed;

    /**
     * Clears all items from the collection.
     */
    public function clear(): void;
}
