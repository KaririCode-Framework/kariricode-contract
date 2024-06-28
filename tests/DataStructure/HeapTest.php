<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\Heap;
use PHPUnit\Framework\TestCase;

final class HeapTest extends TestCase
{
    public function testAdd(): void
    {
        $mock = $this->createMock(Heap::class);
        $mock->expects($this->once())->method('add')->with('element');

        $mock->add('element');
    }

    public function testInsert(): void
    {
        $mock = $this->createMock(Heap::class);
        $mock->expects($this->once())->method('insert')->with(0, 'element');

        $mock->insert(0, 'element');
    }

    public function testPoll(): void
    {
        $mock = $this->createMock(Heap::class);
        $mock->method('poll')->willReturn('rootElement');

        $this->assertSame('rootElement', $mock->poll());
    }

    public function testRemove(): void
    {
        $mock = $this->createMock(Heap::class);
        $mock->method('remove')->with('element')->willReturn(true);

        $this->assertTrue($mock->remove('element'));
    }

    public function testPeek(): void
    {
        $mock = $this->createMock(Heap::class);
        $mock->method('peek')->willReturn('rootElement');

        $this->assertSame('rootElement', $mock->peek());
    }
}
