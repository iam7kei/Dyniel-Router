<?php

namespace App;

class Router
{

    const VIEW_DIR = __DIR__ . '/View/';
    private Request $request;
    protected $routes;
    private $xml;

    protected $get = [];

    protected $post = [];

    public Config $config;

    public function __construct(Request $request, Config $config)
    {
        $this->request = $request;
        $this->config = $config;
        $this->xml = simplexml_load_file($this->config->getRouteFolder()."Routes.xml");
        $this->routes = $this->loadRoutes($this->xml);

    }

    private function loadRoutes($xml)
    {
        for ($i = 0; $i < count($xml); $i++) {
            echo "<pre>";
            if ((string)$xml->Route[$i]->type[0] === 'post') {
                $this->post[(string)$xml->Route[$i]->request] = (string)$xml->Route[$i]->target;
            } else {
                $this->get[(string)$xml->Route[$i]->request] = (string)$xml->Route[$i]->target;
            }
        }
        $this->routes = array("POST" => $this->post, "GET" => $this->get);

        return $this->routes;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function execute()
    {
        $current_uri = $this->request->getRequestURI();
        $type = $this->request->getRequestMethod();
        $resource = self::VIEW_DIR . '404.php';
        if (array_key_exists($current_uri, $this->routes[$type])) {
            $resource = self::VIEW_DIR . $this->routes[$type][$current_uri];
            if (file_exists($resource)) {
                include_once $resource;
            }
        }
        include_once $resource;
    }
}
