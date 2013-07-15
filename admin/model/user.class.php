<?php
include 'system/GBModel.class.php';
class User extends GBModel {

    public function  __construct(){
        parent::__construct();
    }

    public function getUserByIdPwd($username,$password){
        $sql = 'SELECT * FROM users WHERE user_login=? and user_pass=?';
        $this->dbh->fetchRow($sql,array($username,$password));
    }

    public function getUserById($user_id){
        $sql = 'SELECT * FROM users WHERE id=?';
        return $this->dbh->fetchRow($sql,array($user_id));
    }

}
