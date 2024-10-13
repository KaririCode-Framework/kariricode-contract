<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Processor;

use KaririCode\Contract\DataStructure\Map;
use KaririCode\Contract\Processor\Processor;
use KaririCode\Contract\Processor\ProcessorRegistry;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class ProcessorRegistryTest extends TestCase
{
    private ProcessorRegistry|MockObject $processorRegistryMock;
    private Processor|MockObject $processorMock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->processorRegistryMock = $this->createMock(ProcessorRegistry::class);
        $this->processorMock = $this->createMock(Processor::class);
    }

    public function testRegister(): void
    {
        $this->processorRegistryMock->expects($this->once())
            ->method('register')
            ->with('context', 'name', $this->processorMock);

        $this->processorRegistryMock->register('context', 'name', $this->processorMock);
    }

    public function testGet(): void
    {
        $this->processorRegistryMock->expects($this->once())
            ->method('get')
            ->with('context', 'name')
            ->willReturn($this->processorMock);

        $this->assertSame($this->processorMock, $this->processorRegistryMock->get('context', 'name'));
    }

    public function testGetContextProcessors(): void
    {
        $contextProcessorsMock = $this->createMock(Map::class);

        $this->processorRegistryMock->expects($this->once())
            ->method('getContextProcessors')
            ->with('context')
            ->willReturn($contextProcessorsMock);

        $this->assertSame($contextProcessorsMock, $this->processorRegistryMock->getContextProcessors('context'));
    }

    public function testGetThrowsException(): void
    {
        $this->processorRegistryMock->expects($this->once())
            ->method('get')
            ->with('nonexistent', 'name')
            ->willThrowException(new \RuntimeException('Processor not found'));

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Processor not found');

        $this->processorRegistryMock->get('nonexistent', 'name');
    }

    public function testGetContextProcessorsThrowsException(): void
    {
        $this->processorRegistryMock->expects($this->once())
            ->method('getContextProcessors')
            ->with('nonexistent')
            ->willThrowException(new \RuntimeException('Context not found'));

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Context not found');

        $this->processorRegistryMock->getContextProcessors('nonexistent');
    }
}
