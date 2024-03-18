<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariri-php-framework.growthcode.com.br
 */

namespace Kariri\Contract\Console;

/**
 * OutputContract Interface
 *
 * Defines the contract for console output, including methods for writing
 * messages to the console.
 */
interface OutputContract
{
    /**
     * Writes a message to the console output.
     *
     * @param string $message The message to write.
     * @param bool $newline Whether to append a newline character after the message.
     *
     * @return void
     */
    public function write(string $message, bool $newline = false): void;

    /**
     * Writes a message to the console error output.
     *
     * @param string $message The error message to write.
     * @param bool $newline Whether to append a newline character after the message.
     *
     * @return void
     */
    public function error(string $message, bool $newline = false): void;
}
