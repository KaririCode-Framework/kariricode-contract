<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure\Behavioral;

use KaririCode\Contract\DataStructure\Behavioral\Comparable;
use PHPUnit\Framework\TestCase;

final class ComparableTest extends TestCase
{
    public function testCompareTo(): void
    {
        $firstMock = $this->createMock(Comparable::class);
        $secondMock = $this->createMock(Comparable::class);

        $firstMock->method('compareTo')->willReturn(1);
        $secondMock->method('compareTo')->willReturn(-1);

        $this->assertSame(1, $firstMock->compareTo($secondMock));
        $this->assertSame(-1, $secondMock->compareTo($firstMock));
    }
}
