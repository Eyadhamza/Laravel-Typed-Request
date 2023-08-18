<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Boolean extends RuleAttribute
{
    public function rule(): string
    {
        return 'boolean';
    }
}
