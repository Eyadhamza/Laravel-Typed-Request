<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Boolean extends Rule
{
    public function rule(): string
    {
        return 'boolean';
    }
}
