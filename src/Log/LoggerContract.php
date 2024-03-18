<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariri-php-framework.growthcode.com.br
 */

namespace Kariri\Contract\Log;

/**
 * LoggerContract Interface
 *
 * Defines the contract for logging, including methods for logging messages
 * with different severity levels.
 */
interface LoggerContract
{
    /**
     * Logs a message with the 'emergency' severity level.
     *
     * @param string $message The log message.
     * @param array $context Additional context data.
     *
     * @return void
     */
    public function emergency(string $message, array $context = []): void;

    /**
     * Logs a message with the 'alert' severity level.
     *
     * @param string $message The log message.
     * @param array $context Additional context data.
     *
     * @return void
     */
    public function alert(string $message, array $context = []): void;

    /**
     * Logs a message with the 'critical' severity level.
     *
     * @param string $message The log message.
     * @param array $context Additional context data.
     *
     * @return void
     */
    public function critical(string $message, array $context = []): void;

    /**
     * Logs a message with the 'error' severity level.
     *
     * @param string $message The log message.
     * @param array $context Additional context data.
     *
     * @return void
     */
    public function error(string $message, array $context = []): void;

    /**
     * Logs a message with the 'warning' severity level.
     *
     * @param string $message The log message.
     * @param array $context Additional context data.
     *
     * @return void
     */
    public function warning(string $message, array $context = []): void;

    /**
     * Logs a message with the 'notice' severity level.
     *
     * @param string $message The log message.
     * @param array $context Additional context data.
     *
     * @return void
     */
    public function notice(string $message, array $context = []): void;

    /**
     * Logs a message with the 'info' severity level.
     *
     * @param string $message The log message.
     * @param array $context Additional context data.
     *
     * @return void
     */
    public function info(string $message, array $context = []): void;

    /**
     * Logs a message with the 'debug' severity level.
     *
     * @param string $message The log message.
     * @param array $context Additional context data.
     *
     * @return void
     */
    public function debug(string $message, array $context = []): void;
}
