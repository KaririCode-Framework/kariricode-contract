<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Map.
 *
 * Defines the contract for map data structures, which store key-value pairs.
 *
 * @category  Interfaces
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see       https://kariricode.org/
 */
interface Map
{
    /**
     * Puts a key-value pair into the map.
     *
     * @param mixed $key the key
     * @param mixed $value the value
     */
    public function put(mixed $key, mixed $value): void;

    /**
     * Gets a value by its key.
     *
     * @param mixed $key the key
     *
     * @return mixed the value associated with the key
     */
    public function get(mixed $key): mixed;

    /**
     * Removes a key-value pair from the map.
     *
     * @param mixed $key the key
     *
     * @return bool true if the key-value pair was removed, false otherwise
     */
    public function remove(mixed $key): bool;
    /**
     * Returns the number of key-value mappings in the map.
     *
     * @return int the number of key-value mappings
     */
    public function size(): int;
}
