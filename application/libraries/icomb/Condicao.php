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
class Condicao {

    //put your code here
    public $quantidade;
    public $expressoes = array();


    public function addExpressao($expresssao) {
        array_push($this->expressoes, $expresssao);
    }

    public function evaluate($element) {
        $result = true;
        foreach ($this->expressoes as $expressao) {
            $result = $result && $expressao->evaluate($element);
            if (!$result) {
                break;
            }
        }
        return $result;
    }

}
