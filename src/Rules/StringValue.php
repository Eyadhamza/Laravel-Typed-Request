<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class StringValue extends Rule
{
    public function rule(): string
    {
        return 'string';
    }
}
