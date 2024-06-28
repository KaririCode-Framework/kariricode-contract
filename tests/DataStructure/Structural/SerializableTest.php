<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure\Structural;

use KaririCode\Contract\DataStructure\Structural\Serializable;
use PHPUnit\Framework\TestCase;

final class SerializableTest extends TestCase
{
    public function testSerialize(): void
    {
        $mock = $this->createMock(Serializable::class);
        $mock->method('serialize')->willReturn('serializedData');

        $this->assertSame('serializedData', $mock->serialize());
    }

    public function testDeserialize(): void
    {
        $mock = $this->createMock(Serializable::class);
        $mock->expects($this->once())->method('deserialize')->with('serializedData');

        $mock->deserialize('serializedData');
    }
}
