<?php

declare(strict_types=1);

namespace KaririCode\Contract\Behavioral;

/**
 * Interface Iterator.
 *
 * Defines the contract for iterating over a collection of elements.
 *
 * @package   KaririCode\Contract\Behavioral
 * @category  Interfaces
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 * @see       https://kariricode.org/
 */
interface Iterator
{
    /**
     * Returns the next element in the iteration.
     *
     * @return mixed The next element
     */
    public function next(): mixed;

    /**
     * Checks if the iteration has more elements.
     *
     * @return bool True if the iteration has more elements, false otherwise
     */
    public function hasNext(): bool;
}
