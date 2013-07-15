<?php
include APP_DIR.'/controller/Base.class.php';
include APP_DIR.'/model/user.class.php';
class Login extends Base {

    public function __construct(){
        $this->is_require_login = false;
        parent::__construct();
    }

    public function index_fun(){
        $tpl = new SmartyConfig();
        $tpl->assign('warning','用户名或密码错误');
        $tpl->assign('static_file_dir',STATIC_FILE_DIR);
        $tpl->display('login.tpl');
        $user_model = new User();
        $user = $user_model->getUserById(1);
        var_dump($user);
    }
}
