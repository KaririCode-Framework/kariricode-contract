<?php

declare(strict_types=1);

namespace KaririCode\Contract\DataStructure;

/**
 * Interface Map
 *
 * Defines the contract for a map data structure.
 *
 * @package   KaririCode-Framework
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 * @link      https://kariricode.org/
 */
interface Map extends \Countable, \ArrayAccess
{
    /**
     * Puts a key-value pair into the map.
     *
     * @param mixed $key The key.
     * @param mixed $value The value.
     */
    public function put(mixed $key, mixed $value): void;

    /**
     * Gets a value by its key.
     *
     * @param mixed $key The key.
     * @return mixed The value associated with the key.
     */
    public function get(mixed $key): mixed;

    /**
     * Removes a key-value pair from the map.
     *
     * @param mixed $key The key to remove.
     * @return bool True if the pair was successfully removed, false otherwise.
     */
    public function remove(mixed $key): bool;

    /**
     * Checks if the map contains a specific key.
     *
     * @param mixed $key The key to check.
     * @return bool True if the key exists, false otherwise.
     */
    public function containsKey(mixed $key): bool;

    /**
     * Gets all keys in the map.
     *
     * @return array An array of all keys.
     */
    public function keys(): array;

    /**
     * Gets all values in the map.
     *
     * @return array An array of all values.
     */
    public function values(): array;
}
