<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class AfterOrEqual extends Rule
{
    private string $date;

    public function __construct(string $date)
    {
        parent::__construct();
        $this->date = $date;
    }

    public function rule(): string
    {
        return "after_or_equal:{$this->date}";
    }
}
