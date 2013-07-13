<?php
class Base {

    protected $is_require_login = true;

    public function __construct(){
        session_start();
        if($this->is_require_login && $this->login_member()){
            die('you must login');
        }
    }

    public function login_member(){
        return $_SESSION['member_id'];
    }

}
