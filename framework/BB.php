<?php
namespace BB;

if(!defined('ENTRY_ABS_DIR')) die('ENTRY_ABS_DIR was not defined');

define('BB_FRAMEWORK',dirname(__FILE__));
require BB_FRAMEWORK.'/php-router/Router.php';
require BB_FRAMEWORK.'/php-router/Route.php';
require BB_FRAMEWORK.'/ccode/create.php';
class BB {

    public $router;

    public function __construct(){
        $this->router = new Router($rule);
        $this->router->setBasePath(str_replace($_SERVER['DOCUMENT_ROOT'],'',ENTRY_ABS_DIR));
        $this->router->map('/:controller/:action','');
        $this->router->map('/create_code','create_code');
    }

    public function run(){
        $route = $this->router->matchCurrentRequest();
        $target = $route->getTarget();
        var_dump($target);
        if( 'create_code' == $route->getTarget()){
            $this->create_code();
        }
        var_dump($route->getTarget());
        var_dump($route->getParameters());
    }

    public function create_code(){
        $code_creater = new Ccode\Create();
        $code_creater->basic();
        echo '2222';
    }
}
