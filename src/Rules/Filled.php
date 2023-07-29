<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Filled extends Rule
{
    public function rule(): string
    {
        return 'filled';
    }
}
