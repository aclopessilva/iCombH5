<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Element {

    //put your code here

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
