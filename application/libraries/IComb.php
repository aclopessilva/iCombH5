<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include_once 'icomb/ICombClass.php';
include_once 'icomb/Avaliador.php';
include_once 'icomb/Universo.php';
include_once 'icomb/Solucao.php';
include_once 'icomb/Element.php';
include_once 'icomb/Condicao.php';
include_once 'icomb/Expressao.php';
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
        //$avaliador->init($universo, $solucao);
        
        //guardamos o estado do avaliador na sessao.
        $desenvolvimento->avaliador = $avaliador;
        
        $this->saveSessao('desenvolvimento', $desenvolvimento);
    }

    public function validaCondicao($numElementos, $atributo, $pertence, $caracteristica) {
        //recuperamos o desenvolvimento da sessao
        $desenvolvimento = $this->getSessao('desenvolvimento');
        
        
        /*
        //montando condicao enviado pelo aluno
        $condicao = new Condicao();
        $condicao->setQuantidade($numElementos);
        $expressao = new Expressao();
        $expressao->init($atributo, $pertence, array($caracteristica));
        $condicao->addExpressao($expresssao);
        */
        //Mandamos para o avaliador.
        
        
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
