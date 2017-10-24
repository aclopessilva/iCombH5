<?php

class Desenvolvimento {

    public $exercicio; //Objeto do tipo ExercicioModel, apenas utilizado para consultas
    public $inicio; //Datetime de inicio do Desenvolvimento
    public $estado; //Texto indicador do estado do Desenvolvimento
    public $erros_formula; //Contador de erros para os estagios que nao tem estado "Finalizado" apos a validacao da Formula
    public $acertos_formula; //Contador de acertos para os estagios que tem estado "Finalizado" apos a validacao da Formula
    public $avaliador; //Classe avaliadora que contem os metodos necessarios para as correcoes dentro do contexto do Desenvolvimento
    public $log; //Entradas no Log de uma resolucao do exercicio, objeto do tipo Log
    public $estagios = array(); //Armazenador de estagios 

}
