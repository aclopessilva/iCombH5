<?php

/*
* Classe utilizada pelo IComb para transformar a Expressao (montada pelo usuario) em classe,
 * e seu metodo avalia se o elemento cumpre com uma determinada condicao
 */

class Expressao {

    //put your code here
    public $atributo;
    public $pertence = false;
    public $elementos = array();
        
    public function evaluate($element) {
        $ret = false;
        $key =  $element->attributes[$this->atributo];
        if (array_search($key, $this->elementos)!==false) {
            $ret = true;
        } else {
            $predicates = $element->getPredicates($this->atributo);
            if (isset($predicates)) {
                foreach ($predicates as $predicate){
                    if( $predicate != "") {
                        if(!array_search($predicate, $this->elementos)){
                            $ret = true;
                            break;
                        }
                    }
                }
            }
        }

        if ($this->pertence) {
            return $ret;
        } else {
            return !$ret;
        }
    }

}
