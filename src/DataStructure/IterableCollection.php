<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface IterableCollection.
 *
 * Provides the ability to iterate over a collection.
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see      https://kariricode.org/
 */
interface IterableCollection extends \IteratorAggregate
{
    /**
     * Gets an iterator for the collection.
     *
     * @return \Traversable an iterator for the collection
     */
    public function getIterator(): \Traversable;
}
