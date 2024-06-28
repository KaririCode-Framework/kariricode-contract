<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Stack.
 *
 * Defines the contract for stack data structures, which follow the LIFO (Last-In-First-Out) principle.
 *
 *
 * @package   KaririCode\Contract\DataStructure
 * @category  Interfaces
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 * @see       https://kariricode.org/
 */
interface Stack
{
    /**
     * Pushes an element onto the stack.
     *
     * @param mixed $element The element to push.
     * @return void
     */
    public function push(mixed $element): void;

    /**
     * Pops an element from the stack.
     *
     * @return mixed The popped element.
     */
    public function pop(): mixed;

    /**
     * Peeks at the top element of the stack without removing it.
     *
     * @return mixed The top element.
     */
    public function peek(): mixed;
}
