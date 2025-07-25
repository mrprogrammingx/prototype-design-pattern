<?php

namespace App\Services;

use App\Services\Shape;
use App\Services\Circle;

class Application
{
    public Circle $circle;
    public array $shapes;

    public function __construct()
    {
        $defaultRadius = 20;
        $defaultX = 10;
        $defaultY = 10;
        $this->circle = new Circle($defaultRadius);
        $this->circle->x = $defaultX;
        $this->circle->y = $defaultY;

        $this->shapes[] = $this->circle;

        $anotherCircle = $this->circle->clone();
        $this->shapes[] = $anotherCircle;

        $rectangle = new Rectangle(10, 20);
        $this->shapes[] = $rectangle;
    }

    public function businessLogic(): array
    {
        $shapesCopy = [];

        foreach ($this->shapes as $shape) {
            $shapesCopy[] = $shape->clone();
        }

        return $shapesCopy;
    }

    public function getShapes(): array
    {
        return $this->shapes;
    }

    public function getCircle(): Circle
    {
        return $this->circle;
    }
    
    public function setCircle(Circle $circle): void
    {
        $this->circle = $circle;
    }

    public function setShapes(array $shapes): void
    {
        $this->shapes = $shapes;
    }

    public function addShape(Shape $shape): void
    {
        $this->shapes[] = $shape;
    }

    public function removeShape(Shape $shape): void
    {
        $key = array_search($shape, $this->shapes, true);
        if ($key !== false) {
            unset($this->shapes[$key]);
        }
    }

    public function clearShapes(): void
    {
        $this->shapes = [];
    }

    public function getShapeByIndex(int $index): ?Shape
    {
        return $this->shapes[$index] ?? null;
    }

    public function getShapeCount(): int
    {
        return count($this->shapes);
    }

    public function getShapeByColor(string $color): ?Shape
    {
        foreach ($this->shapes as $shape) {
            if ($shape->getColor() === $color) {
                return $shape;
            }
        }
        return null;
    }

    public function getShapeByPosition(int $x, int $y): ?Shape
    {
        foreach ($this->shapes as $shape) {
            if ($shape->getX() === $x && $shape->getY() === $y) {
                return $shape;
            }
        }
        return null;
    }

    public function getShapesByType(string $type): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if (get_class($shape) === $type) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByRadius(int $radius): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if ($shape instanceof Circle && $shape->getRadius() === $radius) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByWidth(int $width): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if ($shape instanceof Rectangle && $shape->getWidth() === $width) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByHeight(int $height): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if ($shape instanceof Rectangle && $shape->getHeight() === $height) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByPosition(int $x, int $y): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if ($shape->getX() === $x && $shape->getY() === $y) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByColor(string $color): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if ($shape->getColor() === $color) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByTypeAndColor(string $type, string $color): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if (get_class($shape) === $type && $shape->getColor() === $color) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByTypeAndPosition(string $type, int $x, int $y): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if (get_class($shape) === $type && $shape->getX() === $x && $shape->getY() === $y) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByTypeAndRadius(string $type, int $radius): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if (get_class($shape) === $type && $shape instanceof Circle && $shape->getRadius() === $radius) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByTypeAndWidth(string $type, int $width): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if (get_class($shape) === $type && $shape instanceof Rectangle && $shape->getWidth() === $width) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByTypeAndHeight(string $type, int $height): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if (get_class($shape) === $type && $shape instanceof Rectangle && $shape->getHeight() === $height) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByTypeAndPositionAndColor(string $type, int $x, int $y, string $color): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if (get_class($shape) === $type && $shape->getX() === $x && $shape->getY() === $y && $shape->getColor() === $color) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByTypeAndPositionAndRadius(string $type, int $x, int $y, int $radius): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if (get_class($shape) === $type && $shape->getX() === $x && $shape->getY() === $y && $shape instanceof Circle && $shape->getRadius() === $radius) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByTypeAndPositionAndWidth(string $type, int $x, int $y, int $width): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if (get_class($shape) === $type && $shape->getX() === $x && $shape->getY() === $y && $shape instanceof Rectangle && $shape->getWidth() === $width) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }

    public function getShapesByTypeAndPositionAndHeight(string $type, int $x, int $y, int $height): array
    {
        $filteredShapes = [];
        foreach ($this->shapes as $shape) {
            if (get_class($shape) === $type && $shape->getX() === $x && $shape->getY() === $y && $shape instanceof Rectangle && $shape->getHeight() === $height) {
                $filteredShapes[] = $shape;
            }
        }
        return $filteredShapes;
    }
}