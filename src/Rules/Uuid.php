<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Uuid extends Rule
{
    public function rule(): string
    {
        return 'uuid';
    }
}
