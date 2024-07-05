<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging\Behavioral;

use KaririCode\Contract\Logging\Behavioral\Loggable;
use KaririCode\Contract\Logging\LogLevel;
use PHPUnit\Framework\TestCase;

final class LoggableTest extends TestCase
{
    public function testLog(): void
    {
        $levelMock = $this->createMock(LogLevel::class);
        $message = 'Test message';
        $context = ['key' => 'value'];
        $loggableMock = $this->createMock(Loggable::class);

        $loggableMock->expects($this->once())
            ->method('log')
            ->with($this->equalTo($levelMock), $this->equalTo($message), $this->equalTo($context));

        $loggableMock->log($levelMock, $message, $context);
    }

    public function testDebug(): void
    {
        $message = 'Test debug message';
        $context = ['key' => 'value'];
        $loggableMock = $this->createMock(Loggable::class);

        $loggableMock->expects($this->once())
            ->method('debug')
            ->with($this->equalTo($message), $this->equalTo($context));

        $loggableMock->debug($message, $context);
    }

    public function testInfo(): void
    {
        $message = 'Test info message';
        $context = ['key' => 'value'];
        $loggableMock = $this->createMock(Loggable::class);

        $loggableMock->expects($this->once())
            ->method('info')
            ->with($this->equalTo($message), $this->equalTo($context));

        $loggableMock->info($message, $context);
    }

    public function testNotice(): void
    {
        $message = 'Test notice message';
        $context = ['key' => 'value'];
        $loggableMock = $this->createMock(Loggable::class);

        $loggableMock->expects($this->once())
            ->method('notice')
            ->with($this->equalTo($message), $this->equalTo($context));

        $loggableMock->notice($message, $context);
    }

    public function testWarning(): void
    {
        $message = 'Test warning message';
        $context = ['key' => 'value'];
        $loggableMock = $this->createMock(Loggable::class);

        $loggableMock->expects($this->once())
            ->method('warning')
            ->with($this->equalTo($message), $this->equalTo($context));

        $loggableMock->warning($message, $context);
    }

    public function testError(): void
    {
        $message = 'Test error message';
        $context = ['key' => 'value'];
        $loggableMock = $this->createMock(Loggable::class);

        $loggableMock->expects($this->once())
            ->method('error')
            ->with($this->equalTo($message), $this->equalTo($context));

        $loggableMock->error($message, $context);
    }

    public function testCritical(): void
    {
        $message = 'Test critical message';
        $context = ['key' => 'value'];
        $loggableMock = $this->createMock(Loggable::class);

        $loggableMock->expects($this->once())
            ->method('critical')
            ->with($this->equalTo($message), $this->equalTo($context));

        $loggableMock->critical($message, $context);
    }

    public function testAlert(): void
    {
        $message = 'Test alert message';
        $context = ['key' => 'value'];
        $loggableMock = $this->createMock(Loggable::class);

        $loggableMock->expects($this->once())
            ->method('alert')
            ->with($this->equalTo($message), $this->equalTo($context));

        $loggableMock->alert($message, $context);
    }

    public function testEmergency(): void
    {
        $message = 'Test emergency message';
        $context = ['key' => 'value'];
        $loggableMock = $this->createMock(Loggable::class);

        $loggableMock->expects($this->once())
            ->method('emergency')
            ->with($this->equalTo($message), $this->equalTo($context));

        $loggableMock->emergency($message, $context);
    }
}
