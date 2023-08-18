<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Filled extends RuleAttribute
{
    public function rule(): string
    {
        return 'filled';
    }
}
