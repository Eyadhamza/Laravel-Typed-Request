<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Integer extends RuleAttribute
{
    public function rule(): string
    {
        return 'integer';
    }
}
