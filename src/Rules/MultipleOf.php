<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class MultipleOf extends RuleAttribute
{
    private float $value;

    public function __construct(float $value)
    {
        parent::__construct();
        $this->value = $value;
    }

    public function rule(): string
    {
        return "multiple_of:{$this->value}";
    }
}
