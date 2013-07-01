<?php
include 'system/Mysql.class.php';
class DB {
    private $dbh;
    private static $instance;
    public function __construct(){
        $this->dbh = new Mysql(DB_STR,DB_USER,DB_PWD);
    }
    public static function getDB(){
        if(!self::$instance){
            self::$instance = new DB();
        }
        return self::$instance;
    }
    public function query($sql){
        return $this->dbh->query($sql);
    }
    public function execute($sql,$arr){
        $sth = $this->dbh->prepare($sql);
        $sth->execute($arr);
        $results = $sth->fetchAll();
        return $results;
    }
}
