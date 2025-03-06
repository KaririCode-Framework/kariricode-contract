<?php

declare(strict_types=1);

namespace KaririCode\Contract\DI;

/**
 * Interface ContainerInterface.
 *
 * Defines the contract for a dependency injection container that manages the creation and resolution of services.
 *
 * @category  DependencyInjection
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 */
interface Container
{
    /**
     * Sets a service in the container.
     *
     * @param string   $id      Identifier of the service
     * @param callable $service The callable that returns the service instance
     */
    public function set(string $id, callable $service): void;

    /**
     * Retrieves a service by its identifier.
     *
     * @param string $id Identifier of the service to retrieve
     *
     * @return mixed The service instance
     */
    public function get(string $id): mixed;

    /**
     * Resolves and returns an instance of the given abstract type.
     *
     * @param string $abstract The abstract type or identifier to resolve
     *
     * @return object Resolved instance of the given abstract
     */
    public function resolve(string $abstract): object;

    /**
     * Binds a concrete implementation to an abstract type with optional parameters.
     *
     * @param string $abstract   The abstract type or identifier
     * @param mixed  $concrete   The concrete implementation (class name or closure)
     * @param array  $parameters Optional parameters for instantiation
     */
    public function bind(string $abstract, mixed $concrete, array $parameters = []): void;

    /**
     * Registers a singleton binding, ensuring the instance is created only once.
     *
     * @param string $abstract   The abstract type or identifier
     * @param mixed  $concrete   The concrete implementation (class name or closure)
     * @param array  $parameters Optional parameters
     */
    public function singleton(string $abstract, mixed $concrete, array $parameters = []): void;

    /**
     * Checks if the container can return a service for the given identifier.
     *
     * @param string $id Identifier of the service to check
     *
     * @return bool True if the service is found, false otherwise
     */
    public function has(string $id): bool;
}
