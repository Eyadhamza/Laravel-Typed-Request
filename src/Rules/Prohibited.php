<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Prohibited extends Rule
{
    public function rule(): string
    {
        return 'prohibited';
    }
}
