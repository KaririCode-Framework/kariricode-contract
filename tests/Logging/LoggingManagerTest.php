<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging;

use KaririCode\Contract\ImmutableValue;
use KaririCode\Contract\Logging\LogFormatter;
use KaririCode\Contract\Logging\LoggingManager;
use KaririCode\Contract\Logging\LogHandler;
use KaririCode\Contract\Logging\LogLevel;
use KaririCode\Contract\Logging\LogProcessor;
use PHPUnit\Framework\TestCase;

final class LoggingManagerTest extends TestCase
{
    public function testGetName(): void
    {
        $name = 'TestLogger';
        $loggingManagerMock = $this->createMock(LoggingManager::class);

        $loggingManagerMock->expects($this->once())
            ->method('getName')
            ->willReturn($name);

        $this->assertSame($name, $loggingManagerMock->getName());
    }

    public function testAddHandler(): void
    {
        $handlerMock = $this->createMock(LogHandler::class);
        $levelMock = $this->createMock(LogLevel::class);
        $loggingManagerMock = $this->createMock(LoggingManager::class);

        $loggingManagerMock->expects($this->once())
            ->method('addHandler')
            ->with($this->equalTo($handlerMock), $this->equalTo($levelMock))
            ->willReturnSelf();

        $this->assertSame($loggingManagerMock, $loggingManagerMock->addHandler($handlerMock, $levelMock));
    }

    public function testPushHandler(): void
    {
        $handlerMock = $this->createMock(LogHandler::class);
        $loggingManagerMock = $this->createMock(LoggingManager::class);

        $loggingManagerMock->expects($this->once())
            ->method('pushHandler')
            ->with($this->equalTo($handlerMock))
            ->willReturnSelf();

        $this->assertSame($loggingManagerMock, $loggingManagerMock->pushHandler($handlerMock));
    }

    public function testPopHandler(): void
    {
        $handlerMock = $this->createMock(LogHandler::class);
        $loggingManagerMock = $this->createMock(LoggingManager::class);

        $loggingManagerMock->expects($this->once())
            ->method('popHandler')
            ->willReturn($handlerMock);

        $this->assertSame($handlerMock, $loggingManagerMock->popHandler());
    }

    public function testGetHandlers(): void
    {
        $handlers = [$this->createMock(LogHandler::class)];
        $loggingManagerMock = $this->createMock(LoggingManager::class);

        $loggingManagerMock->expects($this->once())
            ->method('getHandlers')
            ->willReturn($handlers);

        $this->assertSame($handlers, $loggingManagerMock->getHandlers());
    }

    public function testAddProcessor(): void
    {
        $processorMock = $this->createMock(LogProcessor::class);
        $loggingManagerMock = $this->createMock(LoggingManager::class);

        $loggingManagerMock->expects($this->once())
            ->method('addProcessor')
            ->with($this->equalTo($processorMock))
            ->willReturnSelf();

        $this->assertSame($loggingManagerMock, $loggingManagerMock->addProcessor($processorMock));
    }

    public function testGetProcessors(): void
    {
        $processors = [$this->createMock(LogProcessor::class)];
        $loggingManagerMock = $this->createMock(LoggingManager::class);

        $loggingManagerMock->expects($this->once())
            ->method('getProcessors')
            ->willReturn($processors);

        $this->assertSame($processors, $loggingManagerMock->getProcessors());
    }

    public function testSetFormatter(): void
    {
        $formatterMock = new class() implements LogFormatter, ImmutableValue {
            public function format(ImmutableValue $record): string
            {
                return 'formatted';
            }
        };

        $loggingManagerMock = $this->createMock(LoggingManager::class);

        $loggingManagerMock->expects($this->once())
            ->method('setFormatter')
            ->with($this->equalTo($formatterMock))
            ->willReturnSelf();

        $this->assertSame(
            $loggingManagerMock,
            $loggingManagerMock->setFormatter($formatterMock)
        );
    }

    public function testGetFormatter(): void
    {
        $formatterMock = new class() implements LogFormatter, ImmutableValue {
            public function format(ImmutableValue $record): string
            {
                return 'formatted';
            }
        };

        $loggingManagerMock = $this->createMock(LoggingManager::class);

        $loggingManagerMock->expects($this->once())
            ->method('getFormatter')
            ->willReturn($formatterMock);

        $this->assertSame($formatterMock, $loggingManagerMock->getFormatter());
    }

    public function testWithContext(): void
    {
        $context = ['key' => 'value'];
        $loggingManagerMock = $this->createMock(LoggingManager::class);

        $loggingManagerMock->expects($this->once())
            ->method('withContext')
            ->with($this->equalTo($context))
            ->willReturnSelf();

        $this->assertSame($loggingManagerMock, $loggingManagerMock->withContext($context));
    }

    public function testGetContext(): void
    {
        $context = ['key' => 'value'];
        $loggingManagerMock = $this->createMock(LoggingManager::class);

        $loggingManagerMock->expects($this->once())
            ->method('getContext')
            ->willReturn($context);

        $this->assertSame($context, $loggingManagerMock->getContext());
    }

    public function testSetConfig(): void
    {
        $configMock = $this->createMock(ImmutableValue::class);
        $loggingManagerMock = $this->createMock(LoggingManager::class);

        $loggingManagerMock->expects($this->once())
            ->method('setConfig')
            ->with($this->equalTo($configMock))
            ->willReturnSelf();

        $this->assertSame($loggingManagerMock, $loggingManagerMock->setConfig($configMock));
    }

    public function testGetConfig(): void
    {
        $configMock = $this->createMock(ImmutableValue::class);
        $loggingManagerMock = $this->createMock(LoggingManager::class);

        $loggingManagerMock->expects($this->once())
            ->method('getConfig')
            ->willReturn($configMock);

        $this->assertSame($configMock, $loggingManagerMock->getConfig());
    }
}
