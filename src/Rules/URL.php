<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class URL extends Rule
{
    public function rule(): string
    {
        return 'url';
    }
}
