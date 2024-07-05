<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging\Structural;

use KaririCode\Contract\ImmutableValue;
use KaririCode\Contract\Logging\Structural\FormatterAware;
use PHPUnit\Framework\TestCase;

final class FormatterAwareTest extends TestCase
{
    public function testSetFormatter(): void
    {
        $formatterMock = $this->createMock(ImmutableValue::class);
        $formatterAwareMock = $this->createMock(FormatterAware::class);

        $formatterAwareMock->expects($this->once())
            ->method('setFormatter')
            ->with($this->equalTo($formatterMock))
            ->willReturnSelf();

        $this->assertSame($formatterAwareMock, $formatterAwareMock->setFormatter($formatterMock));
    }

    public function testGetFormatter(): void
    {
        $formatterMock = $this->createMock(ImmutableValue::class);
        $formatterAwareMock = $this->createMock(FormatterAware::class);

        $formatterAwareMock->expects($this->once())
            ->method('getFormatter')
            ->willReturn($formatterMock);

        $this->assertSame($formatterMock, $formatterAwareMock->getFormatter());
    }
}
