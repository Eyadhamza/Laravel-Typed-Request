<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Required extends Rule
{
    public function rule(): string
    {
        return 'required';
    }
}
