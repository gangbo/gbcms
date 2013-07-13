<?php
include APP_DIR.'/controller/Base.class.php';
class Login extends Base {

    public function __construct(){
        $this->is_require_login = false;
        parent::__construct();
    }

    public function index_fun(){
        $tpl = new SmartyConfig();
//        $tpl->assign('warning','用户名或密码错误');
        $tpl->display('login.tpl');
        //$db = DB::getDB();
        var_dump($_POST);
    }
}
