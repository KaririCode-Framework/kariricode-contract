<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure\Behavioral;

use KaririCode\Contract\DataStructure\Behavioral\Indexable;
use PHPUnit\Framework\TestCase;

final class IndexableTest extends TestCase
{
    public function testGet(): void
    {
        $mock = $this->createMock(Indexable::class);
        $mock->method('get')->with(1)->willReturn('value');

        $this->assertSame('value', $mock->get(1));
    }

    public function testSet(): void
    {
        $mock = $this->createMock(Indexable::class);
        $mock->expects($this->once())->method('set')->with(1, 'value');

        $mock->set(1, 'value');
    }
}
