<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\Tree;
use PHPUnit\Framework\TestCase;

final class TreeTest extends TestCase
{
    public function testInsert(): void
    {
        $tree = $this->createMock(Tree::class);
        $value = 'testValue';

        $tree->expects($this->once())
            ->method('insert')
            ->with($value);

        $tree->insert($value);
    }

    public function testSearch(): void
    {
        $tree = $this->createMock(Tree::class);
        $value = 'testValue';
        $node = new class () {
            public mixed $value = 'testValue';
        };

        $tree->expects($this->once())
            ->method('search')
            ->with($value)
            ->willReturn($node);

        $this->assertSame($node, $tree->search($value));
    }

    public function testDelete(): void
    {
        $tree = $this->createMock(Tree::class);
        $value = 'testValue';

        $tree->expects($this->once())
            ->method('delete')
            ->with($value)
            ->willReturn(true);

        $this->assertTrue($tree->delete($value));
    }

    public function testInOrderTraversal(): void
    {
        $tree = $this->createMock(Tree::class);

        $tree->expects($this->once())
            ->method('inOrderTraversal')
            ->willReturn($this->getGenerator());

        $result = [];
        foreach ($tree->inOrderTraversal() as $value) {
            $result[] = $value;
        }

        $this->assertEquals(['a', 'b', 'c'], $result);
    }

    private function getGenerator(): \Generator
    {
        yield 'a';
        yield 'b';
        yield 'c';
    }
}
