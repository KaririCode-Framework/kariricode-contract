<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging;

use KaririCode\Contract\Logging\LogLevel;
use PHPUnit\Framework\TestCase;

final class LogLevelTest extends TestCase
{
    public function testGetLevel(): void
    {
        $level = 'info';
        $logLevelMock = $this->createMock(LogLevel::class);

        $logLevelMock->expects($this->once())
            ->method('getLevel')
            ->willReturn($level);

        $this->assertSame($level, $logLevelMock->getLevel());
    }
}
