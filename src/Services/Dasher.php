<?php

namespace App\Services;

class Dasher implements TransformInterface
{

    public function transform(string $string): string
    {
        return str_replace(' ', '-', $string);
    }
}