<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariricode-php-framework.growthcode.com.br
 */

namespace KaririCode\Contract\Cache;

/**
 * CacheContract Interface
 *
 * Defines the contract for the caching system, including methods for storing,
 * retrieving, and removing cached data.
 */
interface CacheContract
{
    /**
     * Retrieves an item from the cache by its unique key.
     *
     * @param string $key The unique key of the cached item.
     * @param mixed $default The default value to return if the item is not found in the cache.
     *
     * @return mixed The cached value, or the default value if not found.
     */
    public function get(string $key, mixed $default = null): mixed;

    /**
     * Stores an item in the cache for a specified duration.
     *
     * @param string $key The unique key for the cached item.
     * @param mixed $value The value to be cached.
     * @param ?int $ttl The time-to-live (in seconds) for the cached item, or null for indefinite caching.
     *
     * @return bool True if the item was successfully cached, false otherwise.
     */
    public function put(string $key, mixed $value, ?int $ttl = null): bool;

    /**
     * Removes an item from the cache by its unique key.
     *
     * @param string $key The unique key of the cached item.
     *
     * @return bool True if the item was successfully removed, false otherwise.
     */
    public function forget(string $key): bool;

    /**
     * Flushes all items from the cache.
     *
     * @return bool True if the cache was successfully flushed, false otherwise.
     */
    public function flush(): bool;
}
