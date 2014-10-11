<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Template
 *
 * @author Jhonatas Camargo
 * @copyright (c) Webzero - 2013 (www.webzero.com.br)
 * @since 01/11/2013
 */

class Template {

    private $template;
    private $CI;

    public function set_template($name) {
        $this->template = $name;
    }

    public function load_view($view, $view_data = array(), $return = FALSE) {
        $this->CI = & get_instance();
        $view_data['contents'] = $this->CI->load->view($view, $view_data, TRUE);
        return $this->CI->load->view($this->template, $view_data, $return);
    }

}
