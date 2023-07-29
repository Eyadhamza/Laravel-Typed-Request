<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class JSONRule extends Rule
{
    public function rule(): string
    {
        return 'json';
    }
}
