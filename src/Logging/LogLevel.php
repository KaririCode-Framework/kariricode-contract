<?php

declare(strict_types=1);

namespace KaririCode\Contract\Logging;

/**
 * Interface LogLevel.
 *
 * Defines the contract for log levels.
 * Log levels indicate the severity or importance of a log record.
 *
 * @category  Logging
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see       https://kariricode.org/
 */
interface LogLevel
{
    /**
     * Gets the log level as a string.
     *
     * @return string the log level
     */
    public function getLevel(): string;
}
