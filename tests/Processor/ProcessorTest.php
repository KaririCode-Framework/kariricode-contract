<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Processor;

use KaririCode\Contract\Processor\Processor;
use PHPUnit\Framework\TestCase;

final class ProcessorTest extends TestCase
{
    public function testProcess(): void
    {
        /** @var Processor|MockObject */
        $mock = $this->createMock(Processor::class);
        $mock->expects($this->once())
            ->method('process')
            ->with('input')
            ->willReturn('output');

        $this->assertSame('output', $mock->process('input'));
    }
}
