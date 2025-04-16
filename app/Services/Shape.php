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
    
}
