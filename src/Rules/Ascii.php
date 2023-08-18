<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Ascii extends RuleAttribute
{
    public function rule(): string
    {
        return 'ascii';
    }
}
