<?php

/**
 * home
 *
 * Projeto:
 * 
 * @since 04/10/2014
 * @author Jhonatas C. Faria
 */
class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata("logado") != TRUE){
            redirect("admin/auth/login");
        }
        $this->template->set_template("templates/template_admin");
    }

    public function index() {
        $this->template->load_view("admin/home/index-view");
    }

    public function exemplo() {
        $this->load->helper("date_format");
        $data = date("d/m/Y");
        $data_mysql = date("Y-m-d");

        echo "Formato MYSQL: " . date_br_to_mysql($data);

        echo "<br>Formato BR: " . date_mysql_to_br($data_mysql);
    }

}
