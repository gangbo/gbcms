<?php
class Mysql extends PDO{
    private $conn;
    public function __construct($db_str,$db_user,$db_pwd){
        try{
            $dbh = parent::__construct($db_str,$db_user,$db_pwd);

        }catch(PDOException $e){
            var_dump($e);
            die('数据库连接失败');
        }
    }

}
