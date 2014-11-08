<?php

/**
 * usuarios
 *
 * Projeto:
 * 
 * @since 04/10/2014
 * @author Jhonatas C. Faria
 */
class usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->template->set_template("templates/template");
        $this->load->model("usuarios_model");
        $this->load->library("form_validation");
    }

    public function index() {
        $data['result'] = $this->usuarios_model->find()->result();
        $this->template->load_view("usuarios/index-view", $data);
    }

    public function create() {
        $this->form_validation->set_rules("login", "Login", "required|max_length[255]");
        $this->form_validation->set_rules("senha", "Senha", "required|max_length[255]");

        if ($this->form_validation->run() == FALSE) {
            $this->template->load_view("usuarios/create-view");
        } else {
            $data_form = array(
                "login" => $this->input->post("login"),
                "senha" => md5($this->input->post("senha"))
            );

            if ($this->usuarios_model->save($data_form) == TRUE) {
                redirect("usuarios");
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

}
