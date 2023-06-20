<?php

namespace App;

class Application
{

    public Router $router;



    public function __construct(string $rootDirectory)
    {
        $request = new Request();
        $config = new Config($rootDirectory);
        $config->setRouteFolder('core/Routes/');
        $this->router = new Router($request, $config);
    }

    public function execute()
    {
        $this->router->execute();
    }

}