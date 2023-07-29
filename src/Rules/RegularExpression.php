<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class RegularExpression extends Rule
{
    private string $pattern;

    public function __construct(string $pattern)
    {
        parent::__construct();
        $this->pattern = $pattern;
    }

    public function rule(): string
    {
        return "regex:{$this->pattern}";
    }
}
