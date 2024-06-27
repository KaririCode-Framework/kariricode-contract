<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\Stack;
use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{
    public function testPush(): void
    {
        $stack = $this->createMock(Stack::class);
        $item = 'testItem';

        $stack->expects($this->once())
            ->method('push')
            ->with($item);

        $stack->push($item);
    }

    public function testPop(): void
    {
        $stack = $this->createMock(Stack::class);
        $expectedItem = 'testItem';

        $stack->expects($this->once())
            ->method('pop')
            ->willReturn($expectedItem);

        $this->assertEquals($expectedItem, $stack->pop());
    }

    public function testPeek(): void
    {
        $stack = $this->createMock(Stack::class);
        $expectedItem = 'testItem';

        $stack->expects($this->once())
            ->method('peek')
            ->willReturn($expectedItem);

        $this->assertEquals($expectedItem, $stack->peek());
    }

    public function testIsEmpty(): void
    {
        $stack = $this->createMock(Stack::class);

        $stack->expects($this->once())
            ->method('isEmpty')
            ->willReturn(true);

        $this->assertTrue($stack->isEmpty());
    }
}
