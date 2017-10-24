<?php

/*
 * Classe utilizada pelo Universo para transformar os objetos do ElementoModel em classes Elemento, para o entendimento do IComb
 */

class Element {

    public $id;
    public $name;
    public $attributes; //array de strings
    public $predicates; //array de strings
    public $imagem;

    public function getPredicates($nameOfAttribute) {
        return $this->predicates[$nameOfAttribute];
    }

    public function getAttribute($nameOfAttribute) {
        return $this->attributes[$nameOfAttribute];
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function addAttribute($type, $attribute, $arrPred = null) {
        $this->attributes[$type] = $attribute;
        if ($arrPred != null) {
            $this->predicates[$type] = $arrPred;
        }
    }

}
