<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DI;

use KaririCode\Contract\DI\Definition;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class DefinitionTest extends TestCase
{
    private Definition|MockObject $definition;

    protected function setUp(): void
    {
        $this->definition = $this->createMock(Definition::class);
    }

    public function testGetConcrete(): void
    {
        $concrete = 'ConcreteClass';

        $this->definition->expects($this->once())
            ->method('getConcrete')
            ->willReturn($concrete);

        $this->assertEquals($concrete, $this->definition->getConcrete());
    }

    public function testGetParameters(): void
    {
        $parameters = ['param1' => 'value1', 'param2' => 'value2'];

        $this->definition->expects($this->once())
            ->method('getParameters')
            ->willReturn($parameters);

        $this->assertEquals($parameters, $this->definition->getParameters());
    }

    public function testGetTags(): void
    {
        $tags = ['tag1', 'tag2', 'tag3'];

        $this->definition->expects($this->once())
            ->method('getTags')
            ->willReturn($tags);

        $this->assertEquals($tags, $this->definition->getTags());
    }

    public function testIsSingleton(): void
    {
        $this->definition->expects($this->once())
            ->method('isSingleton')
            ->willReturn(true);

        $this->assertTrue($this->definition->isSingleton());
    }

    public function testIsFactory(): void
    {
        $this->definition->expects($this->once())
            ->method('isFactory')
            ->willReturn(false);

        $this->assertFalse($this->definition->isFactory());
    }
}
