<?php

namespace PiSpace\LaravelTypedRequest\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeTypedRequestCommand extends GeneratorCommand
{
    protected $signature = 'make:typed-request {name} {--path=}';

    protected $description = 'Make a typed request';

    protected function getStub(): string
    {
        return $this->resolveStubPath('/stubs/typed-request.stub');
    }

    protected function resolveStubPath($stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__ . $stub;
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Http\Requests';
    }
}
