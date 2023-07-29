<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class DateRule extends Rule
{
    public function rule(): string
    {
        return 'date';
    }
}
