<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\Processor;

use KaririCode\Contract\Processor\Pipeline;
use KaririCode\Contract\Processor\Processor;
use KaririCode\Contract\Processor\ProcessorBuilder;
use KaririCode\Contract\Processor\ProcessorRegistry;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class ProcessorBuilderTest extends TestCase
{
    private ProcessorBuilder|MockObject $processorBuilderMock;
    private Processor|MockObject $processorMock;
    private Pipeline|MockObject $pipelineMock;
    private ProcessorRegistry|MockObject $processorRegistryMock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->processorBuilderMock = $this->createMock(ProcessorBuilder::class);
        $this->processorMock = $this->createMock(Processor::class);
        $this->pipelineMock = $this->createMock(Pipeline::class);
        $this->processorRegistryMock = $this->createMock(ProcessorRegistry::class);
    }

    public function testBuild(): void
    {
        $this->processorBuilderMock->expects($this->once())
            ->method('build')
            ->with('context', 'name', [])
            ->willReturn($this->processorMock);

        $this->assertSame($this->processorMock, $this->processorBuilderMock->build('context', 'name'));
    }

    public function testBuildWithConfig(): void
    {
        $config = ['option' => 'value'];
        $this->processorBuilderMock->expects($this->once())
            ->method('build')
            ->with('context', 'name', $config)
            ->willReturn($this->processorMock);

        $this->assertSame($this->processorMock, $this->processorBuilderMock->build('context', 'name', $config));
    }

    public function testBuildPipeline(): void
    {
        $processorSpecs = [
            'processor1' => [],
            'processor2' => ['option' => 'value'],
        ];

        $this->processorBuilderMock->expects($this->once())
            ->method('buildPipeline')
            ->with('context', $processorSpecs)
            ->willReturn($this->pipelineMock);

        $this->assertSame($this->pipelineMock, $this->processorBuilderMock->buildPipeline('context', $processorSpecs));
    }

    public function testBuildThrowsException(): void
    {
        $this->processorBuilderMock->expects($this->once())
            ->method('build')
            ->with('nonexistent', 'name')
            ->willThrowException(new \RuntimeException('Processor not found'));

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Processor not found');
        $this->processorBuilderMock->build('nonexistent', 'name');
    }

    public function testBuildPipelineThrowsException(): void
    {
        $this->processorBuilderMock->expects($this->once())
            ->method('buildPipeline')
            ->with('nonexistent', [])
            ->willThrowException(new \RuntimeException('Failed to build pipeline'));

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Failed to build pipeline');
        $this->processorBuilderMock->buildPipeline('nonexistent', []);
    }
}
