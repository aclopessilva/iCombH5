<?php

/*
 * Classe de Sessao que é "gestionada" pelo framework
 */

class Sessao {

    protected $CI;

    public function __construct() {
        // Assign the CodeIgniter super-object
        $this->CI = & get_instance();
    }

    public function saveDesenvolvimento($valor) {
        $this->CI->session->set_userdata('desenvolvimento', $valor);
    }

    public function getDesenvolvimento() {
        return $this->CI->session->userdata('desenvolvimento');
    }

    public function deleteDesenvolvimento() {
        $this->CI->session->unset_userdata('desenvolvimento');
    }

}
