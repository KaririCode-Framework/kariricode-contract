<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariricode-php-framework.growthcode.com.br
 */

namespace KaririCode\Contract\Database;

/**
 * Transactional Interface
 *
 * Defines the contract for managing database transactions (if supported by the database type).
 */
interface Transactional
{
    /**
     * Starts a new database transaction.
     *
     * @return void
     */
    public function beginTransaction(): void;

    /**
     * Commits the current database transaction.
     *
     * @return void
     */
    public function commit(): void;

    /**
     * Rolls back the current database transaction.
     *
     * @return void
     */
    public function rollBack(): void;
}
