<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging\Behavioral;

use KaririCode\Contract\Logging\Behavioral\LoggerConfigurable;
use PHPUnit\Framework\TestCase;

class LoggerConfigurableTest extends TestCase
{
    public function testConfigure(): void
    {
        $config = ['level' => 'debug', 'format' => 'json'];
        $loggerConfigurableMock = $this->createMock(LoggerConfigurable::class);

        $loggerConfigurableMock->expects($this->once())
            ->method('configure')
            ->with($this->equalTo($config));

        $loggerConfigurableMock->configure($config);
    }
}
