<?php

/*
 * Classe de Logs que utiliza o "modelo" Entry para fazer entradas
 */

class Log {

    public $entries = array();

    public function putEntry($valor) {
        $log = new Entry();
        $log->texto = $valor;
        $log->data = new DateTime();
        array_push($this->entries, $log);
    }

}
