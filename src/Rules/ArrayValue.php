<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class ArrayValue extends RuleAttribute
{
    public function rule(): string
    {
        return 'array';
    }
}
