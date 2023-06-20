<?php

namespace App;

class Request
{
    protected $current_request_uri;
    protected $current_request_method;

    public function __construct()
    {
        $this->current_request_uri = $_SERVER['REQUEST_URI'];
        $this->current_request_method = $_SERVER['REQUEST_METHOD'];
    }
    public function getRequestURI()
    {
        return $this->current_request_uri;
    }
    public function getRequestMethod()
    {
        return $this->current_request_method;
    }
}