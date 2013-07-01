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
        $db = DB::getDB();
        foreach ($db->query('SELECT * from cds') as $row) {
            print_r($row);
        }
        var_dump($db);
    }
}
