<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariricode-php-framework.growthcode.com.br
 */

namespace KaririCode\Contract\Database;

/**
 * NoSqlConnectionContract Interface
 *
 * Defines the contract for establishing and managing database connections.
 * This interface combines other complementary interfaces.
 */
interface NoSqlConnectionContract extends Connection, Queryable, Executable
{
    /**
     * Inserts a new record into a specified table.
     *
     * @param string $table The name of the table.
     * @param array $data The data to insert.
     *
     * @return mixed The result of the insert operation.
     */
    public function insert(string $table, array $data): mixed;

    /**
     * Updates records in a specified table based on provided conditions.
     *
     * @param string $table The name of the table.
     * @param array $data The data to update.
     * @param array $conditions The conditions that determine which records to update.
     *
     * @return mixed The result of the update operation.
     */
    public function update(string $table, array $data, array $conditions): mixed;

    /**
     * Deletes records from a specified table based on provided conditions.
     *
     * @param string $table The name of the table.
     * @param array $conditions The conditions that determine which records to delete.
     *
     * @return mixed The result of the delete operation.
     */
    public function delete(string $table, array $conditions): mixed;
}
