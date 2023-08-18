<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class URL extends RuleAttribute
{
    public function rule(): string
    {
        return 'url';
    }
}
