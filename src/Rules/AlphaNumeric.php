<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class AlphaNumeric extends Rule
{
    public function rule(): string
    {
        return 'alpha_num';
    }
}
