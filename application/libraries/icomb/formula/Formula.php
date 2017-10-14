<?php
/**
 * Created by PhpStorm.
 * User: Jane Asher
 * Date: 14/10/2017
 * Time: 15:12
 */

abstract class Formula
{

    public $nome;
    public $notacao;

    public abstract function calcula($n, $p);

}