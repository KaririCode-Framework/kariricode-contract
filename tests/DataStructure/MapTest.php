<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\Map;
use PHPUnit\Framework\TestCase;

final class MapTest extends TestCase
{
    // Test putting a key-value pair into the map
    public function testPut(): void
    {
        $mock = $this->createMock(Map::class);
        $mock->expects($this->once())->method('put')->with('key', 'value');

        $mock->put('key', 'value');
    }

    // Test getting a value by its key
    public function testGet(): void
    {
        $mock = $this->createMock(Map::class);
        $mock->method('get')->with('key')->willReturn('value');

        $this->assertSame('value', $mock->get('key'));
    }

    // Test removing a key-value pair from the map
    public function testRemove(): void
    {
        $mock = $this->createMock(Map::class);
        $mock->method('remove')->with('key')->willReturn(true);

        $this->assertTrue($mock->remove('key'));
    }

    // Test checking if a key exists in the map
    public function testContainsKey(): void
    {
        $mock = $this->createMock(Map::class);
        $mock->method('containsKey')->with('key')->willReturn(true);

        $this->assertTrue($mock->containsKey('key'));
    }

    // Test getting all keys in the map
    public function testKeys(): void
    {
        $mock = $this->createMock(Map::class);
        $mock->method('keys')->willReturn(['key1', 'key2']);

        $this->assertSame(['key1', 'key2'], $mock->keys());
    }

    // Test getting all values in the map
    public function testValues(): void
    {
        $mock = $this->createMock(Map::class);
        $mock->method('values')->willReturn(['value1', 'value2']);

        $this->assertSame(['value1', 'value2'], $mock->values());
    }
}
