<?php

declare(strict_types=1);

namespace KaririCode\Contract\Processor\Attribute;

abstract class BaseProcessorAttribute implements ProcessableAttribute, CustomizableMessageAttribute
{
    private readonly array $processors;
    private readonly array $messages;

    public function __construct(array $processors, ?array $messages = null)
    {
        $this->processors = self::filterValidProcessors($processors);
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

    private static function filterValidProcessors(array $processors): array
    {
        return array_filter($processors, static fn ($v) => null !== $v && false !== $v);
    }
}
