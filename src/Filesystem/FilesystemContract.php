<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariri-php-framework.growthcode.com.br
 */

namespace Kariri\Contract\Filesystem;

/**
 * FilesystemContract Interface
 *
 * Defines the contract for interacting with the file system, including methods
 * for reading, writing, and managing files and directories.
 */
interface FilesystemContract
{
    /**
     * Retrieves the contents of a file.
     *
     * @param string $path The path to the file.
     *
     * @return string The contents of the file.
     */
    public function get(string $path): string;

    /**
     * Writes content to a file.
     *
     * @param string $path The path to the file.
     * @param string $contents The content to write to the file.
     *
     * @return bool True if the write operation was successful, false otherwise.
     */
    public function put(string $path, string $contents): bool;

    /**
     * Checks if a file exists.
     *
     * @param string $path The path to the file.
     *
     * @return bool True if the file exists, false otherwise.
     */
    public function exists(string $path): bool;

    /**
     * Deletes a file.
     *
     * @param string $path The path to the file.
     *
     * @return bool True if the deletion was successful, false otherwise.
     */
    public function delete(string $path): bool;

    /**
     * Copies a file to a new location.
     *
     * @param string $source The path to the source file.
     * @param string $destination The path to the destination file.
     *
     * @return bool True if the copy operation was successful, false otherwise.
     */
    public function copy(string $source, string $destination): bool;

    /**
     * Moves a file to a new location.
     *
     * @param string $source The path to the source file.
     * @param string $destination The path to the destination file.
     *
     * @return bool True if the move operation was successful, false otherwise.
     */
    public function move(string $source, string $destination): bool;
}
