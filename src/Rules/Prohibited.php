<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Prohibited extends RuleAttribute
{
    public function rule(): string
    {
        return 'prohibited';
    }
}
