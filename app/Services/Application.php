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
        $this->circle = new Circle(20);
        $this->circle->x = 10;
        $this->circle->y = 10;

        $this->shapes[] = $this->circle;

        $anotherCircle = $this->circle->clone();
        $this->shapes[] = $anotherCircle;

        $rectangle = new Rectangle(10, 20);

    }
}
