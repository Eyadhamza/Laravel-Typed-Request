<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Present extends Rule
{
    public function rule(): string
    {
        return 'present';
    }
}
