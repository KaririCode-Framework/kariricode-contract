<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\Deque;
use PHPUnit\Framework\TestCase;

final class DequeTest extends TestCase
{
    public function testEnqueue(): void
    {
        $mock = $this->createMock(Deque::class);
        $mock->expects($this->once())->method('enqueue')->with('element');

        $mock->enqueue('element');
    }

    public function testDequeue(): void
    {
        $mock = $this->createMock(Deque::class);
        $mock->method('dequeue')->willReturn('element');

        $this->assertSame('element', $mock->dequeue());
    }

    public function testPeek(): void
    {
        $mock = $this->createMock(Deque::class);
        $mock->method('peek')->willReturn('element');

        $this->assertSame('element', $mock->peek());
    }

    public function testAddFirst(): void
    {
        $mock = $this->createMock(Deque::class);
        $mock->expects($this->once())->method('addFirst')->with('element');

        $mock->addFirst('element');
    }

    public function testRemoveLast(): void
    {
        $mock = $this->createMock(Deque::class);
        $mock->method('removeLast')->willReturn('element');

        $this->assertSame('element', $mock->removeLast());
    }

    public function testPeekLast(): void
    {
        $mock = $this->createMock(Deque::class);
        $mock->method('peekLast')->willReturn('element');

        $this->assertSame('element', $mock->peekLast());
    }

    public function testIsEmpty(): void
    {

        $mock = $this->createMock(Deque::class);
        $mock->method('isEmpty')->willReturn(true);

        $this->assertTrue($mock->isEmpty());
    }

    public function testSize(): void
    {
        $mock = $this->createMock(Deque::class);
        $mock->method('size')->willReturn(0);

        $this->assertSame(0, $mock->size());
    }
}
