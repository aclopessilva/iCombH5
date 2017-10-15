<?php

abstract class Formula
{

    public $nome;
    public $notacao;

    public abstract function calcula($n, $p);

}