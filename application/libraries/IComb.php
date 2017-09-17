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
        $desenvolvimento->log->putEntry('Iniciando desenvolvimento do exercicio '.$exercicio->id);

        //Iniciamos uma lista de estagios.
        //Essa lista vai conter os estagios que o usuario esta montando e foram validados ou em processo de validacao.
        $desenvolvimento->estagios = array();

        $this->saveSessao('desenvolvimento', $desenvolvimento);
    }

    /**
     * Prepara o objeto condicao com o $request e depois validamos a condicao.
     *
     * @param $request Request passado pelo usuario
     * @param array $chaves os registros que contem as chaves e a descricao das chaves
     * @return mixed Retorna um objeto contendo o necessario para mostrar na view.
     */
    public function validaCondicao($request, $chaves = array()) {
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
        $condicao->chaves = $chaves;

        if($request->numPropriedades == 1){

            $expressao =  new Expressao();
            $expressao->atributo = $request->atributo;
            // o $request->pertence pode vir como String ou seja "true", "false"
            // vamos transformar "true" como  booleano true
            if($request->pertence == "true"){
                $expressao->pertence = true;
            }else{
                $expressao->pertence = false;
            }

            $expressao->elementos = array();
            $expressao->elementos[] = $request->caracteristica;

            $condicao->addExpressao($expressao);

        }elseif ($request->numPropriedades == 2){

            $expressao =  new Expressao();
            $expressao->atributo = $request->atributo;
            // o $request->pertence pode vir como String ou seja "true", "false"
            // vamos transformar "true" como  booleano true
            if($request->pertence == "true"){
                $expressao->pertence = true;
            }else{
                $expressao->pertence = false;
            }
            $expressao->elementos = array();
            $expressao->elementos[] = $request->caracteristica;
            $condicao->addExpressao($expressao);


            $expressao2 =  new Expressao();
            $expressao2->atributo = $request->atributo2;
            // o $request->pertence2 pode vir como String ou seja "true", "false"
            // vamos transformar "true" como  booleano true
            if($request->pertence2 == "true"){
                $expressao2->pertence = true;
            }else{
                $expressao2->pertence = false;
            }
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

        //$desenvolvimento->log->putEntry('Usuario inicia validacao de condicao '. serialize($condicao));
        $desenvolvimento->log->putEntry('Foi iniciada uma validação da condição');

        $avaliador = $desenvolvimento->avaliador;

        //limpamos os estagios que o avalidaor possa ter guardado
        $avaliador->reset();
        //procuramos pelos estagios ja registrados e adicionamos ao avaliador;

        // esse bloco avalia um estagio criado comparando-o coma lista de estagios
        // existentes para determinar se eh valido (que nao seja repetido) ou nao
        foreach($desenvolvimento->estagios as $estagio){
            //NAO CONSIDERAMOS ESTAGIOS DELETADOS OU ESTAGIOS EM ESTADO RESTRICAO VALIDADA
            if($estagio->estado == 'DELETADO' || $estagio->estado == 'RESTRICAO_VALIDADA'){
                //  nao validamos de novo
            }else{
                $resposta_estagio = $avaliador->adicionaCondicao($estagio->condicao);
                if($resposta_estagio == 'ERROR'){
                    $desenvolvimento->log->putEntry('Condicao com ERRO mensagem: '. $resposta_estagio->mensagem );
                    $this->saveSessao('desenvolvimento', $desenvolvimento);
                    return $resposta_estagio;
                }
            }
        }


        //O objeto resposta contem o estado, mensagem e opcionalmente um objeto que contem o objeto validado.
        $resposta =  $avaliador->adicionaCondicao($condicao);
        if($resposta->estado == 'OK'){

            $estagio = new Estagio();
            $estagio->estado = 'RESTRICAO_VALIDADA';
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

            $desenvolvimento->log->putEntry('Condicao Validada sem erros');
            $this->saveSessao('desenvolvimento', $desenvolvimento);
        }else{
            // date_default_timezone_get('Brazil/Brazilian');
            // $date = date('dd/MM/YYYY HH:ii', time());
            $desenvolvimento->log->putEntry('Condicao adicionada com ERRO mensagem: '. $resposta->mensagem );
            $this->saveSessao('desenvolvimento', $desenvolvimento);
        }

        return $resposta;

    }

    public function getLogs(){
        $desenvolvimento = $this->getSessao('desenvolvimento');
        return $desenvolvimento->log->entries;
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
                        $desenvolvimento->log->putEntry('Deletou um estagio já validado! Estagio: '. $estagio_numero );
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

            $desenvolvimento->log->putEntry('Finalizou um estágio corretamente');

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

    function finalizaExercicio($relacionamento){

        $desenvolvimento = $this->getSessao('desenvolvimento');

        //calculamos o resultado do usuario
        $estagios = $desenvolvimento->estagios;


        $resultado_usuario = 0;
        if($relacionamento == "M"){
            $resultado_usuario = 1;
        }

        foreach ($estagios as $estagio){
            if($estagio->estado == "FINALIZADO") {
                $resultado_estagio = $estagio->formula->formula->calcula($estagio->formula->n, $estagio->formula->p);
                if ($relacionamento == "S") {
                    $resultado_usuario += $resultado_estagio;
                } else if ($relacionamento == "M") {
                    $resultado_usuario *= $resultado_estagio;
                }
            }
        }


        //pegamos resultado do exercicio
        $exercicio_solucao = $desenvolvimento->exercicio->solucao;
        $exercicio_solucao_exercicio = $exercicio_solucao->resultado;

        //comparamos os resultados
        if($exercicio_solucao_exercicio == $resultado_usuario){
            $resposta = new stdClass();
            $resposta->estado = "OK";
            $resposta->resultado = $resultado_usuario;
            return $resposta;
        }else{
            $resposta = new stdClass();
            $resposta->estado = "ERROR";
            $resposta->mensagem = "Resultado Incorreto!";
            return $resposta;
        }





        return $resposta;
    }
}
