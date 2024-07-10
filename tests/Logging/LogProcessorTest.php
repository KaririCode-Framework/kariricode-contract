<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging;

use KaririCode\Contract\ImmutableValue;
use KaririCode\Contract\Logging\LogProcessor;
use PHPUnit\Framework\TestCase;

final class LogProcessorTest extends TestCase
{
    public function testProcess(): void
    {
        $record = $this->createMock(ImmutableValue::class);
        $processedRecord = $this->createMock(ImmutableValue::class);
        $logProcessorMock = $this->createMock(LogProcessor::class);

        $logProcessorMock->expects($this->once())
            ->method('process')
            ->with($this->equalTo($record))
            ->willReturn($processedRecord);

        $this->assertSame($processedRecord, $logProcessorMock->process($record));
    }
}
