<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Sometimes extends RuleAttribute
{
    public function rule(): string
    {
        return 'sometimes';
    }
}
