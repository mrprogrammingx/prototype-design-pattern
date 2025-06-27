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

    public function __debugInfo(): array
    {
        return [
            'type' => $this->getType(),
            'radius' => $this->radius,
            'x' => $this->x,
            'y' => $this->y,
            'area' => $this->getArea(),
            'perimeter' => $this->getPerimeter(),
        ];
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
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

    public function setPosition(int $x, int $y): void
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getPosition(): array
    {
        return ['x' => $this->x, 'y' => $this->y];
    }
    
    public function getBoundingBox(): array
    {
        return [
            'x1' => $this->x - $this->radius,
            'y1' => $this->y - $this->radius,
            'x2' => $this->x + $this->radius,
            'y2' => $this->y + $this->radius,
        ];
    }
}
