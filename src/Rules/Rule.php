<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;
use Illuminate\Http\Request;

#[Attribute]
abstract class Rule
{
    protected Request $request;

    public function __construct()
    {
        $this->request = app('request');
    }

    abstract public function rule();
}
