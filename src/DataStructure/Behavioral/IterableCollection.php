<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure\Behavioral;

use KaririCode\Contract\DataStructure\Behavioral\Iterator;

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
interface IterableCollection extends \Traversable
{
    /**
     * Gets an iterator for the collection.
     *
     * @return \Traversable an iterator for the collection
     */
    public function getIterator(): \Traversable;
}
