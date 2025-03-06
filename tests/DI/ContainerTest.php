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

    public function testFactory(): void
    {
        $this->container->expects($this->once())
            ->method('factory')
            ->with('FactoryClass', 'ConcreteFactory', ['param1' => 'value1']);

        $this->container->factory('FactoryClass', 'ConcreteFactory', ['param1' => 'value1']);
    }

    public function testTag(): void
    {
        $this->container->expects($this->once())
            ->method('tag')
            ->with('tag.name', ['abstract1', 'abstract2']);

        $this->container->tag('tag.name', ['abstract1', 'abstract2']);
    }

    public function testTagged(): void
    {
        $this->container->expects($this->once())
            ->method('tagged')
            ->with('tag.name')
            ->willReturn(['abstract1', 'abstract2']);

        $this->assertEquals(['abstract1', 'abstract2'], $this->container->tagged('tag.name'));
    }

    public function testCall(): void
    {
        $callback = function ($param) {
            return $param;
        };

        $this->container->expects($this->once())
            ->method('call')
            ->with($callback, ['param' => 'value'])
            ->willReturn('value');

        $this->assertEquals('value', $this->container->call($callback, ['param' => 'value']));
    }

    public function testExtend(): void
    {
        $extender = function ($service) {
            return $service;
        };

        $this->container->expects($this->once())
            ->method('extend')
            ->with('abstract.id', $extender);

        $this->container->extend('abstract.id', $extender);
    }

    public function testAlias(): void
    {
        $this->container->expects($this->once())
            ->method('alias')
            ->with('original.id', 'alias.id');

        $this->container->alias('original.id', 'alias.id');
    }
}
