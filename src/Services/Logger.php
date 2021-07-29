<?php

namespace App\Services;

Class Logger
{
    public function log(string $message)
    {
         error_log($message, 3, './log.info');
    }
}