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
}
