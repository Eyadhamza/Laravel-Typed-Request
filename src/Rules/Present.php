<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Present extends RuleAttribute
{
    public function rule(): string
    {
        return 'present';
    }
}
