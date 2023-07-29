<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Date extends Rule
{
    public function rule(): string
    {
        return 'date';
    }
}
