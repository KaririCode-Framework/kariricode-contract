<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Queue
 *
 * Defines the contract for a queue data structure.
 *
 * @package   KaririCode-Framework
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 * @link      https://kariricode.org/
 */
interface Queue extends \Countable
{
    /**
     * Adds an item to the end of the queue.
     *
     * @param mixed $item The item to add.
     */
    public function enqueue(mixed $item): void;

    /**
     * Removes and returns the item at the front of the queue.
     *
     * @return mixed The item at the front of the queue.
     */
    public function dequeue(): mixed;

    /**
     * Gets the item at the front of the queue without removing it.
     *
     * @return mixed The item at the front of the queue.
     */
    public function front(): mixed;

    /**
     * Checks if the queue is empty.
     *
     * @return bool True if the queue is empty, false otherwise.
     */
    public function isEmpty(): bool;
}
