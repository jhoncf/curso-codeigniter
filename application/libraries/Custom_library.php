<?php

/**
 * Custom_library
 *
 * Projeto:
 * 
 * @since 08/11/2014
 * @author Jhonatas C. Faria
 */
class Custom_library {

    private $ci;

    public function __construct() {
        $this->ci = & get_instance();
    }

    /**
     * function send_mail
     * 
     * Envia email por protocolo SMTP
     * 
     * @param string $title
     * @param string $message
     * @param string $from_name
     * @param string $from
     * @param string $to
     * @return boolean
     */
    public function send_mail($title, $message, $from_name, $from, $to, $attachment = '') {
        $this->ci = &get_instance();
        $config = Array(
            'protocol' => 'smtp', //Mude para SMTP se o servidor der suporte
            'smtp_host' => "smtp.gmail.com",
            'smtp_port' => 587,
            'smtp_user' => "seu.email@gmail.com",
            'smtp_pass' => "[sua-senha]",
            'mailtype' => 'html',
            'newline' => "\r\n",
            'charset' => 'UTF-8'
        );
        $this->ci->load->library('email', $config);
        $this->ci->email->from($from, $from_name);
        $this->ci->email->to($to);
        $this->ci->email->subject($title);
        $this->ci->email->message($message);
        if ($attachment) {
            $this->ci->email->attach($attachment);
        }
        if ($this->ci->email->send()) {
            return true;
        } else {
            echo $this->ci->email->print_debugger();
            return false;
        }
    }

}
