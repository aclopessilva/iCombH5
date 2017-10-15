<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Log {
    public $entries = array();
    
    public function putEntry($valor){
        $log = new Entry();
        $log->texto = $valor;
        $log->data = new DateTime();
        array_push($this->entries, $log);
    }
}
