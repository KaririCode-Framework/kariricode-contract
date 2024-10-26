<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Transformer;

use KaririCode\Contract\Transformer\Transformer;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class TransformerTest extends TestCase
{
    public function testTransform(): void
    {
        /** @var Transformer|MockObject */
        $transformer = $this->createMock(Transformer::class);
        $transformer->expects($this->once())
            ->method('transform')
            ->with('sampleInput')
            ->willReturn('transformedOutput');

        $this->assertEquals('transformedOutput', $transformer->transform('sampleInput'));
    }
}
