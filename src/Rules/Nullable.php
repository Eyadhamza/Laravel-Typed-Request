<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Nullable extends Rule
{

    public function rule(): string
    {
        return 'nullable';
    }
}
