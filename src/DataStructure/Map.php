<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Map.
 *
 * Defines the contract for a map data structure.
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see      https://kariricode.org/
 */
interface Map extends \Countable, \ArrayAccess
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
     * @param mixed $key the key to remove
     *
     * @return bool true if the pair was successfully removed, false otherwise
     */
    public function remove(mixed $key): bool;

    /**
     * Checks if the map contains a specific key.
     *
     * @param mixed $key the key to check
     *
     * @return bool true if the key exists, false otherwise
     */
    public function containsKey(mixed $key): bool;

    /**
     * Gets all keys in the map.
     *
     * @return array an array of all keys
     */
    public function keys(): array;

    /**
     * Gets all values in the map.
     *
     * @return array an array of all values
     */
    public function values(): array;
}
