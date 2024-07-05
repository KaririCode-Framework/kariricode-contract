<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging\Structural;

use KaririCode\Contract\Logging\LogHandler;
use KaririCode\Contract\Logging\LogLevel;
use KaririCode\Contract\Logging\Structural\HandlerAware;
use PHPUnit\Framework\TestCase;

final class HandlerAwareTest extends TestCase
{
    public function testAddHandler(): void
    {
        $handlerMock = $this->createMock(LogHandler::class);
        $levelMock = $this->createMock(LogLevel::class);
        $handlerAwareMock = $this->createMock(HandlerAware::class);

        $handlerAwareMock->expects($this->once())
            ->method('addHandler')
            ->with($this->equalTo($handlerMock), $this->equalTo($levelMock))
            ->willReturnSelf();

        $this->assertSame($handlerAwareMock, $handlerAwareMock->addHandler($handlerMock, $levelMock));
    }

    public function testPushHandler(): void
    {
        $handlerMock = $this->createMock(LogHandler::class);
        $handlerAwareMock = $this->createMock(HandlerAware::class);

        $handlerAwareMock->expects($this->once())
            ->method('pushHandler')
            ->with($this->equalTo($handlerMock))
            ->willReturnSelf();

        $this->assertSame($handlerAwareMock, $handlerAwareMock->pushHandler($handlerMock));
    }

    public function testPopHandler(): void
    {
        $handlerMock = $this->createMock(LogHandler::class);
        $handlerAwareMock = $this->createMock(HandlerAware::class);

        $handlerAwareMock->expects($this->once())
            ->method('popHandler')
            ->willReturn($handlerMock);

        $this->assertSame($handlerMock, $handlerAwareMock->popHandler());
    }

    public function testGetHandlers(): void
    {
        $handlers = [$this->createMock(LogHandler::class)];
        $handlerAwareMock = $this->createMock(HandlerAware::class);

        $handlerAwareMock->expects($this->once())
            ->method('getHandlers')
            ->willReturn($handlers);

        $this->assertSame($handlers, $handlerAwareMock->getHandlers());
    }
}
