<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Image extends RuleAttribute
{

    public function rule(): string
    {
        return 'image';
    }

}
