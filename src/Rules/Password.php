<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Password extends Rule
{
    public function rule(): string
    {
        return 'password';
    }
}
