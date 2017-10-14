<?php

class Binomio extends Formula
{
    public $nome = 'Combinação';
    public $notacao = 'C(n,p)';


    public function calcula($n, $p){
        $q = $n-$p;
        $max = max($p, $q);
        $min = min($p, $q);
        if($min==0) {
            return 1;
        }
        $denominador = $min;

        for($i=$min-1; $i>1; $i--){
            $denominador *=$i;
        }

        $result = $n;

        for($i = $n-1; $i>$max; $i--){
            $result *= $i;
            if($denominador > 1 && ($result % $denominador)==0){
                $result /= $denominador;
            }
        }
        return $result;
    }
}

