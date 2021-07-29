<?php

namespace App\Services;
use App\Services\Dasher;
use App\Services\Capitalizer;

class DasherCapitalizer implements TransformInterface
{
    private TransformInterface $dasher;
    private TransformInterface $capitalizer;

    /**
     * DasherCapitalizer constructor.
     * @param TransformInterface $dasher
     * @param TransformInterface $capitalizer
     */
    public function __construct(TransformInterface $dasher, TransformInterface $capitalizer)
    {
        $this->dasher = $dasher;
        $this->capitalizer = $capitalizer;
    }


    public function transform(string $string): string
    {
        $string = $this->dasher->transform($string);
        return $this->capitalizer->transform($string);
    }
}