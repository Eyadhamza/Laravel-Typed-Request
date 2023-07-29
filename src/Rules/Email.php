<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Email extends Rule
{
    public function rule(): string
    {
        return 'email';
    }
}
