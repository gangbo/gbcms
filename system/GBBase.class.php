<?php
namespace system;
class GBBase {
    protected $app;
    protected $controller_dir ='controller';
    protected $model_dir ='model';
    protected $controller;
    protected $function;

    public function __construct($app_dir){
        $this->app = $app_dir;
        $this->parse_url();
    }

    private function parse_url(){
        $url = $_SERVER['REQUEST_URI'];
        $parsed_url = parse_url($url);
        $url_path =  $parsed_url['path'];
        $arr = preg_match("/\w+?.php\/(\w+)\/?(\w+)?/",$url_path,$matches);
        $this->controller= isset($matches[1])?$matches[1]:'index';
        $this->function = isset($matches[2])?$matches[2]:'index_fun';
    }

    public function execute(){
        $this->begin();
        $controller_file = $this->app.'/'.$this->controller_dir.'/'.$this->controller.'.class.php';
        if (!file_exists($controller_file)) {
            die('你访问的页面不存在');
        }
        include $controller_file;
        $controller_class = ucfirst($this->controller);
        $controller_instance = new $controller_class();
        $function_name = $this->function;
        if(method_exists($controller_instance,$function_name)){
            $controller_instance->$function_name();
        }else{
            die('你访问的页面不存在');
        }
        $this->end();
    }

    public function begin(){
        header("Content-type:text/html;charset=utf-8");
    }

    public function end(){
    }


}
