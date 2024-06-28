<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\Stack;
use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{
    public function testPush(): void
    {
        $mock = $this->createMock(Stack::class);
        $mock->expects($this->once())->method('push')->with('element');

        $mock->push('element');
    }

    public function testPop(): void
    {
        $mock = $this->createMock(Stack::class);
        $mock->method('pop')->willReturn('element');

        $this->assertSame('element', $mock->pop());
    }

    public function testPeek(): void
    {
        $mock = $this->createMock(Stack::class);
        $mock->method('peek')->willReturn('element');

        $this->assertSame('element', $mock->peek());
    }
}
