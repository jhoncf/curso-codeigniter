<?php

/**
 * auth
 *
 * Projeto:
 * 
 * @since 11/10/2014
 * @author Jhonatas C. Faria
 */
class Auth extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper("form");
        $this->load->library("form_validation");
        $this->load->model("usuarios_model");
    }
    
    public function index(){
        redirect("admin/auth/login");
    }
    
    public function login(){
        $this->form_validation->set_rules('login', 'Login', "required|max_length[255]|trim|xss_clean");
        $this->form_validation->set_rules("senha", "Senha", "required|max_length[255]|trim|xss_clean");
        
        $data = array();
        
        if($this->form_validation->run() == TRUE){
            if($this->usuarios_model->verifica_usuario($this->input->post("login"), $this->input->post("senha")) == 1){
                $this->session->set_userdata(array("logado" => TRUE));
                redirect("admin/home");
            }else{
                $data['errors'] = "Login ou senha inválida!";
            }
        }
        $this->load->view("admin/auth/login-view", $data);
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect("auth/login");
    }
}
