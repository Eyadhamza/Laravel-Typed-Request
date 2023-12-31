<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class After extends RuleAttribute
{
    private string $date;

    public function __construct(string $date)
    {
        parent::__construct();
        $this->date = $date;
    }

    public function rule(): string
    {
        return "after:{$this->date}";
    }
}
