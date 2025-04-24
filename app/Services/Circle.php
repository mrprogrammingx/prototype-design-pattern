<?php

namespace App\Services;

class Circle
{
    public function __construct(public int $radius)
    {
    }

    public function clone(): self
    {
    }
}
