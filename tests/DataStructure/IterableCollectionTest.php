<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\Behavioral\IterableCollection;
use KaririCode\Contract\DataStructure\Behavioral\Iterator;
use PHPUnit\Framework\TestCase;

final class IterableCollectionTest extends TestCase
{
    public function testGetIterator(): void
    {
        $iteratorMock = $this->createMock(Iterator::class);
        $mock = $this->createMock(IterableCollection::class);
        $mock->method('getIterator')->willReturn($iteratorMock);

        $this->assertSame($iteratorMock, $mock->getIterator());
    }
}
