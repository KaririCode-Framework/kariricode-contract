<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure\Structural;

use KaririCode\Contract\DataStructure\Structural\Collection;
use PHPUnit\Framework\TestCase;

final class CollectionTest extends TestCase
{
    public function testAdd(): void
    {
        $mock = $this->createMock(Collection::class);
        $mock->expects($this->once())
            ->method('add')
            ->with('element');

        $mock->add('element');
    }

    public function testAddAll(): void
    {
        $collectionMock = $this->createMock(Collection::class);
        $mock = $this->createMock(Collection::class);
        $mock->expects($this->once())
            ->method('addAll')
            ->with($collectionMock);

        $mock->addAll($collectionMock);
    }

    public function testRemove(): void
    {
        $mock = $this->createMock(Collection::class);
        $mock->method('remove')
            ->with('element')
            ->willReturn(true);

        $this->assertTrue($mock->remove('element'));
    }

    public function testContains(): void
    {
        $mock = $this->createMock(Collection::class);
        $mock->method('contains')
            ->with('element')
            ->willReturn(true);

        $this->assertTrue($mock->contains('element'));
    }

    public function testClear(): void
    {
        $mock = $this->createMock(Collection::class);
        $mock->expects($this->once())
            ->method('clear');

        $mock->clear();
    }

    public function testSize(): void
    {
        $mock = $this->createMock(Collection::class);
        $mock->method('size')
            ->willReturn(3);

        $this->assertSame(3, $mock->size());
    }

    public function testGetItems(): void
    {
        $mock = $this->createMock(Collection::class);
        $mock->method('getItems')
            ->willReturn(['item1', 'item2']);

        $this->assertSame(['item1', 'item2'], $mock->getItems());
    }

    public function testGet(): void
    {
        $mock = $this->createMock(Collection::class);
        $mock->method('get')
            ->with(0)
            ->willReturn('element');

        $this->assertSame('element', $mock->get(0));
    }

    public function testSet(): void
    {
        $mock = $this->createMock(Collection::class);
        $mock->expects($this->once())
            ->method('set')
            ->with(0, 'element');

        $mock->set(0, 'element');
    }
}
