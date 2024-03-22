<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariricode-php-framework.growthcode.com.br
 */

namespace KaririCode\Contract\Session;

/**
 * SessionContract Interface
 *
 * Defines the contract for managing sessions, including methods for starting,
 * reading, and writing session data.
 */
interface SessionContract
{
    /**
     * Starts the session.
     *
     * @return bool True if the session was started successfully, false otherwise.
     */
    public function start(): bool;

    /**
     * Retrieves the value of a session variable.
     *
     * @param string $key The key of the session variable.
     * @param mixed $default The default value to return if the session variable is not set.
     *
     * @return mixed The value of the session variable, or the default value if not set.
     */
    public function get(string $key, mixed $default = null): mixed;

    /**
     * Sets the value of a session variable.
     *
     * @param string $key The key of the session variable.
     * @param mixed $value The value to set for the session variable.
     *
     * @return void
     */
    public function set(string $key, mixed $value): void;

    /**
     * Removes a session variable from the session.
     *
     * @param string $key The key of the session variable to remove.
     *
     * @return void
     */
    public function forget(string $key): void;

    /**
     * Flushes all session data and terminates the session.
     *
     * @return void
     */
    public function flush(): void;
}
