<?php
define('BB_FRAMEWORK',dirname(__FILE__));
require BB_FRAMEWORK.'/php-router/Router.php';
require BB_FRAMEWORK.'/php-router/Route.php';

class BB {

    public $router;

    public function __construct(){
        $this->router = new Router($rule);
        $this->router->setBasePath('/gbcms');
        $this->router->map('/aa/bb','aa##');
        $this->router->map('/:controller/:action','');
    }

    public function run(){
        $route = $this->router->matchCurrentRequest();
        var_dump($route->getTarget());
        var_dump($route->getParameters());
    }
}
