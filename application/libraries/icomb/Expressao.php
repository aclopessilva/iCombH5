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
    public $atributo;
    public $pertence = false;
    public $elementos = array();
        
    public function evaluate($element) {
        $ret = false;
        //print_r($element);
        //echo "\n\n";
        //echo "this->elementos";
        //print_r($this->elementos);
        //echo "\n\n";
        $key =  $element->attributes[$this->atributo];
        //echo "key";
        //print_r($key);
        //echo "\n\n";
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
