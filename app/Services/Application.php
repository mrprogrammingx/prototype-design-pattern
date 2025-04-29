<?php

namespace App\Services;

use App\Services\Circle;

class Application
{
    public Circle $circle;

    public function __construct()
    {
        $circle = new Circle(10);
    }
}
