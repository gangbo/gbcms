<?php
include 'system/db.class.php';
class GBModel {
    protected $dbh;

    public function __construct(){
        $this->dbh = DB::getDB();
    }

}
