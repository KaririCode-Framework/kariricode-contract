<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariricode-php-framework.growthcode.com.br
 */

namespace KaririCode\Contract\Events;

/**
 * ListenerContract Interface
 *
 * Defines the contract for event listeners, including methods for handling
 * specific events fired by the event dispatcher.
 */
interface ListenerContract
{
    /**
     * Handles the specified event.
     *
     * @param mixed $event The event object or payload.
     *
     * @return mixed The result of the event handling.
     */
    public function handle(mixed $event): mixed;
}
