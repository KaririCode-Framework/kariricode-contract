<?php

declare(strict_types=1);

namespace KaririCode\Contract\Processor\Attribute;

abstract class BaseProcessorAttribute implements ProcessableAttribute, CustomizableMessageAttribute
{
    protected array $processors;
    protected array $messages;

    public function __construct(array $processors, ?array $messages = null)
    {
        $this->processors = $this->normalizeProcessors($processors);
        $this->messages = $messages ?? [];
    }

    public function getProcessors(): array
    {
        return $this->processors;
    }

    public function getMessage(string $processorName): ?string
    {
        return $this->messages[$processorName] ?? null;
    }

    protected function normalizeProcessors(array $processors): array
    {
        $normalized = [];
        foreach ($processors as $key => $value) {
            if (is_int($key)) {
                $normalized[$value] = [];
            } elseif (is_string($value)) {
                $normalized[$key] = [];
            } else {
                $normalized[$key] = $value;
            }
        }

        return $normalized;
    }
}
