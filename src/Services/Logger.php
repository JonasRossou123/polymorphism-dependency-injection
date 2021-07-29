<?php

namespace App\Services;

Class Logger
{
    public function log(string $message)
    {
         error_log($message."\n", 3, './log.info');
    }
}