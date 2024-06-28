<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\Map;
use PHPUnit\Framework\TestCase;

final class MapTest extends TestCase
{
    public function testPut(): void
    {
        $mock = $this->createMock(Map::class);
        $mock->expects($this->once())->method('put')->with('key', 'value');

        $mock->put('key', 'value');
    }

    public function testGet(): void
    {
        $mock = $this->createMock(Map::class);
        $mock->method('get')->with('key')->willReturn('value');

        $this->assertSame('value', $mock->get('key'));
    }

    public function testRemove(): void
    {
        $mock = $this->createMock(Map::class);
        $mock->method('remove')->with('key')->willReturn(true);

        $this->assertTrue($mock->remove('key'));
    }
}
