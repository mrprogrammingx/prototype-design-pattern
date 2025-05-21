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

    public function setX(int $x): void
    {
        $this->x = $x;
    }

    public function setY(int $y): void
    {
        $this->y = $y;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    abstract public function clone(): self;
}
