<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DI;

use KaririCode\Contract\DI\Container;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class ContainerTest extends TestCase
{
    private Container|MockObject $container;

    protected function setUp(): void
    {
        $this->container = $this->createMock(Container::class);
    }

    public function testSet(): void
    {
        $this->container->expects($this->once())
            ->method('set')
            ->with('service.id', $this->isType('callable'));

        $this->container->set('service.id', fn () => new \stdClass());
    }

    public function testGet(): void
    {
        $this->container->expects($this->once())
            ->method('get')
            ->with('service.id')
            ->willReturn(new \stdClass());

        $this->assertInstanceOf(\stdClass::class, $this->container->get('service.id'));
    }

    public function testResolve(): void
    {
        $this->container->expects($this->once())
            ->method('resolve')
            ->with('AbstractClass')
            ->willReturn(new \stdClass());

        $this->assertInstanceOf(\stdClass::class, $this->container->resolve('AbstractClass'));
    }

    public function testBind(): void
    {
        $this->container->expects($this->once())
            ->method('bind')
            ->with('AbstractClass', 'ConcreteClass', ['param1' => 'value1']);

        $this->container->bind('AbstractClass', 'ConcreteClass', ['param1' => 'value1']);
    }

    public function testSingleton(): void
    {
        $this->container->expects($this->once())
            ->method('singleton')
            ->with('SingletonClass', 'ConcreteSingleton', ['param1' => 'value1']);

        $this->container->singleton('SingletonClass', 'ConcreteSingleton', ['param1' => 'value1']);
    }

    public function testHas(): void
    {
        $this->container->expects($this->once())
            ->method('has')
            ->with('service.id')
            ->willReturn(true);

        $this->assertTrue($this->container->has('service.id'));
    }
}
