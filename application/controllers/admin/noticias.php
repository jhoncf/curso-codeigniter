<?php

/**
 * noticias
 *
 * Projeto:
 * 
 * @since 25/10/2014
 * @author Jhonatas C. Faria
 */
class Noticias extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata("logado") != TRUE) {
            redirect("admin/auth/login");
        }
        $this->template->set_template('templates/template_admin');
        $this->load->library("grocery_crud");
    }

    public function index() {
        $crud = new Grocery_CRUD();

        $crud->set_table("noticias");
        $crud->set_relation('id_categoria', 'noticias_categorias', 'nome_categoria');
        $crud->display_as("id_categoria", "Categoria");
        $crud->required_fields("titulo", "capa", "data", "texto", "id_categoria");
        $crud->set_field_upload("capa", "assets/uploads/");
        $crud->field_type("titulo", "password");
        $data["output"] = $crud->render();

        $this->template->load_view("admin/crud_view", $data);
    }

    public function categorias() {
        $crud = new Grocery_CRUD();

        $crud->set_table("noticias_categorias");

        $data["output"] = $crud->render();

        $this->template->load_view("admin/crud_view", $data);
    }

}
