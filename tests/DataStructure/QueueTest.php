<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\Queue;
use PHPUnit\Framework\TestCase;

final class QueueTest extends TestCase
{
    public function testEnqueue(): void
    {
        $mock = $this->createMock(Queue::class);
        $mock->expects($this->once())->method('enqueue')->with('element');

        $mock->enqueue('element');
    }

    public function testDequeue(): void
    {
        $mock = $this->createMock(Queue::class);
        $mock->method('dequeue')->willReturn('element');

        $this->assertSame('element', $mock->dequeue());
    }

    public function testPeek(): void
    {
        $mock = $this->createMock(Queue::class);
        $mock->method('peek')->willReturn('element');

        $this->assertSame('element', $mock->peek());
    }
}
