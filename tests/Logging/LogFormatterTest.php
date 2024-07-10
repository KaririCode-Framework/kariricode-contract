<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging;

use KaririCode\Contract\ImmutableValue;
use KaririCode\Contract\Logging\LogFormatter;
use PHPUnit\Framework\TestCase;

final class LogFormatterTest extends TestCase
{
    public function testFormat(): void
    {
        $recordMock = $this->createMock(ImmutableValue::class);
        $formatterMock = $this->createMock(LogFormatter::class);
        $formattedRecord = 'Formatted log record';

        $formatterMock->expects($this->once())
            ->method('format')
            ->with($this->equalTo($recordMock))
            ->willReturn($formattedRecord);

        $this->assertSame($formattedRecord, $formatterMock->format($recordMock));
    }

    public function testFormatBatch(): void
    {
        $recordMock1 = $this->createMock(ImmutableValue::class);
        $recordMock2 = $this->createMock(ImmutableValue::class);
        $records = [$recordMock1, $recordMock2];
        $formattedRecords = 'Formatted log records';

        $formatterMock = $this->createMock(LogFormatter::class);

        $formatterMock->expects($this->once())
            ->method('formatBatch')
            ->with($this->equalTo($records))
            ->willReturn($formattedRecords);

        $this->assertSame($formattedRecords, $formatterMock->formatBatch($records));
    }
}
