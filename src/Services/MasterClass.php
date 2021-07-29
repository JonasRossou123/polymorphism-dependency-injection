<?php

namespace App\Services;

use App\Services\Capitalizer;
use App\Services\Dasher;
use App\Services\Logger;
use App\Services\TransformInterface;

Class MasterClass
{
private TransformInterface $transformer;
private Logger $logger;

    /**
     * MasterClass constructor.
     */
    public function __construct(TransformInterface $transformer, Logger $logger)
    {
        $this->transformer = $transformer;
        $this->logger = $logger;
    }

    public function processor($string){
        $this->logger->log($this-> transformer -> transform  ($string));
        return $this-> transformer -> transform($string);
    }

}