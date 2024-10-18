<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Processor\Attribute;

use KaririCode\Contract\Processor\Attribute\ProcessableAttribute;
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
}
