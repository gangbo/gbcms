<?php
class Home {
    public function index(){
    }
    public function login(){
        echo "this is login page";
        var_dump($_GET);
        $tpl = new SmartyConfig();
        $tpl->assign('var','123');
        $tpl->display('login.tpl');

    }
}
