<?php

declare(strict_types=1);

namespace KaririCode\Contract\Processor;

/**
 * Interface ProcessableAttribute.
 *
 * Defines the contract for an attribute that can hold a collection of processors and provide a fallback value if needed.
 *
 * @category  Processor
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see       https://kariricode.org/
 */
interface ProcessableAttribute
{
    /**
     * Retrieves the processors associated with the attribute.
     *
     * @return array The list of processors
     */
    public function getProcessors(): array;

    /**
     * Provides a fallback value for the attribute if processing fails or is not available.
     *
     * @return mixed The fallback value
     */
    public function getFallbackValue(): mixed;
}
