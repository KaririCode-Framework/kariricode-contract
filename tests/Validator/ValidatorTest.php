<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Validator;

use KaririCode\Contract\Validator\Validator;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class ValidatorTest extends TestCase
{
    public function testValidate(): void
    {
        /** @var Validator|MockObject */
        $validator = $this->createMock(Validator::class);
        $validator->expects($this->once())
            ->method('validate')
            ->with('validInput')
            ->willReturn(true);

        $this->assertTrue($validator->validate('validInput'));
    }
}
