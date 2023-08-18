<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class StringValue extends RuleAttribute
{
    public function rule(): string
    {
        return 'string';
    }
}
