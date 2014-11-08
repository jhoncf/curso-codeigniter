<?php

/**
 * Noticias
 *
 * Projeto: CW-0
 * 
 * @since 08/11/2014
 * @author Jhonatas C. Faria
 */
class Noticias extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->template->set_template("templates/template");
    }

    public function index() {
        $this->template->load_view("noticias/index_view");
    }

}
