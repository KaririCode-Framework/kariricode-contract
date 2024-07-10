<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging\Structural;

use KaririCode\Contract\Logging\Logger;
use KaririCode\Contract\Logging\Structural\LoggerAware;
use PHPUnit\Framework\TestCase;

class LoggerAwareTest extends TestCase
{
    public function testSetLogger(): void
    {
        $loggerMock = $this->createMock(Logger::class);
        $loggerAwareMock = $this->createMock(LoggerAware::class);

        $loggerAwareMock->expects($this->once())
            ->method('setLogger')
            ->with($this->equalTo($loggerMock));

        $loggerAwareMock->setLogger($loggerMock);
    }
}
