<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Stack
 *
 * Defines the contract for a stack data structure.
 *
 * @package   KaririCode-Framework
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 * @link      https://kariricode.org/
 */
interface Stack extends \Countable
{
    /**
     * Adds an item to the top of the stack.
     *
     * @param mixed $item The item to add.
     */
    public function push(mixed $item): void;

    /**
     * Removes and returns the item at the top of the stack.
     *
     * @return mixed The item at the top of the stack.
     */
    public function pop(): mixed;

    /**
     * Gets the item at the top of the stack without removing it.
     *
     * @return mixed The item at the top of the stack.
     */
    public function peek(): mixed;

    /**
     * Checks if the stack is empty.
     *
     * @return bool True if the stack is empty, false otherwise.
     */
    public function isEmpty(): bool;
}
