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
        $this->load->model("noticias_model");
        $this->load->library("pagination");
    }

    public function index() {
        $maximo = 1;
        $limite = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
        $config['base_url'] = site_url() . 'noticias/index/';
        $config['total_rows'] = $this->noticias_model->find()->num_rows();
        $config['per_page'] = $maximo;
        $config['uri_segment'] = 3;
        $config['next_link'] = '>';
        $config["prev_link"] = "<";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $data['result_noticias'] = $this->noticias_model->find($maximo, $limite)->result();
        $this->template->load_view("noticias/index_view", $data);
    }

}
