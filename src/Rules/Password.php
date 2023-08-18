<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Password extends RuleAttribute
{
    public function rule(): string
    {
        return 'password';
    }
}
