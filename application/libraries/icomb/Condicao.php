<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Condicao
 *
 * @author Jane Asher
 */
class Condicao extends ICombClass{

    public $quantidade;
    public $expressoes = array();



    public function addExpressao($expressao) {


        if($expressao->pertence){
            $texto_pertence = "é";
        }else{
            $texto_pertence = "não é";
        }

        $texto_chave_desc = ""; //$this->getChaveDesc($expressao->atributo);
        $texto_elemento = $expressao->elementos[0];
        $expressao->texto = "O " . $texto_chave_desc . " ".$texto_pertence." ". $texto_elemento;

        array_push($this->expressoes,$expressao);
    }

    function getChaveDesc($chave){

        //PEGAR DA BD
        $depara = array();
        $chave1 = array("value" => "Valor");
        $chave2 = array("suit" => "Naipe");
        array_push($depara, $chave1);
        array_push($depara, $chave2);

        foreach ($depara as $deparakey => $deparavalue){
            if($deparakey == $chave){
                return $deparavalue[$chave];
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
