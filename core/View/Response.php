<?php

namespace App\View;

class Response
{
    public function __construct()
    {
    }

    public function setSatusCode($status)
    {
        http_response_code($status);
    }
}