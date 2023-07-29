<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class ArrayValue extends Rule
{
    public function rule(): string
    {
        return 'array';
    }
}
