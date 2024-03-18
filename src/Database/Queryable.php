<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariri-php-framework.growthcode.com.br
 */

namespace Kariri\Contract\Database;

use Traversable;

/**
 * Queryable Interface
 *
 * Defines the contract for executing queries and retrieving result sets.
 */
interface Queryable
{
    /**
     * Executes a query and returns a result set.
     *
     * @param mixed $query The query to execute (could be a string, object, or other type depending on the database type).
     * @param array $bindings The parameter bindings for the query.
     *
     * @return Traversable The result set.
     */
    public function query(mixed $query, array $bindings = []): Traversable;
}
