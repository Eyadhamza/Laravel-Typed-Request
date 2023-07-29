<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Distinct extends Rule
{
    public function rule(): string
    {
        return 'distinct';
    }
}
