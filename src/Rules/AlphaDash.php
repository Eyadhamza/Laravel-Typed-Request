<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class AlphaDash extends Rule
{
    public function rule(): string
    {
        return 'alpha_dash';
    }
}
