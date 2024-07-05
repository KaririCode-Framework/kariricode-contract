<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging\Behavioral;

use KaririCode\Contract\ImmutableValue;
use KaririCode\Contract\Logging\Behavioral\Configurable;
use PHPUnit\Framework\TestCase;

final class ConfigurableTest extends TestCase
{
    public function testSetConfig(): void
    {
        $configMock = $this->createMock(ImmutableValue::class);
        $configurableMock = $this->createMock(Configurable::class);

        $configurableMock->expects($this->once())
            ->method('setConfig')
            ->with($this->equalTo($configMock))
            ->willReturnSelf();

        $this->assertSame($configurableMock, $configurableMock->setConfig($configMock));
    }

    public function testGetConfig(): void
    {
        $configMock = $this->createMock(ImmutableValue::class);
        $configurableMock = $this->createMock(Configurable::class);

        $configurableMock->expects($this->once())
            ->method('getConfig')
            ->willReturn($configMock);

        $this->assertSame($configMock, $configurableMock->getConfig());
    }
}
