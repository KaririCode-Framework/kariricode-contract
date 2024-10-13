<?php

declare(strict_types=1);

namespace KaririCode\Contract\Processor;

/**
 * Interface Processor.
 *
 * Defines the contract for a processor that can transform or validate input data.
 *
 * @category  Processor
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see       https://kariricode.org/
 */
interface Processor
{
    /**
     * Processes the provided input and returns the result.
     *
     * @param mixed $input The value to be processed
     *
     * @return mixed The result of the processing
     */
    public function process(mixed $input): mixed;
}
