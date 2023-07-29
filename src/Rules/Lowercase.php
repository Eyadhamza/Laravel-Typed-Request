<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Lowercase extends Rule
{
    public function rule(): string
    {
        return 'lowercase';
    }
}
