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

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }
    
}
