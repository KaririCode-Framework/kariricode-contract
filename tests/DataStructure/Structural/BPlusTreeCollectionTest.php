<?php

declare(strict_types=1);

namespace KaririCode\Tests\Contract\DataStructure;

use KaririCode\Contract\DataStructure\BPlusTreeCollection;
use PHPUnit\Framework\TestCase;

final class BPlusTreeCollectionTest extends TestCase
{
    public function testAdd(): void
    {
        $mock = $this->createMock(BPlusTreeCollection::class);
        $mock->expects($this->once())
            ->method('add')
            ->with('element');

        $mock->add('element');
    }

    public function testAddAll(): void
    {
        $collectionMock = $this->createMock(BPlusTreeCollection::class);
        $mock = $this->createMock(BPlusTreeCollection::class);
        $mock->expects($this->once())
            ->method('addAll')
            ->with($collectionMock);

        $mock->addAll($collectionMock);
    }

    public function testRemove(): void
    {
        $mock = $this->createMock(BPlusTreeCollection::class);
        $mock->method('remove')
            ->with('element')
            ->willReturn(true);

        $this->assertTrue($mock->remove('element'));
    }

    public function testContains(): void
    {
        $mock = $this->createMock(BPlusTreeCollection::class);
        $mock->method('contains')
            ->with('element')
            ->willReturn(true);

        $this->assertTrue($mock->contains('element'));
    }

    public function testClear(): void
    {
        $mock = $this->createMock(BPlusTreeCollection::class);
        $mock->expects($this->once())
            ->method('clear');

        $mock->clear();
    }

    public function testSize(): void
    {
        $mock = $this->createMock(BPlusTreeCollection::class);
        $mock->method('size')
            ->willReturn(3);

        $this->assertSame(3, $mock->size());
    }

    public function testGetItems(): void
    {
        $mock = $this->createMock(BPlusTreeCollection::class);
        $mock->method('getItems')
            ->willReturn(['item1', 'item2']);

        $this->assertSame(['item1', 'item2'], $mock->getItems());
    }

    public function testGetOrder(): void
    {
        $mock = $this->createMock(BPlusTreeCollection::class);
        $mock->method('getOrder')
            ->willReturn(4);

        $this->assertSame(4, $mock->getOrder());
    }

    public function testRangeSearch(): void
    {
        $mock = $this->createMock(BPlusTreeCollection::class);
        $mock->method('rangeSearch')
            ->with(10, 20)
            ->willReturn([10, 15, 20]);

        $this->assertSame([10, 15, 20], $mock->rangeSearch(10, 20));
    }

    public function testGetMinimum(): void
    {
        $mock = $this->createMock(BPlusTreeCollection::class);
        $mock->method('getMinimum')
            ->willReturn(1);

        $this->assertSame(1, $mock->getMinimum());
    }

    public function testGetMaximum(): void
    {
        $mock = $this->createMock(BPlusTreeCollection::class);
        $mock->method('getMaximum')
            ->willReturn(100);

        $this->assertSame(100, $mock->getMaximum());
    }

    public function testBalance(): void
    {
        $mock = $this->createMock(BPlusTreeCollection::class);
        $mock->expects($this->once())
            ->method('balance');

        $mock->balance();
    }

    public function testSort(): void
    {
        $mock = $this->createMock(BPlusTreeCollection::class);
        $mock->expects($this->once())
            ->method('sort');

        $mock->sort();
    }
}
