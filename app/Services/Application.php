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

}