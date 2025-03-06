<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DI;

use KaririCode\Contract\DI\Container;
use KaririCode\Contract\DI\Provider;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class ProviderTest extends TestCase
{
    private Provider|MockObject $provider;
    private Container|MockObject $container;

    protected function setUp(): void
    {
        $this->provider = $this->createMock(Provider::class);
        $this->container = $this->createMock(Container::class);
    }

    public function testRegister(): void
    {
        $this->provider->expects($this->once())
            ->method('register')
            ->with($this->container);

        $this->provider->register($this->container);
    }

    public function testBoot(): void
    {
        $this->provider->expects($this->once())
            ->method('boot')
            ->with($this->container);

        $this->provider->boot($this->container);
    }

    public function testRegisterAndBootSequence(): void
    {
        $sequence = $this->exactly(2);

        $this->provider->expects($sequence)
            ->method('register')
            ->with($this->container);

        $this->provider->expects($sequence)
            ->method('boot')
            ->with($this->container);

        // Simulate typical usage pattern: register then boot
        $this->provider->register($this->container);
        $this->provider->boot($this->container);
    }
}
