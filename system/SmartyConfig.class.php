<?php
include SMARTY_DIR.'Smarty.class.php';
class SmartyConfig extends Smarty {

    function __construct(){
        parent::__construct();
        $app = APP_DIR;
        $this->setTemplateDir("$app/templates/");
        $this->setCompileDir("$app/cache/templates_c/");
        $this->setConfigDir("$app/configs/");
        $this->setCacheDir("$app/cache/");
        $this->caching = Smarty::CACHING_OFF;
//        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
//        $this->debugging = true;
   }

}
