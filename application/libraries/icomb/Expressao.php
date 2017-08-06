<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Expressao
 *
 * @author Jane Asher
 */
class Expressao extends ICombClass{

    //put your code here
    public $atributos;
    public $pertence = false;
    public $caracteristicas = array();
        
    public function evaluate($element) {
        $ret = false;
        if (array_search($element->getAttribute($this->atributos), $this->caracteristicas)) {
            $ret = true;
        } else {
            $predicates = $element->getPredicates($this->atributos);
            if ($predicates != null) {                
                foreach ($predicates as $predicate){
                    if(!array_search($predicate, $this->caracteristicas)){
                        $ret = true;
                        break;
                    }
                }
            }
        }

        if ($this->belong) {
            return $ret;
        } else {
            return !$ret;
        }
    }

}
