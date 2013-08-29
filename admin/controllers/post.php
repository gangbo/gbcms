<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post extends MY_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->render('post.html', array('name' => 'Fabien'));
    }

}
