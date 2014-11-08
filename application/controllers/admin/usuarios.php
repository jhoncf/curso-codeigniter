<?php

/**
 * usuarios
 *
 * Projeto:
 * 
 * @since 04/10/2014
 * @author Jhonatas C. Faria
 */
class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata("logado") != TRUE) {
            redirect("auth/login");
        }
        $this->template->set_template("templates/template_admin");
        $this->load->model("usuarios_model");
        $this->load->library("form_validation");
    }

    public function index() {
        $data['result'] = $this->usuarios_model->find()->result();
        $this->template->load_view("admin/usuarios/index-view", $data);
    }

    public function create() {
        $this->form_validation->set_rules("login", "Login", "required|max_length[255]|min_length[8]|is_unique[usuarios.login]");
        $this->form_validation->set_rules("senha", "Senha", "required|max_length[255]");
        
        if ($this->form_validation->run() == FALSE) {
            $this->template->load_view("admin/usuarios/create-view");
        } else {
            $data_form = array(
                "login" => $this->input->post("login"),
                "senha" => md5($this->input->post("senha"))
            );

            if ($this->usuarios_model->save($data_form) == TRUE) {
                redirect("usuarios");
            } else {
                
            }
        }
    }

    public function edit() {
        $id = $this->uri->segment(3);

        $this->form_validation->set_rules("login", "Login", "required|max_length[255]");
        $this->form_validation->set_rules("senha", "Senha", "required|max_length[255]");

        if ($this->form_validation->run() == FALSE) {
            $data["result"] = $this->usuarios_model->find($id)->row();
            $this->template->load_view("usuarios/edit-view", $data);
        } else {
            $data_form = array(
                "login" => $this->input->post("login"),
                "senha" => md5($this->input->post("senha"))
            );

            if ($this->usuarios_model->update($id, $data_form)) {
                redirect("usuarios");
            }
        }
    }

    public function delete() {
        $id = $this->uri->segment(3) ? $this->uri->segment(3) : redirect("usuarios");
        $this->usuarios_model->delete($id);
        redirect("usuarios");
    }
    
    public function crud(){
        $this->load->library("grocery_crud");
        
        $crud = new Grocery_CRUD();
        
        $crud->set_table("usuarios");
        
        $data["output"] = $crud->render();
        
        $this->template->load_view("crud_view", $data);
    }

}
