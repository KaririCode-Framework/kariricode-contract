<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure\Behavioral;

use KaririCode\Contract\DataStructure\Behavioral\Countable;
use PHPUnit\Framework\TestCase;

final class CountableTest extends TestCase
{
    public function testSize(): void
    {
        $mock = $this->createMock(Countable::class);
        $mock->method('size')->willReturn(5);

        $this->assertSame(5, $mock->size());
    }
}
