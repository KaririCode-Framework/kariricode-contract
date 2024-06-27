<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\Queue;
use PHPUnit\Framework\TestCase;

final class QueueTest extends TestCase
{
    public function testEnqueue(): void
    {
        $queue = $this->createMock(Queue::class);
        $item = 'testItem';

        $queue->expects($this->once())
            ->method('enqueue')
            ->with($item);

        $queue->enqueue($item);
    }

    public function testDequeue(): void
    {
        $queue = $this->createMock(Queue::class);
        $expectedItem = 'testItem';

        $queue->expects($this->once())
            ->method('dequeue')
            ->willReturn($expectedItem);

        $this->assertEquals($expectedItem, $queue->dequeue());
    }

    public function testFront(): void
    {
        $queue = $this->createMock(Queue::class);
        $expectedItem = 'testItem';

        $queue->expects($this->once())
            ->method('front')
            ->willReturn($expectedItem);

        $this->assertEquals($expectedItem, $queue->front());
    }

    public function testIsEmpty(): void
    {
        $queue = $this->createMock(Queue::class);

        $queue->expects($this->once())
            ->method('isEmpty')
            ->willReturn(true);

        $this->assertTrue($queue->isEmpty());
    }
}
