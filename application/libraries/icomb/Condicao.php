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
        array_push($this->expressoes,$expressao);
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
