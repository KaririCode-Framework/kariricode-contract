<?php

declare(strict_types=1);

namespace KaririCode\Contract\Tests\DI;

use KaririCode\Contract\DI\Compiler;
use KaririCode\Contract\DI\Container;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class CompilerTest extends TestCase
{
    private Compiler|MockObject $compiler;
    private Container|MockObject $container;

    protected function setUp(): void
    {
        $this->compiler = $this->createMock(Compiler::class);
        $this->container = $this->createMock(Container::class);
    }

    public function testCompile(): void
    {
        $compiledContainer = $this->createMock(Container::class);

        $this->compiler->expects($this->once())
            ->method('compile')
            ->with($this->container)
            ->willReturn($compiledContainer);

        $result = $this->compiler->compile($this->container);

        $this->assertInstanceOf(Container::class, $result);
        $this->assertSame($compiledContainer, $result);
    }

    public function testWriteToFile(): void
    {
        $path = '/path/to/compiled/container.php';

        $this->compiler->expects($this->once())
            ->method('writeToFile')
            ->with($path);

        $this->compiler->writeToFile($path);
    }

    public function testLoadFromFile(): void
    {
        $path = '/path/to/compiled/container.php';
        $loadedContainer = $this->createMock(Container::class);

        $this->compiler->expects($this->once())
            ->method('loadFromFile')
            ->with($path)
            ->willReturn($loadedContainer);

        $result = $this->compiler->loadFromFile($path);

        $this->assertInstanceOf(Container::class, $result);
        $this->assertSame($loadedContainer, $result);
    }

    public function testCompileAndWriteWorkflow(): void
    {
        $compiledContainer = $this->createMock(Container::class);
        $path = '/path/to/compiled/container.php';

        // Usando um array para rastrear a ordem das chamadas
        $callOrder = [];

        $this->compiler->expects($this->once())
            ->method('compile')
            ->with($this->container)
            ->willReturnCallback(function () use ($compiledContainer, &$callOrder) {
                $callOrder[] = 'compile';

                return $compiledContainer;
            });

        $this->compiler->expects($this->once())
            ->method('writeToFile')
            ->with($path)
            ->willReturnCallback(function () use (&$callOrder) {
                $callOrder[] = 'writeToFile';
            });

        $result = $this->compiler->compile($this->container);
        $this->compiler->writeToFile($path);

        // Verifica se os métodos foram chamados na ordem correta
        $this->assertEquals(['compile', 'writeToFile'], $callOrder);
        $this->assertSame($compiledContainer, $result);
    }
}
