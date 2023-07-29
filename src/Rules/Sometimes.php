<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Sometimes extends Rule
{
    public function rule(): string
    {
        return 'sometimes';
    }
}
