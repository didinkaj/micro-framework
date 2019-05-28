<?php

namespace App\Core;


class Router
{
    public $routes = [
        'GET' => [

        ],
        'POST' => [

        ]
    ];

    /**
     * @param $file
     * @return Router
     */
    public static function load($file)
    {
        $router = new static;

        require($file);

        return $router;
    }

    /**
     * @param $uri
     * @param $controller
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }


    /**
     * @param $uri
     * @param $controller
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $requestType
     * @return mixed
     */
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {

            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new Exception("Error Processing Request", 1);

    }

    /**
     * @param $controller
     * @param $action
     * @return mixed
     */
    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";

        $controller = new $controller;


        if (!method_exists($controller, $action)) {
            throw new Exception("{$controller} doesnot respond to {$action} ", 1);

        }

        return $controller->$action();

    }
}