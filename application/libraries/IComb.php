<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include_once 'icomb/ICombClass.php';
include_once 'icomb/Avaliador.php';
include_once 'icomb/Universo.php';
include_once 'icomb/Solucao.php';
include_once 'icomb/Element.php';
include_once 'icomb/Condicao.php';
include_once 'icomb/Expressao.php';
include_once 'icomb/Log.php';

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

        //iniciando avaliador
        $avaliador = new Avaliador();
        //1. o universo tem que ser uma classe com uma lista de elementos (Classe Elementos)
        $universo = new Universo();
        $universo = $universo->createFromBDObject($exercicio->universo);

        //print_r($universo);
        //2. A solucao tem que ter um array da classes de tipo condicao (que representam os estagios).
        $solucao = new Solucao();
        $solucao = $solucao->createFromBDObject($exercicio->solucao);

        //print_r($solucao);
        //iniciamos o avaliador
        $avaliador->init($universo, $solucao);
        //guardamos o estado do avaliador na sessao.
        $desenvolvimento->avaliador = $avaliador;

        $desenvolvimento->log = new Log();
        $desenvolvimento->log->putLog('Iniciando desenvolvimento');

        $this->saveSessao('desenvolvimento', $desenvolvimento);
    }

    public function validaCondicao($condicao) {
        //recuperamos o desenvolvimento da sessao
        $desenvolvimento = $this->parseDesenvolvimento($this->getSessao('desenvolvimento'));
        
    }

    /**
     * FUNCOES DE UTILIDADE PARA ACESSAR A SESSAO
     */
    private function saveSessao($nome, $valor) {
        $this->CI->session->set_userdata($nome, $valor);
    }

    private function getSessao($nome) {
        return $this->CI->session->userdata($nome);
    }

    private function deleteSessao($nome) {
        $this->CI->session->unset_userdata($nome);
    }

    private function parseDesenvolvimento($desenvolvimento){
        $this->fixObject($desenvolvimento->exercicio);
        $this->fixObject($desenvolvimento->avaliador);
        $this->fixObject($desenvolvimento->log);
        return $desenvolvimento;
     }
     
    function fixObject(&$object) {
        if (!is_object($object) && gettype($object) == 'object')
            return ($object = unserialize(serialize($object)));
        return $object;
    }

}
