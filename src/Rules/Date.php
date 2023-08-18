<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Date extends RuleAttribute
{
    public function rule(): string
    {
        return 'date';
    }
}
