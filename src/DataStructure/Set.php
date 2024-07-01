<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Set.
 *
 * Defines the contract for set data structures, which do not allow duplicate elements.
 *
 * @category  Interfaces
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see       https://kariricode.org/
 */
interface Set
{
    /**
     * Adds an element to the set.
     *
     * @param mixed $element The element to add
     *
     * @return bool True if the element was added, false if it was already present
     */
    public function add(mixed $element): bool;

    /**
     * Removes an element from the set.
     *
     * @param mixed $element The element to remove
     *
     * @return bool True if the element was removed, false if it was not present
     */
    public function remove(mixed $element): bool;

    /**
     * Checks if the set contains a specific element.
     *
     * @param mixed $element The element to check for
     *
     * @return bool True if the element is present, false otherwise
     */
    public function contains(mixed $element): bool;

    /**
     * Removes all elements from the set.
     */
    public function clear(): void;

    /**
     * Returns the number of elements in the set.
     *
     * @return int The number of elements in the set
     */
    public function size(): int;

    /**
     * Checks if the set is empty.
     *
     * @return bool True if the set is empty, false otherwise
     */
    public function isEmpty(): bool;
}
