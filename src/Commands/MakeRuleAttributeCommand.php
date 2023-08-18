<?php

namespace PiSpace\LaravelTypedRequest\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeRuleAttributeCommand extends GeneratorCommand
{
    protected $signature = 'make:rule-attribute {name} {--path=}';

    protected $description = 'Create a new rule attribute';

    protected function getStub(): string
    {
        return $this->resolveStubPath('/stubs/rule-attribute.stub');
    }

    protected function resolveStubPath($stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__ . $stub;
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Rules';
    }
}
