<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Missing extends Rule
{

    public function rule(): string
    {
        return 'missing';
    }
}
