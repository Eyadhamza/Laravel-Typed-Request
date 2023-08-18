<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;
use Illuminate\Validation\Rule;

#[Attribute]
class RequiredIfPatch extends RuleAttribute
{
    public function rule(): \Illuminate\Validation\Rules\RequiredIf
    {
        return Rule::requiredIf(fn() => $this->request->isMethod('PATCH'));
    }
}
