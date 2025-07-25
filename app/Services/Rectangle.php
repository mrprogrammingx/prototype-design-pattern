<?php

namespace App\Services;

use App\Services\Shape;

class Rectangle extends Shape
{
    public function __construct(public int $width, public int $height)
    {
    }

    public function clone(): self
    {
        return new Rectangle($this->width, $this->height);
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }

    public function getPerimeter(): float
    {
        return 2 * ($this->width + $this->height);
    }

    public function getType(): string
    {
        return 'Rectangle';
    }

    public function __toString(): string
    {
        return sprintf(
            "Rectangle: width=%d, height=%d, x=%d, y=%d",
            $this->width,
            $this->height,
            $this->x,
            $this->y
        );
    }
}
