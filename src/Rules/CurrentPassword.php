<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class CurrentPassword extends Rule
{
    public function rule(): string
    {
        return 'current_password';
    }
}
