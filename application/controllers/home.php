<?php

/**
 * home
 *
 * Projeto:
 * 
 * @since 04/10/2014
 * @author Jhonatas C. Faria
 */
class home extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->template->set_template("templates/template");
    }
    
    public function index(){
        $this->template->load_view("home/index-view");
    }
}
