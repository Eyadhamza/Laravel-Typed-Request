<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class GreaterThanOrEqual extends RuleAttribute
{
    private string $field;

    public function __construct(string $field)
    {
        parent::__construct();
        $this->field = $field;
    }

    public function rule(): string
    {
        return "gte:{$this->field}";
    }
}
