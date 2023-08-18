<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class AlphaNumeric extends RuleAttribute
{
    public function rule(): string
    {
        return 'alpha_num';
    }
}
