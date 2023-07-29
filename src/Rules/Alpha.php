<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Alpha extends Rule
{
    public function rule(): string
    {
        return 'alpha';
    }
}
