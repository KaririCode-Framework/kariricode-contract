<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface IterableCollection
 *
 * Provides the ability to iterate over a collection.
 *
 * @package   KaririCode-Framework
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 * @link      https://kariricode.org/
 */
interface IterableCollection extends \IteratorAggregate
{
    /**
     * Gets an iterator for the collection.
     *
     * @return \Traversable An iterator for the collection.
     */
    public function getIterator(): \Traversable;
}
