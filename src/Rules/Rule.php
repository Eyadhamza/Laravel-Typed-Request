<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;
use Illuminate\Http\Request;

#[Attribute]
abstract class Rule
{
    protected string $rule;
    protected Request $request;

    public function __construct()
    {
        $this->request = app('request');
        $this->rule = $this->rule();
    }

    abstract public function rule();
}
