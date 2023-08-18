<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Lowercase extends RuleAttribute
{
    public function rule(): string
    {
        return 'lowercase';
    }
}
