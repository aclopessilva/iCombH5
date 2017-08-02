<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class IComb {

    protected $CI;
    
    public function __construct() {
        // Assign the CodeIgniter super-object
        $this->CI = & get_instance();
    }
    public function iniciaDesenvolvimento($exercicio) {
        $desenvolvimento = new stdClass();  //classe generica, ainda nao definida.
        $desenvolvimento->exercicio = $exercicio;
        $desenvolvimento->incio = new DateTime();
        $desenvolvimento->estado = 'INICIADO';
        
        $this->saveSessao('desenvolvimento', $desenvolvimento);
    }

    
    

/**
 * FUNCOES DE UTILIDADE PARA ACESSAR A SESSAO
 */
    private function saveSessao($nome, $valor) {
        $this->CI->session->set_userdata($nome, $valor);
    }

    private function getSessao($nome) {
        $this->CI->session->userdata($nome);
    }

    private function deleteSessao($nome) {
        $this->CI->session->unset_userdata($nome);
    }

}
