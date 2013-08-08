<?php
namespace BB\Ccode;


class Template {
    
    public $dirs;

    public function __construct(){
        $this->dirs = Config::$dirs;
    } 

    public function create(){
        $this->mk_dirs();
    }

    private function mk_dirs(){
        foreach($this->dirs as $dir){
            echo APP_DIR.'/'.$dir.'==';
            mkdir(APP_DIR.'/'.$dir,0777);
        } 
    }

}

class Config {

    public static $dirs = array(
        'controller',
        'model',
        'view',
        'view/index',
    );
}
