<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Processor\Attribute;

use KaririCode\Contract\Processor\Attribute\CustomizableMessageAttribute;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class CustomizableMessageAttributeTest extends TestCase
{
    public function testGetMessage(): void
    {
        /** @var CustomizableMessageAttribute|MockObject */
        $customizableMessageAttribute = $this->createMock(CustomizableMessageAttribute::class);

        $validatorName = 'requiredValidator';
        $expectedMessage = 'This field is required.';

        $customizableMessageAttribute->expects($this->once())
            ->method('getMessage')
            ->with($validatorName)
            ->willReturn($expectedMessage);

        $this->assertSame($expectedMessage, $customizableMessageAttribute->getMessage($validatorName));
    }

    public function testGetMessageReturnsNull(): void
    {
        /** @var CustomizableMessageAttribute|MockObject */
        $customizableMessageAttribute = $this->createMock(CustomizableMessageAttribute::class);

        $validatorName = 'nonExistentValidator';

        $customizableMessageAttribute->expects($this->once())
            ->method('getMessage')
            ->with($validatorName)
            ->willReturn(null);

        $this->assertNull($customizableMessageAttribute->getMessage($validatorName));
    }
}
