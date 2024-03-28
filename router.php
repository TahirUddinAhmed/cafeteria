<?php

class Router {
    protected $routes = [];

    /**
     * Register Route
     * 
     * @param $method
     * @param $uri
     * @param $controller
     * @return void
     */
    public function registerRoute($method, $uri, $controller) {
        $this->routes = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller
        ];
    }

    /**
     * Add a GET route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function get($uri, $controller) {
       $this->registerRoute('GET', $uri, $controller);
    }

    /**
     * Add a POST route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function post($uri, $controller) {
        $this->registerRoute('POST', $uri, $controller);
    }

    /**
     * Add a PUT route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function put($uri, $controller) {
        $this->registerRoute('PUT', $uri, $controller);
    }

    /**
     * Add a DELETE route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function delete($uri, $controller) {
        $this->registerRoute('DELETE', $uri, $controller);
    }
}