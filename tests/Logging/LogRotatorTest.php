<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Logging;

use KaririCode\Contract\Logging\LogRotator;
use PHPUnit\Framework\TestCase;

final class LogRotatorTest extends TestCase
{
    public function testRotate(): void
    {
        $filename = 'logfile.log';
        $rotatorMock = $this->createMock(LogRotator::class);

        $rotatorMock->expects($this->once())
            ->method('rotate')
            ->with($this->equalTo($filename));

        $rotatorMock->rotate($filename);
    }
}
