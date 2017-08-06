<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Log
 *
 * @author Jane Asher
 */
class Log {    
    public $logs = array();
    
    public function putLog($valor){
        $log = new stdClass();
        $log->texto = $valor;
        $log->data = new DateTime();
        array_push($this->logs, $log);
    }
    
    public function getLogs(){
        return $this->logs;
    }
}
