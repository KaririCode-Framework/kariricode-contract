<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Processor;

use KaririCode\Contract\Processor\Processor;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class ProcessorTest extends TestCase
{
    public function testProcess(): void
    {
        /** @var Processor|MockObject */
        $processor = $this->createMock(Processor::class);
        $processor->expects($this->once())
            ->method('process')
            ->with('input')
            ->willReturn('output');

        $this->assertSame('output', $processor->process('input'));
    }
}
