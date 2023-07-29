<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class MimeTypeByFileExtension extends Rule
{
    private array $extensions;

    public function __construct(array $extensions)
    {
        parent::__construct();
        $this->extensions = $extensions;
    }

    public function rule(): string
    {
        return "mimetypes_by_extensions:" . implode(',', $this->extensions);
    }
}
