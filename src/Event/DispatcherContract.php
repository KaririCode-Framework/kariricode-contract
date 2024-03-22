<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariricode-php-framework.growthcode.com.br
 */

namespace KaririCode\Contract\Events;

/**
 * DispatcherContract Interface
 *
 * Defines the contract for the event dispatcher, including methods for registering
 * event listeners, firing events, and propagating events through different
 * application layers.
 */
interface DispatcherContract
{
    /**
     * Registers an event listener with the dispatcher.
     *
     * @param string $event The event name.
     * @param callable|string $listener The event listener callback or class name.
     * @param int $priority The priority of the listener (higher values are executed first).
     *
     * @return void
     */
    public function listen(string $event, callable|string $listener, int $priority = 0): void;

    /**
     * Fires an event and calls all registered listeners.
     *
     * @param string $event The event name.
     * @param mixed $payload The event payload.
     * @param bool $halt Whether to halt the propagation after the first non-null result.
     *
     * @return mixed|null The result of the event propagation.
     */
    public function dispatch(string $event, mixed $payload = null, bool $halt = false): mixed;
}
