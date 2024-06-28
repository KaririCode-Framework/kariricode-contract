<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure\Behavioral;

use KaririCode\Contract\DataStructure\Behavioral\Iterator;
use PHPUnit\Framework\TestCase;

final class IteratorTest extends TestCase
{
    public function testNext(): void
    {
        $mock = $this->createMock(Iterator::class);
        $mock->method('next')->willReturn('nextElement');

        $this->assertSame('nextElement', $mock->next());
    }

    public function testHasNext(): void
    {
        $mock = $this->createMock(Iterator::class);
        $mock->method('hasNext')->willReturn(true);

        $this->assertTrue($mock->hasNext());
    }
}
