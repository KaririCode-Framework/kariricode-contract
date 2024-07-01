<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure\Structural;

use KaririCode\Contract\DataStructure\Behavioral\Countable;
use KaririCode\Contract\DataStructure\Behavioral\Indexable;
use KaririCode\Contract\DataStructure\Behavioral\Modifiable;
use KaririCode\Contract\DataStructure\Behavioral\Searchable;

/**
 * Interface Collection.
 *
 * Defines the contract for a collection of elements.
 *
 * @category  Interfaces
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see       https://kariricode.org/
 */
interface Collection extends Countable, Indexable, Modifiable, Searchable
{
    /**
     * Adds all elements from another collection to this collection.
     *
     * @param Collection $collection The collection whose elements are to be added
     */
    public function addAll(Collection $collection): void;
}
