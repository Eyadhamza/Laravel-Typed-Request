<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Email extends RuleAttribute
{
    public function rule(): string
    {
        return 'email';
    }
}
