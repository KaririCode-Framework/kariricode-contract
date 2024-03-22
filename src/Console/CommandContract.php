<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariricode-php-framework.growthcode.com.br
 */

namespace KaririCode\Contract\Console;

/**
 * CommandContract Interface
 *
 * Defines the contract for console commands, including methods for executing
 * the command, defining arguments and options, and interacting with the
 * console input and output.
 */
interface CommandContract
{
    /**
     * Executes the console command.
     *
     * @param InputContract $input The input object.
     * @param OutputContract $output The output object.
     *
     * @return int The command exit code.
     */
    public function execute(InputContract $input, OutputContract $output): int;

    /**
     * Configures the command arguments and options.
     *
     * @return void
     */
    public function configure(): void;
}
