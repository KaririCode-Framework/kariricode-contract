<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

use KaririCode\Contract\DataStructure\Behavioral\Modifiable;
use KaririCode\Contract\DataStructure\Behavioral\Searchable;

/**
 * Interface Set.
 *
 * Defines the contract for set data structures, which do not allow duplicate elements.
 *
 * @category  DataStructure
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see       https://kariricode.org/
 */
interface Set extends Modifiable, Searchable
{
    /**
     * Performs a union of this set with another set.
     *
     * @param Set $other The other set to union with
     *
     * @return Set The resulting set after the union
     */
    public function union(Set $other): Set;

    /**
     * Performs an intersection of this set with another set.
     *
     * @param Set $other The other set to intersect with
     *
     * @return Set The resulting set after the intersection
     */
    public function intersection(Set $other): Set;

    /**
     * Performs a difference of this set with another set.
     *
     * @param Set $other The other set to differentiate with
     *
     * @return Set The resulting set after the difference
     */
    public function difference(Set $other): Set;
}
