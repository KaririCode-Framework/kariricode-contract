<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Tree
 *
 * Defines the contract for a tree data structure.
 *
 * @package   KaririCode-Framework
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 * @link      https://kariricode.org/
 */
interface Tree
{
    /**
     * Inserts a value into the tree.
     *
     * @param mixed $value The value to insert.
     */
    public function insert(mixed $value): void;

    /**
     * Searches for a value in the tree.
     *
     * @param mixed $value The value to search for.
     * @return object|null The node containing the value, or null if not found.
     */
    public function search(mixed $value): ?object;

    /**
     * Deletes a value from the tree.
     *
     * @param mixed $value The value to delete.
     * @return bool True if the value was successfully deleted, false otherwise.
     */
    public function delete(mixed $value): bool;

    /**
     * Performs an in-order traversal of the tree.
     *
     * @return \Generator A generator for the in-order traversal.
     */
    public function inOrderTraversal(): \Generator;
}
