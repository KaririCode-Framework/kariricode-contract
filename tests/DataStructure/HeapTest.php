<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\Heap;
use PHPUnit\Framework\TestCase;

final class HeapTest extends TestCase
{
    public function testInsert(): void
    {
        $heap = $this->createMock(Heap::class);
        $value = 'testValue';

        $heap->expects($this->once())
            ->method('insert')
            ->with($value);

        $heap->insert($value);
    }

    public function testExtract(): void
    {
        $heap = $this->createMock(Heap::class);
        $expectedValue = 'testValue';

        $heap->expects($this->once())
            ->method('extract')
            ->willReturn($expectedValue);

        $this->assertEquals($expectedValue, $heap->extract());
    }

    public function testPeek(): void
    {
        $heap = $this->createMock(Heap::class);
        $expectedValue = 'testValue';

        $heap->expects($this->once())
            ->method('peek')
            ->willReturn($expectedValue);

        $this->assertEquals($expectedValue, $heap->peek());
    }

    public function testIsEmpty(): void
    {
        $heap = $this->createMock(Heap::class);

        $heap->expects($this->once())
            ->method('isEmpty')
            ->willReturn(true);

        $this->assertTrue($heap->isEmpty());
    }
}
