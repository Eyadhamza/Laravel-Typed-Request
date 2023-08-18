<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Before extends RuleAttribute
{
    private string $date;

    public function __construct(string $date)
    {
        parent::__construct();
        $this->date = $date;
    }

    public function rule(): string
    {
        return "before:{$this->date}";
    }
}
