<?php
class Router
{
    private array $routes;
    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function getControllerMethod()
    {
        if (array_key_exists($_GET['page'], $this->routes)){
            return $this->routes[$_GET['page']];
        }
    }
}
