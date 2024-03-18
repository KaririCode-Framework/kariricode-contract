<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariri-php-framework.growthcode.com.br
 */

namespace Kariri\Contract\Provider;

use Kariri\Contract\Container\ContainerContract;

/**
 * ProviderContract Interface
 *
 * Defines the contract for providers, which are responsible for configuring
 * and registering services in the dependency injection container, as well as
 * initializing framework components and resources.
 */
interface ProviderContract
{
    /**
     * Registers services in the dependency injection container.
     *
     * @param ContainerContract $container The container instance.
     *
     * @return void
     */
    public function register(ContainerContract $container): void;

    /**
     * Boots the provider, initializing any necessary components or resources.
     *
     * @return void
     */
    public function boot(): void;
}
