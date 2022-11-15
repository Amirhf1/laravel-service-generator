<?php

declare(strict_types = 1);

namespace Amirhf\LaravelServiceGenerator\Console;


use Illuminate\Console\GeneratorCommand;

class MakeService extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * @var string
     */
    protected $description = 'Create a new service class';

    /**
     * @var string
     */
    protected $type = 'Service';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/service.stub';
    }

    /**
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Services';
    }
}