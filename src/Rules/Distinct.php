<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Distinct extends RuleAttribute
{
    public function rule(): string
    {
        return 'distinct';
    }
}
