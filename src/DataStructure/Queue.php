<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Queue.
 *
 * Defines the contract for a queue data structure.
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see      https://kariricode.org/
 */
interface Queue extends \Countable
{
    /**
     * Adds an item to the end of the queue.
     *
     * @param mixed $item the item to add
     */
    public function enqueue(mixed $item): void;

    /**
     * Removes and returns the item at the front of the queue.
     *
     * @return mixed the item at the front of the queue
     */
    public function dequeue(): mixed;

    /**
     * Gets the item at the front of the queue without removing it.
     *
     * @return mixed the item at the front of the queue
     */
    public function front(): mixed;

    /**
     * Checks if the queue is empty.
     *
     * @return bool true if the queue is empty, false otherwise
     */
    public function isEmpty(): bool;
}
