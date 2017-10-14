<?php
class Value extends Formula
{
    public $nome = 'Valor';
    public $notacao = 'n';

    public function calcula($n, $p = null){
        return $n;
    }
}