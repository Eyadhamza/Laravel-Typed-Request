<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Uppercase extends Rule
{
    public function rule(): string
    {
        return 'uppercase';
    }
}
