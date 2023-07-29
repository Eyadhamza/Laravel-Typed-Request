<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class DoesntStartWith extends Rule
{
    private string $value;

    public function __construct(string $value)
    {
        parent::__construct();
        $this->value = $value;
    }

    public function rule(): string
    {
        return "not_regex:/^{$this->value}/i";
    }
}
