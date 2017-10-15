<?php

class Potencia extends Formula
{

    public $nome = 'Potencia';
    public $notacao = 'n^p';

    public function calcula($n, $p){
        return pow($n,$p);
    }
}