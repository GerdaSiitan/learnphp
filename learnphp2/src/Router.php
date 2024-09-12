<?php

class Router {
    private static $route = [];
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function match() {
        foreach(self::$routes as $route){
            if($route['path'] === $this->path){
                return $path
            }
        }
    }
}