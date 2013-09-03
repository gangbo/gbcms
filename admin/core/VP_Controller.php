<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class VP_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }


    protected function render_page($view, $data=null) {
        $this->load->library('csmarty');
        $data = array_merge($data, $this->config_var());
        $this->csmarty->assign($data);
        $this->csmarty->display($view);
    }

    private function config_var() {
        $data = array();
        $data['base_url']   = $this->config->base_url();
        $data['system_url'] = $this->config->system_url();
        $data['site_url']   = $this->config->site_url();
        $data['static_file_url'] = $this->config->item('static_file_url')?
            $this->config->item('static_file_url'):$data['base_url'].APPPATH;
        return $data;
    }

    protected function render_by_layout($view, $data=null){
        $this->render_page("extends:layout.tpl|$view",$data);
    }

}
