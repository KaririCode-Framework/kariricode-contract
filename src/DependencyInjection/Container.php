<?php

declare(strict_types=1);

namespace KaririCode\Contract\DependencyInjection;

/**
 * Interface ContainerInterface.
 *
 * Defines the contract for a dependency injection container that manages the creation and resolution of services.
 *
 * @category  DependencyInjection
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see       https://kariricode.org/
 */
interface Container
{
    /**
     * Registers a service with the container.
     *
     * @param string $id identifier of the service to register
     * @param callable $service a callable that returns the service instance
     */
    public function set(string $id, callable $service): void;

    /**
     * Retrieves a service by its identifier.
     *
     * @param string $id identifier of the service to retrieve
     *
     * @return mixed the service instance
     */
    public function get(string $id): mixed;

    /**
     * Checks if the container can return a service for the given identifier.
     *
     * @param string $id identifier of the service to check
     *
     * @return bool true if the service is found, false otherwise
     */
    public function has(string $id): bool;
}
