<?php

class Fatorial
{
    public $nome = 'Fatorial';
    public $notacao = 'p!';

    public function calcula($n){
        $fatorial = 1;
        for ($x=$n; $x>=1; $x--)
        {
            $fatorial = $fatorial * $x;
        }
        return $fatorial;
    }
}