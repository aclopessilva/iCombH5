<?php

class Factorial
{
    public $nome = 'factorial';
    public $notacao = 'p!';

    public function calcula($n){
        $factorial = 1;
        for ($x=$n; $x>=1; $x--)
        {
            $factorial = $factorial * $x;
        }
        return $factorial;
    }
}