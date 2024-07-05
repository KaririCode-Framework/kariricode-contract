<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging;

use KaririCode\Contract\ImmutableValue;
use KaririCode\Contract\Logging\LogHandler;
use PHPUnit\Framework\TestCase;

final class LogHandlerTest extends TestCase
{
    public function testHandle(): void
    {
        $recordMock = $this->createMock(ImmutableValue::class);
        $logHandlerMock = $this->createMock(LogHandler::class);

        $logHandlerMock->expects($this->once())
            ->method('handle')
            ->with($this->equalTo($recordMock));

        $logHandlerMock->handle($recordMock);
    }
}
