<?php

namespace App;

class Config
{

    private string $rootDirectory;

    protected static string $routeFolderDirectory;

    protected static string $viewFolderDirectory;
    public function __construct(string $rootDirectory)
    {
        $this->rootDirectory = $rootDirectory;
    }

    public function setRouteFolder(string $routeFolder)
    {
        Config::$routeFolderDirectory = $this->rootDirectory."/".$routeFolder;
    }
    public function getRouteFolder(): string
    {
        return Config::$routeFolderDirectory;
    }

    public function setViewFolder(string $viewFolder)
    {
        Config::$viewFolderDirectory = $this->rootDirectory."/".$viewFolder;
    }

}