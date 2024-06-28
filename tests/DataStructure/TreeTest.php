<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\Tree;
use PHPUnit\Framework\TestCase;

final class TreeTest extends TestCase
{
    public function testAdd(): void
    {
        $mock = $this->createMock(Tree::class);
        $mock->expects($this->once())->method('add')->with('value');

        $mock->add('value');
    }

    public function testInsert(): void
    {
        $mock = $this->createMock(Tree::class);
        $mock->expects($this->once())->method('insert')->with(0, 'value');

        $mock->insert(0, 'value');
    }

    public function testRemove(): void
    {
        $mock = $this->createMock(Tree::class);
        $mock->method('remove')->with('value')->willReturn(true);

        $this->assertTrue($mock->remove('value'));
    }

    public function testFind(): void
    {
        $mock = $this->createMock(Tree::class);
        $mock->method('find')->with('value')->willReturn('value');

        $this->assertSame('value', $mock->find('value'));
    }

    public function testContains(): void
    {
        $mock = $this->createMock(Tree::class);
        $mock->method('contains')->with('value')->willReturn(true);

        $this->assertTrue($mock->contains('value'));
    }
}
