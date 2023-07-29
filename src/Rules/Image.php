<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Image extends Rule
{

    public function rule(): string
    {
        return 'image';
    }

}
