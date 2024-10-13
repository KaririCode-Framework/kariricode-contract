<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Processor;

use KaririCode\Contract\Processor\Pipeline;
use KaririCode\Contract\Processor\Processor;
use PHPUnit\Framework\TestCase;

final class PipelineTest extends TestCase
{
    public function testAddProcessor(): void
    {
        $mock = $this->createMock(Pipeline::class);
        $processor = $this->createMock(Processor::class);

        $mock->expects($this->once())
            ->method('addProcessor')
            ->with($processor)
            ->willReturnSelf();

        $this->assertSame($mock, $mock->addProcessor($processor));
    }

    public function testProcess(): void
    {
        $mock = $this->createMock(Pipeline::class);
        $mock->expects($this->once())
            ->method('process')
            ->with('input')
            ->willReturn('output');

        $this->assertSame('output', $mock->process('input'));
    }
}
