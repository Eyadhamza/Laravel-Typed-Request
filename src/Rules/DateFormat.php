<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class DateFormat extends RuleAttribute
{
    private string $format;

    public function __construct(string $format)
    {
        parent::__construct();
        $this->format = $format;
    }

    public function rule(): string
    {
        return "date_format:{$this->format}";
    }
}
