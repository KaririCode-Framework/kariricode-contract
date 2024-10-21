<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Processor;

use KaririCode\Contract\Processor\ValidatableProcessor;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class ValidatableProcessorTest extends TestCase
{
    public function testIsValidReturnsTrueForValidProcessor(): void
    {
        /** @var ValidatableProcessor|MockObject */
        $processor = $this->createMock(ValidatableProcessor::class);

        $processor->expects($this->once())
            ->method('isValid')
            ->willReturn(true);

        $this->assertTrue($processor->isValid());
    }

    public function testIsValidReturnsFalseForInvalidProcessor(): void
    {
        /** @var ValidatableProcessor|MockObject */
        $processor = $this->createMock(ValidatableProcessor::class);

        $processor->expects($this->once())
            ->method('isValid')
            ->willReturn(false);

        $this->assertFalse($processor->isValid());
    }

    public function testGetErrorKeyReturnsNullForValidProcessor(): void
    {
        /** @var ValidatableProcessor|MockObject */
        $processor = $this->createMock(ValidatableProcessor::class);

        $processor->expects($this->once())
            ->method('getErrorKey')
            ->willReturn(null);

        $this->assertNull($processor->getErrorKey());
    }

    public function testGetErrorKeyReturnsErrorKeyForInvalidProcessor(): void
    {
        /** @var ValidatableProcessor|MockObject */
        $processor = $this->createMock(ValidatableProcessor::class);

        $errorKey = 'error_key_123';

        $processor->expects($this->once())
            ->method('getErrorKey')
            ->willReturn($errorKey);

        $this->assertSame($errorKey, $processor->getErrorKey());
    }
}
