<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Queue.
 *
 * Defines the contract for queue data structures, which follow the FIFO (First-In-First-Out) principle.
 *
 * @category  Interfaces
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see       https://kariricode.org/
 */
interface Queue
{
    /**
     * Enqueues an element into the queue.
     *
     * @param mixed $element the element to enqueue
     */
    public function enqueue(mixed $element): void;

    /**
     * Dequeues an element from the queue.
     *
     * @return mixed the dequeued element
     */
    public function dequeue(): mixed;

    /**
     * Returns the front element without removing it.
     *
     * @return mixed the front element
     */
    public function peek(): mixed;
}
