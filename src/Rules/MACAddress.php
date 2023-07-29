<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class MACAddress extends Rule
{
    public function rule(): string
    {
        return 'mac_address';
    }
}
