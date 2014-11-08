<?php

/**
 * home
 *
 * Projeto:
 * 
 * @since 07/11/2014
 * @author Jhonatas C. Faria
 */
class Home extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->template->set_template("templates/template");
    }
    
    public function index(){
        $this->template->load_view("home/index_view");
    }
}
