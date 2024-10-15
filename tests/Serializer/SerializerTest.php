<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Serializer;

use KaririCode\Contract\Serializer\Serializer;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class SerializerTest extends TestCase
{
    public function testSerialize(): void
    {
        /** @var Serializer|MockObject */
        $serializer = $this->createMock(Serializer::class);
        $serializer->expects($this->once())
            ->method('serialize')
            ->with('inputData')
            ->willReturn('serializedData');

        $this->assertSame('serializedData', $serializer->serialize('inputData'));
    }

    public function testDeserialize(): void
    {
        /** @var Serializer|MockObject */
        $serializer = $this->createMock(Serializer::class);
        $serializer->expects($this->once())
            ->method('deserialize')
            ->with('serializedData')
            ->willReturn('inputData');

        $this->assertSame('inputData', $serializer->deserialize('serializedData'));
    }
}
