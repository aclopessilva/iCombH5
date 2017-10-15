<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include_once 'icomb/Desenvolvimento.php';
include_once 'icomb/Avaliador.php';
include_once 'icomb/Universo.php';
include_once 'icomb/Solucao.php';
include_once 'icomb/Element.php';
include_once 'icomb/Condicao.php';
include_once 'icomb/Expressao.php';
include_once 'icomb/RespostaDoAvaliador.php';
include_once 'icomb/Estagio.php';

include_once 'icomb/FormulaRequest.php';
include_once 'icomb/formula/Formula.php';
include_once 'icomb/formula/FormulaFactory.php';
include_once 'icomb/formula/Potencia.php';
include_once 'icomb/formula/Arranjo.php';
include_once 'icomb/formula/Binomio.php';
include_once 'icomb/formula/Fatorial.php';
include_once 'icomb/formula/Value.php';

include_once 'icomb/Log.php';
include_once 'icomb/Entry.php';
include_once 'icomb/Sessao.php';

class IComb {

    public $sessao;

    public function __construct()
    {
        $this->sessao = new Sessao();
    }

    public function iniciaDesenvolvimento($icomb_exercicio) {
        $desenvolvimento = new Desenvolvimento();
        $desenvolvimento->exercicio = $icomb_exercicio->exercicio;
        $desenvolvimento->exercicio->solucao = $icomb_exercicio->solucao;
        $desenvolvimento->inicio = new DateTime();
        $desenvolvimento->estado = 'INICIADO';
        $desenvolvimento->erros_formula = 0;
        $desenvolvimento->acertos_formula = 0;
        $time = date('d/m h:i A');
        //1. o universo tem que ser uma classe com uma lista de elementos (Classe Elementos)
        $universo = new Universo();
        $universo = $universo->createFromBDObject($icomb_exercicio->universo);

        //print_r($universo);
        //2. A solucao tem que ter um array da classes de tipo condicao (que representam os estagios).
        $solucao = new Solucao();
        $solucao = $solucao->createFromBDObject($icomb_exercicio->solucao);

        //iniciamos o avaliador
        $avaliador = new Avaliador();
        $avaliador->init($universo, $solucao);

        //guardamos o estado do avaliador na sessao.
        $desenvolvimento->avaliador = $avaliador;

        $desenvolvimento->log = new Log();
        $desenvolvimento->log->putEntry($time.' - Iniciando desenvolvimento do exercicio '.$icomb_exercicio->exercicio->id);

        //Iniciamos uma lista de estagios.
        //Essa lista vai conter os estagios que o usuario esta montando e foram validados ou em processo de validacao.
        $desenvolvimento->estagios = array();

        $this->sessao->saveDesenvolvimento( $desenvolvimento);
    }

    /**
     * Prepara o objeto condicao com o $request e depois validamos a condicao.
     *
     * @param $request Request passado pelo usuario
     * @param array $chaves os registros que contem as chaves e a descricao das chaves
     * @return mixed Retorna um objeto contendo o necessario para mostrar na view.
     */
    public function validaCondicao($request, $chaves = array()) {

        $condicao = $this->preparaCondicaoParaAvaliacao($request, $chaves);

        //aqui sera possivel retornar ou adaptar a resposta da validacao.
        //por enquanto somente retornamos o que o metodo verificaErro retorna.

        //TODO: verificar uso de booleano "corrige"
        $time = $time = date('d/m h:i A');
//
//        $objeto_de_sessao = $this->sessao->getDesenvolvimento();
//        $desenvolvimento = $this->parseDesenvolvimento($objeto_de_sessao);

        $desenvolvimento = $this->sessao->getDesenvolvimento();

        //$desenvolvimento->log->putEntry('Usuario inicia validacao de condicao '. serialize($condicao));
        $desenvolvimento->log->putEntry($time.' - Foi iniciada uma validação da condição');

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
                    $desenvolvimento->log->putEntry($time.' - Condicao com ERRO mensagem: '. $resposta_estagio->mensagem );
                    $this->sessao->saveDesenvolvimento( $desenvolvimento);
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

            $desenvolvimento->log->putEntry($time.' - Condicao Validada sem erros');
            $this->sessao->saveDesenvolvimento( $desenvolvimento);
        }else{
            // date_default_timezone_get('Brazil/Brazilian');
            // $date = date('dd/MM/YYYY HH:ii', time());
            $desenvolvimento->log->putEntry($time.' - Condicao adicionada com ERRO mensagem: '. $resposta->mensagem );
            $this->sessao->saveDesenvolvimento( $desenvolvimento);
        }

