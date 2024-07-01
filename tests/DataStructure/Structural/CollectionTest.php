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
        $mock->expects($this->once())->method('add')->with('element');

        $mock->add('element');
    }

    public function testAddAll(): void
    {
        $collectionMock = $this->createMock(Collection::class);
        $mock = $this->createMock(Collection::class);
        $mock->expects($this->once())->method('addAll')->with($collectionMock);

        $mock->addAll($collectionMock);
    }

    public function testRemove(): void
    {
        $mock = $this->createMock(Collection::class);
        $mock->method('remove')->with('element')->willReturn(true);

        $this->assertTrue($mock->remove('element'));
    }

    public function testContains(): void
    {
        $mock = $this->createMock(Collection::class);
        $mock->method('contains')->with('element')->willReturn(true);

        $this->assertTrue($mock->contains('element'));
    }

    public function testClear(): void
    {
        $mock = $this->createMock(Collection::class);
        $mock->expects($this->once())->method('clear');

        $mock->clear();
    }
}
