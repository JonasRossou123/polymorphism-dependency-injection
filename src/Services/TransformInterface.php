<?php

namespace App\Services;

// Declare the interface 'Template'
interface TransformInterface
{
    public function transform(string $string) : String;

}