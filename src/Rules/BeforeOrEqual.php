<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class BeforeOrEqual extends Rule
{
    private string $date;

    public function __construct(string $date)
    {
        parent::__construct();
        $this->date = $date;
    }

    public function rule(): string
    {
        return "before_or_equal:{$this->date}";
    }
}
