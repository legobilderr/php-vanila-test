<?php

class Router
{

    public $routes = [
        'GET' => [],
        'POST' => []
    ];




    public static function load($file)
    {

        $router = new static;

        require $file;

        return $router;
    }


    public function define($routes)
    {
        $this->routes = $routes;
    }


    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        };

        throw new Exception('No route dfined for this url');
    }


    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
}
