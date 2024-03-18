<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariri-php-framework.growthcode.com.br
 */

namespace Kariri\Contract\Database;

/**
 * Executable Interface
 *
 * Defines the contract for executing statements and retrieving the result.
 */
interface Executable
{
    /**
     * Executes a statement and returns the number of affected rows or a result set.
     *
     * @param mixed $statement The statement to execute (could be a string, object, or other type depending on the database type).
     * @param array $bindings The parameter bindings for the statement.
     *
     * @return mixed The number of affected rows or a result set, depending on the database type.
     */
    public function statement(mixed $statement, array $bindings = []): mixed;
}
