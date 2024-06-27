<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Tree.
 *
 * Defines the contract for a tree data structure.
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see      https://kariricode.org/
 */
interface Tree
{
    /**
     * Inserts a value into the tree.
     *
     * @param mixed $value the value to insert
     */
    public function insert(mixed $value): void;

    /**
     * Searches for a value in the tree.
     *
     * @param mixed $value the value to search for
     *
     * @return object|null the node containing the value, or null if not found
     */
    public function search(mixed $value): ?object;

    /**
     * Deletes a value from the tree.
     *
     * @param mixed $value the value to delete
     *
     * @return bool true if the value was successfully deleted, false otherwise
     */
    public function delete(mixed $value): bool;

    /**
     * Performs an in-order traversal of the tree.
     *
     * @return \Generator a generator for the in-order traversal
     */
    public function inOrderTraversal(): \Generator;
}
