<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Numeric extends RuleAttribute
{
    public function rule()
    {
        return 'numeric';
    }
}
