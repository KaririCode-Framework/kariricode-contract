<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DependencyInjection;

use KaririCode\Contract\DependencyInjection\Container;
use PHPUnit\Framework\TestCase;

final class ContainerTest extends TestCase
{
    public function testSet(): void
    {
        $mock = $this->createMock(Container::class);
        $mock->expects($this->once())
            ->method('set')
            ->with($this->equalTo('service.id'), $this->isType('callable'));

        $mock->set('service.id', function () {
            return new \stdClass();
        });
    }

    public function testGet(): void
    {
        $mock = $this->createMock(Container::class);
        $mock->method('get')
            ->with('service.id')
            ->willReturn(new \stdClass());

        $this->assertInstanceOf(\stdClass::class, $mock->get('service.id'));
    }

    public function testHas(): void
    {
        $mock = $this->createMock(Container::class);
        $mock->method('has')
            ->with('service.id')
            ->willReturn(true);

        $this->assertTrue($mock->has('service.id'));
    }
}
