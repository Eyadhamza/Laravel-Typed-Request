<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class MIMETypes extends RuleAttribute
{
    private array $types;

    public function __construct(array $types)
    {
        parent::__construct();
        $this->types = $types;
    }

    public function rule(): string
    {
        return "mimetypes:" . implode(',', $this->types);
    }
}
