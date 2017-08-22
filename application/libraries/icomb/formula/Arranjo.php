<?php

class Arranjo
{
    public $nome = 'arranjo';
    public $notacao = 'A(n,p)';
    public function calcula($n, $p){
        $q = $n-$p;
        $max = max($p, $q);
        $min = min($p, $q);
        if($min==0) {
            return 1;
        }
        $result = $n;
        for($i = $n-1; $i>$max; $i--){
            $result *= $i;
        }
        return $result;
    }
}