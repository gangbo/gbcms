<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'base.php';
class Post extends Base {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->render('post.html', array('name' => 'Fabien'));
    }

}
