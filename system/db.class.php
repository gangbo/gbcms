<?php
include 'system/Mysql.class.php';
class DB {

    private $dbh;
    private static $instance;

    private function __construct(){
        $this->dbh = new Mysql(DB_STR,DB_USER,DB_PWD);
    }

    public static function getDB(){
        if(!self::$instance){
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function execute($sql,$arr){
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($arr);
    }

    public function fetchRow($sql,$arr){
        $sth = $this->dbh->prepare($sql);
        $sth->execute($arr);
        return $sth->fetch();
    }

    public function fetchAll($sql,$arr){
        $sth = $this->dbh->prepare($sql);
        $sth->execute($arr);
        return $sth->fetchAll();
    }

}
