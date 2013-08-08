<?php
namespace BB\Ccode;

require BB_FRAMEWORK.'/ccode/template.php';

class Create {

    public function __construct(){
    }

    public function basic(){
        $template = new Template(); 
        $template->create(); 
    }
    
}
