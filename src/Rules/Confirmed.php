<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Confirmed extends Rule
{
    public function rule(): string
    {
        return 'confirmed';
    }
}
