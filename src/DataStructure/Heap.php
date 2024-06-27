<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Heap
 *
 * Defines the contract for a heap data structure.
 *
 * @package   KaririCode-Framework
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 * @link      https://kariricode.org/
 */
interface Heap extends \Countable
{
    /**
     * Inserts a value into the heap.
     *
     * @param mixed $value The value to insert.
     */
    public function insert(mixed $value): void;

    /**
     * Extracts the top value from the heap.
     *
     * @return mixed The extracted value.
     */
    public function extract(): mixed;

    /**
     * Peeks at the top value of the heap without extracting it.
     *
     * @return mixed The top value.
     */
    public function peek(): mixed;

    /**
     * Checks if the heap is empty.
     *
     * @return bool True if the heap is empty, false otherwise.
     */
    public function isEmpty(): bool;
}
