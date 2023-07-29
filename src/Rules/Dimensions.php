<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Dimensions extends Rule
{
    private int $width;
    private int $height;

    public function __construct(int $width, int $height)
    {
        parent::__construct();
        $this->width = $width;
        $this->height = $height;
    }

    public function rule(): string
    {
        return "dimensions:min_width={$this->width},min_height={$this->height}";
    }
}
