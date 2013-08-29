<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected  $twig;

    public function __construct(){
        parent::__construct();

        require_once FCPATH.'/vendor/autoload.php';
        $loader = new Twig_Loader_Filesystem(FCPATH.APPPATH.'views');
        $this->twig = new Twig_Environment($loader, array(
                'cache' => FCPATH.APPPATH.'cache',
                'debug' => true,
            )
        );
    }

    protected function initialize(){
    }

    protected function render($template,$data,$return=false){
        $data = array_merge(
            $data,
            array('staticfile'=>$this->config->item('staticfile'))
        );
        if($return)
            return $this->twig->render($template,$data);
        echo $this->twig->render($template,$data);
    }


}
