<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariri-php-framework.growthcode.com.br
 */

namespace Kariri\Contract\Console;

/**
 * InputContract Interface
 *
 * Defines the contract for console input, including methods for retrieving
 * command arguments and options.
 */
interface InputContract
{
    /**
     * Retrieves the value of a command argument.
     *
     * @param string $name The name of the argument.
     * @param mixed $default The default value to return if the argument is not provided.
     *
     * @return mixed The value of the argument, or the default value if not provided.
     */
    public function getArgument(string $name, mixed $default = null): mixed;

    /**
     * Retrieves the value of a command option.
     *
     * @param string $name The name of the option.
     * @param mixed $default The default value to return if the option is not provided.
     *
     * @return mixed The value of the option, or the default value if not provided.
     */
    public function getOption(string $name, mixed $default = null): mixed;
}
