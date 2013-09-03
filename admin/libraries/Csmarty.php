<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require FCPATH.APPPATH.'Smarty-3.1.14/libs/Smarty.class.php';
class Csmarty extends Smarty {

    public function __construct(){
        parent::__construct();
        $this->setTemplateDir(FCPATH.APPPATH.'/views/');
        $this->setCompileDir(FCPATH.APPPATH.'cache/templates_c/');
        $this->setCacheDir(FCPATH.APPPATH.'cache/cache');
        $this->compile_check = true;

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->resisterFunction();
    }

    public function resisterFunction(){
        $CI =& get_instance();
        $CI->load->helper('url');
        $this->registerPlugin("function","t_anchor", "t_anchor");
    }
}
