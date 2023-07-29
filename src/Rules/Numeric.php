<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Numeric extends Rule
{
    public function rule()
    {
        return 'numeric';
    }
}
