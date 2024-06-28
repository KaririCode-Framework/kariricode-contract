<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DataStructure\Behavioral;

use KaririCode\Contract\DataStructure\Behavioral\Sortable;
use PHPUnit\Framework\TestCase;

final class SortableTest extends TestCase
{
    public function testSort(): void
    {
        $mock = $this->createMock(Sortable::class);
        $mock->expects($this->once())->method('sort');

        $mock->sort();
    }
}
