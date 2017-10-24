<?php

/*
* Classe utilizada pelo IComb para transformar a Condicao (montada pelo usuario) em classe
 */


class Condicao {

    public $quantidade;
    public $expressoes = array();
    public $chaves = array();



    public function addExpressao($expressao) {


        if($expressao->pertence){
            $texto_pertence = "é";
        }else{
            $texto_pertence = "não é";
        }

        $texto_chave_desc = $this->getChaveDesc($expressao->atributo);
        $texto_elemento = $expressao->elementos[0];
        $expressao->texto = "O " . $texto_chave_desc . " ".$texto_pertence." ". $texto_elemento;

        array_push($this->expressoes,$expressao);
    }

    function getChaveDesc($chave_id){

        foreach ($this->chaves as $chave){
            if($chave->chave == $chave_id){
                return $chave->chave_desc;
            }
        }
        return null;
    }

    public function evaluate($element) {
        $result = true;
        foreach ($this->expressoes as $expressao) {
            //print_r($expressao);
            $result = $result && $expressao->evaluate($element);
            if (!$result) {
                break;
            }
        }
        return $result;
    }

}
