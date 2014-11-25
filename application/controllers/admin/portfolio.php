<?php

/**
 * portfolio
 *
 * Projeto:
 * 
 * @since 08/11/2014
 * @author Jhonatas C. Faria
 */
class Portfolio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata("logado") != TRUE) {
            redirect("admin/auth/login");
        }
        $this->load->library("image_crud");
        $this->template->set_template("templates/template_admin");
    }

    public function index() {
        $image = new image_CRUD();
        $image->set_table("portfolio"); //Define tabela do banco
        $image->set_title_field("titulo"); //Define o titulo da imagem
        $image->set_url_field("arquivo"); //Define o nome e extensão do arquivo
        $image->set_ordering_field("ordem"); //Ordem de exibição
        $image->set_image_path("assets/uploads"); //Diretório de upload
        
        $data['output'] = $image->render();
      
        $this->template->load_view("admin/crud_view", $data);
    }

}
