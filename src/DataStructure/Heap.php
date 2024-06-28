<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Heap.
 *
 * Defines the contract for heap data structures.
 * A heap is a specialized tree-based data structure that satisfies the heap property.
 *
 *
 * @package   KaririCode\Contract\DataStructure
 * @category  Interfaces
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 * @see       https://kariricode.org/
 */
interface Heap
{
    /**
     * Adds an element to the heap.
     *
     * @param mixed $element The element to add.
     * @return void
     */
    public function add(mixed $element): void;

    /**
     * Inserts an element into the heap at the specified position.
     *
     * @param int $index The index at which to insert the element.
     * @param mixed $element The element to insert.
     * @return void
     */
    public function insert(int $index, mixed $element): void;

    /**
     * Removes and returns the root element from the heap.
     *
     * @return mixed The removed root element.
     */
    public function poll(): mixed;

    /**
     * Removes a specific element from the heap.
     *
     * @param mixed $element The element to remove.
     * @return bool True if the element was removed, false otherwise.
     */
    public function remove(mixed $element): bool;

    /**
     * Returns the root element without removing it.
     *
     * @return mixed The root element.
     */
    public function peek(): mixed;
}
