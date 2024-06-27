<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\CollectionList;
use PHPUnit\Framework\TestCase;

final class CollectionListTest extends TestCase
{
    public function testAdd(): void
    {
        $collection = $this->createMock(CollectionList::class);
        $item = 'testItem';

        $collection->expects($this->once())
            ->method('add')
            ->with($item);

        $collection->add($item);
    }

    public function testRemove(): void
    {
        $collection = $this->createMock(CollectionList::class);
        $item = 'testItem';

        $collection->expects($this->once())
            ->method('remove')
            ->with($item)
            ->willReturn(true);

        $this->assertTrue($collection->remove($item));
    }

    public function testGet(): void
    {
        $collection = $this->createMock(CollectionList::class);
        $index = 0;
        $expectedItem = 'testItem';

        $collection->expects($this->once())
            ->method('get')
            ->with($index)
            ->willReturn($expectedItem);

        $this->assertEquals($expectedItem, $collection->get($index));
    }

    public function testClear(): void
    {
        $collection = $this->createMock(CollectionList::class);

        $collection->expects($this->once())
            ->method('clear');

        $collection->clear();
    }
}
