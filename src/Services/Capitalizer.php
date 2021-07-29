<?php

namespace App\Services;

class Capitalizer implements TransformInterface
{
    public function transform(string $string): string
    {
        $i = 0;
        $res = '';
        while ($i < strlen($string)) {
            $character = $string[$i];
            $res .= $character == strtoupper($character) ? strtolower($character) : strtoupper($character);
            $i++;
        }
        return $res;

    }
}