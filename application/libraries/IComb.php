<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include_once 'icomb/ICombClass.php';
include_once 'icomb/Avaliador.php';
include_once 'icomb/Universo.php';
include_once 'icomb/Solucao.php';
include_once 'icomb/Element.php';
include_once 'icomb/Condicao.php';
include_once 'icomb/Expressao.php';
include_once 'icomb/RespostaDoAvaliador.php';
include_once 'icomb/Estagio.php';

include_once 'icomb/formula/FormulaFactory.php';
include_once 'icomb/formula/Potencia.php';
include_once 'icomb/formula/Arranjo.php';
include_once 'icomb/formula/Binomio.php';
include_once 'icomb/formula/Factorial.php';
include_once 'icomb/formula/Value.php';

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

        //1. o universo tem que ser uma classe com uma lista de elementos (Classe Elementos)
        $universo = new Universo();
        $universo = $universo->createFromBDObject($exercicio->universo);

        //print_r($universo);
        //2. A solucao tem que ter um array da classes de tipo condicao (que representam os estagios).
        $solucao = new Solucao();
        $solucao = $solucao->createFromBDObject($exercicio->solucao);

        //iniciamos o avaliador
        $avaliador = new Avaliador();
        $avaliador->init($universo, $solucao);

        //guardamos o estado do avaliador na sessao.
        $desenvolvimento->avaliador = $avaliador;

        $desenvolvimento->log = new Log();
        $desenvolvimento->log->putLog('Iniciando desenvolvimento');

        //Iniciamos uma lista de estagios.
        //Essa lista vai conter os estagios que o usuario esta montando e foram validados ou em processo de validacao.
        $desenvolvimento->estagios = array();

        $this->saveSessao('desenvolvimento', $desenvolvimento);
    }

    /**
     * Prepara o objeto condicao com o $request e depois validamos a condicao.
     *
     * @param $request Request passado pelo usuario
     * @return mixed Retorna um objeto contendo o necessario para mostrar na view.
     */
    public function validaCondicao($request) {
/*

        "condicao": {
            "quantidade": "1",
			"expressoes": [
                    {
                        "atributo": "value",
                        "pertence": "true",
                        "elementos": ["as"]
                    },
                    {
                        "atributo": "value",
                        "pertence": "true",
                        "elementos": ["as"]
                    }
        ]
		},
        */
        $condicao = new Condicao();
        $condicao->quantidade =$request->numElementos;

        if($request->numPropriedades == 1){

            $expressao =  new Expressao();
            $expressao->atributo = $request->atributo;
            $expressao->pertence = $request->pertence;
            $expressao->elementos = array();
            $expressao->elementos[] = $request->caracteristica;

            $condicao->addExpressao($expressao);

        }elseif ($request->numPropriedades == 2){

            $expressao =  new Expressao();
            $expressao->atributo = $request->atributo;
            $expressao->pertence = $request->pertence;
            $expressao->elementos = array();
            $expressao->elementos[] = $request->caracteristica;
            $condicao->addExpressao($expressao);


            $expressao2 =  new Expressao();
            $expressao2->atributo = $request->atributo2;
            $expressao2->pertence = $request->pertence2;
            $expressao2->elementos = array();
            $expressao2->elementos[] = $request->caracteristica2;
            $condicao->addExpressao($expressao2);
        }

        //aqui sera possivel retornar ou adaptar a resposta da validacao.
        //por enquanto somente retornamos o que o metodo verificaErro retorna.
        return $this->verificaErro($condicao);


    }


    /**
     * A validacao de condicao é delegada para a classe avalidador, que possui a logica de validacao no metodo "adicionaCondicao"
     *
     * @param $condicao
     * @return mixed
     */
    public function verificaErro($condicao){
        //TODO: verificar uso de booleano "corrige"


        $objeto_de_sessao = $this->getSessao('desenvolvimento');
        $desenvolvimento = $this->parseDesenvolvimento($objeto_de_sessao);

        $desenvolvimento->log->putLog('Usuario inicia validacao de condicao ' + serialize($condicao));

        $avaliador = $desenvolvimento->avaliador;
        //$avaliador->reset();
        //O objeto resposta contem o estado, mensagem e opcionalmente um objeto que contem o objeto validado.
        $resposta =  $avaliador->adicionaCondicao($condicao);
        if($resposta->estado == 'OK'){

            $estagio = new Estagio();
            $estagio->estado = "STEP-1";
            $estagio->numero = sizeof($desenvolvimento->estagios) + 1;
            /**
             * adicionamos a condicao validada para nosso objeto estagio (que sera armazenado na sessao)
             */
            $estagio->condicao = $resposta->condicao;
            /**
             * adicionamos os elementos selecionados durante a validacao e adicioamos para nosso objeto estagio
             */
            $estagio->elementos_selecionados = $resposta->elementos_selecionados;

            //armazenamos o estagio na lista de estagios, contendo somente a condicao validada
            $desenvolvimento->estagios[] = $estagio;

            $desenvolvimento->log->putLog('Condicao OK');
            $this->saveSessao('desenvolvimento', $desenvolvimento);
        }else{
            $desenvolvimento->log->putLog('Condicao ERRO mensagem: '+ $resposta->mensagem );
            $this->saveSessao('desenvolvimento', $desenvolvimento);
        }

        return $resposta;

    }

    public function eliminarEstagio($estagio_numero){
        $desenvolvimento = $this->getSessao('desenvolvimento');
        $lista_de_estagios = $desenvolvimento->estagios;
        $resposta = new stdClass();

        if(isset($lista_de_estagios) && sizeof($lista_de_estagios) > 0){
            foreach ($lista_de_estagios as $estagio){
                if($estagio->numero == $estagio_numero) {
                    if($estagio->estado == 'DELETADO'){
                        $resposta->estado = "ERROR";
                        $resposta->mensagem = "ja foi deletado";
                    }else{
                        $estagio->estado = 'DELETADO';
                        $this->saveSessao('desenvolvimento', $desenvolvimento);

                        $resposta->estado = "OK";
                        $resposta->mensagem = "Estagio deletado!";
                    }
                }
            }
        }

        if(!isset($resposta->estado)){
            $resposta->estado = "ERROR";
            $resposta->mensagem = "Estagio com numero ".$estagio_numero." não existe";
        }

        return $resposta;
    }

    public function validaEstagioAtual($request){

        $objeto_de_sessao = $this->getSessao('desenvolvimento');
        $desenvolvimento = $this->parseDesenvolvimento($objeto_de_sessao);

        //obtemos a formula
        $formulaFactory = new FormulaFactory();
        $formula = $formulaFactory->createFormulaByName($request->formula);


        //montamos o objeto que contem a formula e os valores
        $formularequest = new stdClass();
        $formularequest->formula = $formula;
        $formularequest->n = $request->n;
        $formularequest->p = $request->p;


        //pegamos o ultimo estagio (normalmente em desenvolvimento)
        $estagio = end($desenvolvimento->estagios);

        //validamos a formula
        $resposta = $desenvolvimento->avaliador->deteccaoDeErroFormula($estagio->condicao, $formularequest);

        if($resposta->estado == 'OK') {
            //modificamos os valores do estagio
            $estagio->estado = "FINALIZADO";
            $estagio->formula = $resposta->objeto;

            //armazenamos o estagio na lista de estagios, incluindo a formula validada.
            $desenvolvimento->estagios[sizeof($desenvolvimento->estagios) - 1] = $estagio;
            $this->saveSessao('desenvolvimento', $desenvolvimento);

            //para uma resposta mas clara, retiramos a resposta do avaliador e colocamos o estagio.
            unset($resposta->objeto);
            $resposta->estagio = $estagio;
        }

        return $resposta;
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
        foreach ($desenvolvimento->estagios as $estagio){
            $this->fixObject($estagio);
        }
        return $desenvolvimento;
     }
     
    function fixObject(&$object) {
        if (!is_object($object) && gettype($object) == 'object')
            return ($object = unserialize(serialize($object)));
        return $object;
    }

}
