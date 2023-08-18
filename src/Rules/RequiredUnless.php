<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class RequiredUnless extends RuleAttribute
{
    private string $field;

    public function __construct(string $field)
    {
        parent::__construct();
        $this->field = $field;
    }

    public function rule(): string
    {
        return "required_unless:{$this->field}";
    }
}
