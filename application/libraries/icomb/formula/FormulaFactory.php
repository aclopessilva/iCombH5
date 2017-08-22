<?php


class FormulaFactory
{
    public function createFormulaByName($nome){

        if($nome == 'C(n,p)'){
            return new Binomio();
        }elseif ($nome == 'A(n,p)'){
            return new Arranjo();
        }elseif ($nome == 'n^p'){
            return new Potencia();
        }elseif ($nome == 'p!'){
            return new Factorial();
        }elseif ($nome == 'n'){
            return new Value();
        }

    }
}