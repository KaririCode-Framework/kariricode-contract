<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging\Structural;

use KaririCode\Contract\Logging\Structural\ContextAware;
use PHPUnit\Framework\TestCase;

final class ContextAwareTest extends TestCase
{
    public function testWithContext(): void
    {
        $context = ['key' => 'value'];
        $contextAwareMock = $this->createMock(ContextAware::class);

        $contextAwareMock->expects($this->once())
            ->method('withContext')
            ->with($this->equalTo($context))
            ->willReturnSelf();

        $this->assertSame($contextAwareMock, $contextAwareMock->withContext($context));
    }

    public function testGetContext(): void
    {
        $context = ['key' => 'value'];
        $contextAwareMock = $this->createMock(ContextAware::class);

        $contextAwareMock->expects($this->once())
            ->method('getContext')
            ->willReturn($context);

        $this->assertSame($context, $contextAwareMock->getContext());
    }
}
