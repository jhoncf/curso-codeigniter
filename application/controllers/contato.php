<?php

/**
 * contato
 *
 * Projeto:
 * 
 * @since 08/11/2014
 * @author Jhonatas C. Faria
 */
class Contato extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library("custom_library");
        $this->template->set_template("templates/template");
    }

    public function index() {
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[255]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[255]');
        $this->form_validation->set_rules('assunto', 'Assunto', 'required|max_length[255]');
        $this->form_validation->set_rules('mensagem', 'Mensagem', 'required|max_length[255]');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $this->template->load_view('contato/index_view');
        } else { // passed validation proceed to post success logic
            $nome = set_value('nome');
            $email = set_value("email");
            $assunto = set_value("assunto");
            $mensagem = "Mensagem de: $nome <br><br> " . set_value("mensagem");

            if ($this->custom_library->send_mail($assunto, $mensagem, $nome, $email, "jhonatas.cf@gmail.com") == TRUE) {
                $this->session->set_flashdata("message", "Contato com enviado com sucesso!");
                redirect('contato');   // or whatever logic needs to occur
            } else {
                $this->session->set_flashdata("message", "Erro ao enviar o email");
                redirect("contato");
                // Or whatever error handling is necessary
            }
        }
    }

}
