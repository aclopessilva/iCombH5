<?php
/**
 * Created by PhpStorm.
 * User: Jane Asher
 * Date: 21/08/2017
 * Time: 13:39
 */

class Potencia
{

    public $nome = 'potencia';
    public $notacao = 'n^p';

    public function calcula($n, $p){
        return pow($n,$p);
    }
}