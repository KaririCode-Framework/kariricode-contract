<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Sanitizer;

use KaririCode\Contract\Sanitizer\Sanitizer;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class SanitizerTest extends TestCase
{
    public function testSanitize(): void
    {
        /** @var Sanitizer|MockObject */
        $sanitizer = $this->createMock(Sanitizer::class);
        $sanitizer->expects($this->once())
            ->method('sanitize')
            ->with('dirtyInput')
            ->willReturn('cleanInput');

        $this->assertSame('cleanInput', $sanitizer->sanitize('dirtyInput'));
    }
}
