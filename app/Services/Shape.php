<?php

namespace App\Services;

abstract class Shape
{
    public int $x;
    public int $y;
    public string $color;

    public function __construct()
    {
    }
}
