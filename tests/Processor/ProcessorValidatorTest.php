<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Processor;

use KaririCode\Contract\Processor\Processor;
use KaririCode\Contract\Processor\ProcessorValidator;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class ProcessorValidatorTest extends TestCase
{
    public function testValidateReturnsNullOnValidProcessor(): void
    {
        /** @var Processor|MockObject */
        $processor = $this->createMock(Processor::class);
        /** @var ProcessorValidator|MockObject */
        $validator = $this->createMock(ProcessorValidator::class);

        $validator->expects($this->once())
            ->method('validate')
            ->with($processor, 'testProcessor', [])
            ->willReturn(null);

        $this->assertNull($validator->validate($processor, 'testProcessor', []));
    }

    public function testValidateReturnsErrorDetailsOnInvalidProcessor(): void
    {
        /** @var Processor|MockObject */
        $processor = $this->createMock(Processor::class);
        /** @var ProcessorValidator|MockObject */
        $validator = $this->createMock(ProcessorValidator::class);

        $errorDetails = ['error' => 'Invalid processor'];

        $validator->expects($this->once())
            ->method('validate')
            ->with($processor, 'testProcessor', [])
            ->willReturn($errorDetails);

        $this->assertSame($errorDetails, $validator->validate($processor, 'testProcessor', []));
    }
}
