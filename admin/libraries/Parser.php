<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VP_Parser extends CI_Parser {


    protected function _parse(){
        $template = parent::_parse();
    }

    protected function _parse_function($tpl){
        return str_replace($this->l_delim.'='.$key.$this->r_delim, $val, $string);
    }
}
