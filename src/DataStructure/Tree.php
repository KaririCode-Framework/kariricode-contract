<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Tree.
 *
 * Defines the contract for tree data structures.
 *
 * @package   KaririCode\Contract\DataStructure
 * @category  Interfaces
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 * @see       https://kariricode.org/
 */
interface Tree
{
    /**
     * Adds a value to the tree.
     *
     * @param mixed $value The value to add.
     * @return void
     */
    public function add(mixed $value): void;

    /**
     * Inserts a value into the tree at the specified position.
     *
     * @param int $index The index at which to insert the value.
     * @param mixed $value The value to insert.
     * @return void
     */
    public function insert(int $index, mixed $value): void;

    /**
     * Removes a value from the tree.
     *
     * @param mixed $value The value to remove.
     * @return bool True if the value was removed, false otherwise.
     */
    public function remove(mixed $value): bool;

    /**
     * Finds a value in the tree.
     *
     * @param mixed $value The value to find.
     * @return mixed|null The found value or null if not found.
     */
    public function find(mixed $value): mixed;

    /**
     * Checks if the tree contains a specific value.
     *
     * @param mixed $value The value to check.
     * @return bool True if the value is found, false otherwise.
     */
    public function contains(mixed $value): bool;
}
