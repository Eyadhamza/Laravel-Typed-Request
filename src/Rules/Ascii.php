<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Ascii extends Rule
{
    public function rule(): string
    {
        return 'ascii';
    }
}
