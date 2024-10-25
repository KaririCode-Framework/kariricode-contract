<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Processor;

use KaririCode\Contract\Processor\ProcessingResult;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class ProcessingResultTest extends TestCase
{
    private ProcessingResult|MockObject $processingResultMock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->processingResultMock = $this->createMock(ProcessingResult::class);
    }

    public function testAddError(): void
    {
        $this->processingResultMock->expects($this->once())
            ->method('addError')
            ->with('property', 'error_key', 'error message');

        $this->processingResultMock->addError('property', 'error_key', 'error message');
    }

    public function testSetProcessedData(): void
    {
        $this->processingResultMock->expects($this->once())
            ->method('setProcessedData')
            ->with('property', 'value');

        $this->processingResultMock->setProcessedData('property', 'value');
    }

    public function testHasErrors(): void
    {
        $this->processingResultMock->expects($this->once())
            ->method('hasErrors')
            ->willReturn(true);

        $this->assertTrue($this->processingResultMock->hasErrors());
    }

    public function testGetErrors(): void
    {
        $expectedErrors = [
            'property' => [
                [
                    'errorKey' => 'error_key',
                    'message' => 'error message',
                ],
            ],
        ];

        $this->processingResultMock->expects($this->once())
            ->method('getErrors')
            ->willReturn($expectedErrors);

        $this->assertSame($expectedErrors, $this->processingResultMock->getErrors());
    }

    public function testGetProcessedData(): void
    {
        $expectedData = [
            'property' => 'processed value',
        ];

        $this->processingResultMock->expects($this->once())
            ->method('getProcessedData')
            ->willReturn($expectedData);

        $this->assertSame($expectedData, $this->processingResultMock->getProcessedData());
    }

    public function testToArray(): void
    {
        $expectedArray = [
            'isValid' => false,
            'errors' => [
                'property' => [
                    [
                        'errorKey' => 'error_key',
                        'message' => 'error message',
                    ],
                ],
            ],
            'processedData' => [
                'property' => 'processed value',
            ],
        ];

        $this->processingResultMock->expects($this->once())
            ->method('toArray')
            ->willReturn($expectedArray);

        $this->assertSame($expectedArray, $this->processingResultMock->toArray());
    }

    public function testClear(): void
    {
        $this->processingResultMock->expects($this->once())
            ->method('clear');

        $this->processingResultMock->clear();
    }
}
