<?php

/**
 * Kariri PHP Framework
 *
 * @author Walmir Silva <walmir.silva@growthcode.com.br>
 * @link   https://kariricode-php-framework.growthcode.com.br
 */

namespace KaririCode\Contract\Validation;

/**
 * ValidatorContract Interface
 *
 * Defines the contract for data validation, including methods for defining
 * validation rules and performing validation.
 */
interface ValidatorContract
{
    /**
     * Adds a validation rule for a specific field.
     *
     * @param string $field The name of the field to validate.
     * @param string $rule The validation rule to apply.
     * @param ?string $message The optional custom error message for the rule.
     *
     * @return $this The current Validator instance.
     */
    public function rule(string $field, string $rule, ?string $message = null): self;

    /**
     * Validates the provided data against the defined rules.
     *
     * @param array $data The data to validate.
     *
     * @return bool True if the data is valid, false otherwise.
     */
    public function validate(array $data): bool;

    /**
     * Retrieves the validation error messages.
     *
     * @return array An associative array of field names and their respective error messages.
     */
    public function errors(): array;
}
