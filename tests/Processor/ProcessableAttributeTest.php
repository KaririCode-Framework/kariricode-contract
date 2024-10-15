<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Processor;

use KaririCode\Contract\Processor\ProcessableAttribute;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class ProcessableAttributeTest extends TestCase
{
    public function testGetProcessors(): void
    {
        /** @var ProcessableAttribute|MockObject */
        $processableAttribute = $this->createMock(ProcessableAttribute::class);
        $processors = ['processor1', 'processor2'];

        $processableAttribute->expects($this->once())
            ->method('getProcessors')
            ->willReturn($processors);

        $this->assertSame($processors, $processableAttribute->getProcessors());
    }

    public function testGetFallbackValue(): void
    {
        /** @var ProcessableAttribute|MockObject */
        $processableAttribute = $this->createMock(ProcessableAttribute::class);
        $fallbackValue = 'default value';

        $processableAttribute->expects($this->once())
            ->method('getFallbackValue')
            ->willReturn($fallbackValue);

        $this->assertSame($fallbackValue, $processableAttribute->getFallbackValue());
    }
}
