<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class StartsWith extends Rule
{
    private string $value;

    public function __construct(string $value)
    {
        parent::__construct();
        $this->value = $value;
    }

    public function rule(): string
    {
        return "regex:/^{$this->value}/i";
    }
}
