<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Processor;

use KaririCode\Contract\Processor\ConfigurableProcessor;
use PHPUnit\Framework\TestCase;

final class ConfigurableProcessorTest extends TestCase
{
    public function testConfigure(): void
    {
        $mock = $this->createMock(ConfigurableProcessor::class);
        $mock->expects($this->once())
            ->method('configure')
            ->with(['option' => 'value']);

        $mock->configure(['option' => 'value']);
    }

    public function testProcess(): void
    {
        $mock = $this->createMock(ConfigurableProcessor::class);
        $mock->expects($this->once())
            ->method('process')
            ->with('input')
            ->willReturn('output');

        $this->assertSame('output', $mock->process('input'));
    }
}
