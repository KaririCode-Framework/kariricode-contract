<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure\Behavioral;

/**
 * Interface Indexable.
 *
 * Defines the contract for indexed access to elements.
 *
 * @category  Interfaces
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see       https://kariricode.org/
 */
interface Indexable
{
    /**
     * Checks if an element exists at the given index.
     *
     * @param int $index The index to check
     *
     * @return bool True if the index exists, false otherwise
     */
    public function contains(int $index): bool;

    /**
     * Gets the element at the specified index.
     *
     * @param int $index The index of the element
     *
     * @return mixed The element at the specified index
     */
    public function get(int $index): mixed;

    /**
     * Sets the element at the specified index.
     *
     * @param int $index The index at which to set the element
     * @param mixed $element The element to set
     */
    public function set(int $index, mixed $element): void;

    /**
     * Removes the element at the specified index.
     *
     * @param int $index The index of the element to remove
     *
     * @return bool True if the element was removed, false otherwise
     */
    public function remove(int $index): bool;
}
