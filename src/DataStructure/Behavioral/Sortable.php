<?php

declare(strict_types=1);

namespace KaririCode\Contract\Behavioral;

/**
 * Interface Sortable.
 *
 * Defines the contract for classes that can be sorted.
 * Classes implementing this interface should provide an implementation
 * for the sort method to allow sorting of their elements.
 *
 * @package   KaririCode\Contract\Behavioral
 * @category  Interfaces
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 * @see       https://kariricode.org/
 */
interface Sortable
{
    /**
     * Sorts the elements of the class.
     *
     * @return void
     */
    public function sort(): void;
}