        return $resposta;

    }

    private function preparaCondicaoParaAvaliacao($request, $chaves){
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

        return $condicao;
    }



    public function getLogs(){
        $desenvolvimento = $this->sessao->getDesenvolvimento();
        return $desenvolvimento->log->entries;
    }

    public function eliminarEstagio($estagio_numero){
        $time = $time = date('d/m h:i A');
        $desenvolvimento = $this->sessao->getDesenvolvimento();
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
                        $this->sessao->saveDesenvolvimento( $desenvolvimento);

                        $resposta->estado = "OK";
                        $resposta->mensagem = "Estagio deletado!";
                        $desenvolvimento->acertos_formula--;
                        $desenvolvimento->log->putEntry($time.' - Deletou um estagio já validado! Estagio: '. $estagio_numero );
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
        $time = $time = date('d/m h:i A');
//        $objeto_de_sessao = $this->sessao->getDesenvolvimento();
//        $desenvolvimento = $this->parseDesenvolvimento($objeto_de_sessao);

        $desenvolvimento = $this->sessao->getDesenvolvimento();

        //obtemos a formula
        $formulaFactory = new FormulaFactory();
        $formula = $formulaFactory->createFormulaByName($request->formula);


        //montamos o objeto que contem a formula e os valores
        $formularequest = new FormulaRequest();
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
            $this->sessao->saveDesenvolvimento( $desenvolvimento);

            $desenvolvimento->acertos_formula++;
            $desenvolvimento->log->putEntry($time.' - Finalizou um estágio corretamente');

            //para uma resposta mais clara, retiramos a resposta do avaliador e colocamos o estagio.
            unset($resposta->objeto);
            $resposta->estagio = $estagio;
        }else{
            $desenvolvimento->erros_formula++;
            $this->sessao->saveDesenvolvimento( $desenvolvimento);
        }

        return $resposta;
    }

//    private function parseDesenvolvimento($desenvolvimento){
//        $this->fixObject($desenvolvimento->exercicio);
//        $this->fixObject($desenvolvimento->avaliador);
//        $this->fixObject($desenvolvimento->log);
//        foreach ($desenvolvimento->estagios as $estagio){
//            $this->fixObject($estagio);
//        }
//        return $desenvolvimento;
//     }
//
//    function fixObject(&$object) {
//        if (!is_object($object) && gettype($object) == 'object')
//            return ($object = unserialize(serialize($object)));
//        return $object;
//    }

    function finalizaExercicio($relacionamento){

        $desenvolvimento = $this->sessao->getDesenvolvimento();

        //calculamos o resultado do usuario
        $estagios = $desenvolvimento->estagios;

        //deixar um comentario p/ entender essa logica aqui
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

        //motando objeto de resposta
        $resposta = new stdClass();
        if($relacionamento == 'S'){
            $resposta->relacionamento = "Soma";
        } else{
            $resposta->relacionamento = "Multiplicação";
        }

        $resposta->resultado = $resultado_usuario;

        //comparamos os resultados
        if($exercicio_solucao_exercicio == $resultado_usuario){
            $resposta->estado = "OK";

            $desenvolvimento->fim = new DateTime();
            $desenvolvimento->estado = 'FINALIZADO';

            $time = $time = date('d/m h:i A');
            $desenvolvimento->log->putEntry($time.' - Finalizou exercicio com sucesso');

        }else{
            $resposta->estado = "ERROR";
            $resposta->mensagem = "Resultado Incorreto!";

            $time = $time = date('d/m h:i A');
            $desenvolvimento->log->putEntry($time.' - Finalizou exercicio com erro');
        }

        $desenvolvimento->resposta = $resposta;
        $this->sessao->saveDesenvolvimento( $desenvolvimento);

        return $resposta;
    }

    public function getDuracaoExercicio(){
        $desenvolvimento = $this->sessao->getDesenvolvimento();
        if($desenvolvimento->estado == 'FINALIZADO'){
            $datetime1 = $desenvolvimento->inicio;
            $datetime2 = $desenvolvimento->fim;
            $interval = date_diff($datetime1, $datetime2);

            $total = ((($interval->y * 365.25 + $interval->m * 30 + $interval->d) * 24 + $interval->h) * 60 + $interval->i)*60 + $interval->s;

           return $interval;
            //return $interval->format('%h:%i:%s');
        }else{
            return 0;
        }
    }

    
    /*************************************
     * METODOS PARA GERAR A TELA DE INDICADORES
     **************************************/
    
    
    public function getQuantidadeErroEstagio(){
        $desenvolvimento = $this->sessao->getDesenvolvimento();
        return $desenvolvimento->erros_formula;
    }

    public function getQuantidadeAcertosEstagio(){
        $desenvolvimento = $this->sessao->getDesenvolvimento();
        return $desenvolvimento->acertos_formula;
    }
    
    public function coletaEstagiosCorretos(){
        $desenvolvimento = $this->sessao->getDesenvolvimento();
        $estagios = $desenvolvimento->estagios;
        
        $estagiosCorretos = array();
        foreach ($estagios as $estagio){
            if($estagio->estado == 'FINALIZADO'){
                $estagiosCorretos[] =  $estagio;
            }
        }
        return $estagiosCorretos;
    }
    
    public function coletaResultadoFinal(){
        $desenvolvimento = $this->sessao->getDesenvolvimento();
        return $desenvolvimento->resposta->resultado;
    }
    
    public function relacionamentoResultadoFinal(){
        $desenvolvimento = $this->sessao->getDesenvolvimento();        
        return $desenvolvimento->resposta->relacionamento;
        
    }

    public function obtemExercicioResolvido(){
        $desenvolvimento = $this->sessao->getDesenvolvimento();        
        return $desenvolvimento->exercicio;
    }

}
