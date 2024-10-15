<?php

declare(strict_types=1);

namespace KaririCode\Contract\Validator;

/**
 * Interface Validator.
 *
 * Defines the contract for a validator that can check the validity of input data.
 *
 * @category  Validator
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see       https://kariricode.org/
 */
interface Validator
{
    /**
     * Validates the provided input and returns a boolean indicating if the input is valid.
     *
     * @param mixed $input The value to be validated
     *
     * @return bool True if the input is valid, false otherwise
     */
    public function validate(mixed $input): bool;
}
