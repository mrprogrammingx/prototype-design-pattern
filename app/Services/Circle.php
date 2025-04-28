<?php

namespace App\Services;

class Circle extends Shape
{
    public function __construct(public int $radius)
    {
    }

    public function clone(): self
    {
        return new Circle($this->radius);
    }
}
