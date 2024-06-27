<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure;

use KaririCode\Contract\DataStructure\Map;
use PHPUnit\Framework\TestCase;

final class MapTest extends TestCase
{
    public function testPut(): void
    {
        $map = $this->createMock(Map::class);
        $key = 'testKey';
        $value = 'testValue';

        $map->expects($this->once())
            ->method('put')
            ->with($key, $value);

        $map->put($key, $value);
    }

    public function testGet(): void
    {
        $map = $this->createMock(Map::class);
        $key = 'testKey';
        $expectedValue = 'testValue';

        $map->expects($this->once())
            ->method('get')
            ->with($key)
            ->willReturn($expectedValue);

        $this->assertEquals($expectedValue, $map->get($key));
    }

    public function testRemove(): void
    {
        $map = $this->createMock(Map::class);
        $key = 'testKey';

        $map->expects($this->once())
            ->method('remove')
            ->with($key)
            ->willReturn(true);

        $this->assertTrue($map->remove($key));
    }

    public function testContainsKey(): void
    {
        $map = $this->createMock(Map::class);
        $key = 'testKey';

        $map->expects($this->once())
            ->method('containsKey')
            ->with($key)
            ->willReturn(true);

        $this->assertTrue($map->containsKey($key));
    }

    public function testKeys(): void
    {
        $map = $this->createMock(Map::class);
        $expectedKeys = ['key1', 'key2'];

        $map->expects($this->once())
            ->method('keys')
            ->willReturn($expectedKeys);

        $this->assertEquals($expectedKeys, $map->keys());
    }

    public function testValues(): void
    {
        $map = $this->createMock(Map::class);
        $expectedValues = ['value1', 'value2'];

        $map->expects($this->once())
            ->method('values')
            ->willReturn($expectedValues);

        $this->assertEquals($expectedValues, $map->values());
    }
}
