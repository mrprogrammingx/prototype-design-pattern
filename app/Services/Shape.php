<?php

namespace App\Services;

abstract class Shape
{
    public function __construct(public int $x, public int $y, public string $color)
    {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    abstract public function clone(): self;
}
