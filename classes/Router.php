<?php
class Router
{
    private array $routes;
    private string $pagesDirectory;
    public function __construct(array $routes, string $pagesDirectory)
    {
        $this->routes = $routes;
        $this->pagesDirectory = $pagesDirectory;
    }

    public function callContent()
    {
        if (array_key_exists($_GET['page'], $this->routes)){
            return $this->routes[$_GET['page']];
        }
    }
}
