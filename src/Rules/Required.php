<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Required extends RuleAttribute
{
    public function rule(): string
    {
        return 'required';
    }
}
