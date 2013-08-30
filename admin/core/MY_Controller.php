<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    
    public function __construct(){
       parent::__construct(); 
    }

	function _render_page($view, $data=null, $render=false) {

		$this->viewdata = (empty($data)) ? $this->data: $data;
        $this->viewdata['BASE_URL'] = $this->config->item('base_url');
		$view_html = $this->load->view($view, $this->viewdata, $render);

		if (!$render) return $view_html;
	}
}
