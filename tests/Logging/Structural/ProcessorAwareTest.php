<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging\Structural;

use KaririCode\Contract\Logging\LogProcessor;
use KaririCode\Contract\Logging\Structural\ProcessorAware;
use PHPUnit\Framework\TestCase;

final class ProcessorAwareTest extends TestCase
{
    public function testAddProcessor(): void
    {
        $processorMock = $this->createMock(LogProcessor::class);
        $processorAwareMock = $this->createMock(ProcessorAware::class);

        $processorAwareMock->expects($this->once())
            ->method('addProcessor')
            ->with($this->equalTo($processorMock))
            ->willReturnSelf();

        $this->assertSame($processorAwareMock, $processorAwareMock->addProcessor($processorMock));
    }

    public function testGetProcessors(): void
    {
        $processors = [$this->createMock(LogProcessor::class)];
        $processorAwareMock = $this->createMock(ProcessorAware::class);

        $processorAwareMock->expects($this->once())
            ->method('getProcessors')
            ->willReturn($processors);

        $this->assertSame($processors, $processorAwareMock->getProcessors());
    }
}
