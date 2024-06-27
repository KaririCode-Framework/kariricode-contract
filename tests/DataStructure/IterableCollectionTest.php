<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use PHPUnit\Framework\TestCase;
use KaririCode\Contract\DataStructure\IterableCollection;

final class IterableCollectionTest extends TestCase
{
    public function testGetIterator(): void
    {
        $collection = $this->createMock(IterableCollection::class);
        $iterator = $this->createMock(\Traversable::class);

        $collection->expects($this->once())
                   ->method('getIterator')
                   ->willReturn($iterator);

        $this->assertSame($iterator, $collection->getIterator());
    }
}
