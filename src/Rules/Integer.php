<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Integer extends Rule
{
    public function rule(): string
    {
        return 'integer';
    }
}
