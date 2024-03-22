<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariricode-php-framework.growthcode.com.br
 */

namespace KaririCode\Contract\Database;

/**
 * BaseConnection Interface
 *
 * Defines the basic contract for database connections.
 * This interface includes fundamental operations like connecting and disconnecting
 * from a database, and executing a query.
 */
interface Connection
{
    /**
     * Establishes a connection to the database.
     *
     * @return void
     */
    public function connect(): void;

    /**
     * Closes the connection to the database.
     *
     * @return void
     */
    public function disconnect(): void;
}
