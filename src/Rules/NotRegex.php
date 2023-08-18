<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class NotRegex extends RuleAttribute
{
    private string $pattern;

    public function __construct(string $pattern)
    {
        parent::__construct();
        $this->pattern = $pattern;
    }

    public function rule(): string
    {
        return "not_regex:{$this->pattern}";
    }
}
