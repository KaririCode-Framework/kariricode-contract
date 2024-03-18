<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariri-php-framework.growthcode.com.br
 */

namespace Kariri\Contract\Container;

/**
 * ContainerContract Interface
 *
 * Defines the contract for the dependency injection container, including methods
 * for binding interfaces to concrete implementations, resolving dependencies,
 * and getting instances of classes.
 */
interface ContainerContract
{
    /**
     * Binds an interface to a concrete implementation.
     *
     * @param string $abstract The interface or abstract class name.
     * @param mixed $concrete The concrete implementation or a closure for lazy loading.
     * @param bool $shared Whether the implementation should be shared (singleton) or not.
     *
     * @return void
     */
    public function bind(string $abstract, $concrete, bool $shared = false): void;

    /**
     * Resolves and returns an instance of the specified class or interface.
     *
     * @param string $abstract The class or interface to resolve.
     *
     * @return mixed The resolved instance.
     */
    public function make(string $abstract): mixed;

    /**
     * Checks if the container has a binding for the specified interface or class.
     *
     * @param string $abstract The interface or class name.
     *
     * @return bool True if a binding exists, false otherwise.
     */
    public function has(string $abstract): bool;
}
