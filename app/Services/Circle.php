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

    public function getArea(): float
    {
        return pi() * ($this->radius ** 2);
    }

    public function getPerimeter(): float
    {
        return 2 * pi() * $this->radius;
    }
    
    public function getType(): string
    {
        return 'Circle';
    }

    public function __toString(): string
    {
        return sprintf(
            "Circle: radius=%d, x=%d, y=%d",
            $this->radius,
            $this->x,
            $this->y
        );
    }

}
