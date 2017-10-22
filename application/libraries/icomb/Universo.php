<?php

/*
* Classe que converte o objeto de BD Universo em classe para o entendimento do IComb
 */

class Universo {

    public $tipo;
    public $quantidade;
    public $elementos = array();

    public function createFromBDObject($db_universo) {

        $universo = new Universo();
        $universo->quantidade = $db_universo->quantidade;
        $universo->tipo = $db_universo->tipo;

        if (isset($db_universo->elementos)) {
            foreach ($db_universo->elementos as $db_elemento) {
                $elemento = new Element();
                $elemento->id = $db_elemento->id;
                $elemento->name = $db_elemento->id;
                $elemento->imagem = $db_elemento->imagem;

                foreach ($db_elemento->atributos as $atributo) {
                    $elemento->addAttribute($atributo->chave, $atributo->valor, array($atributo->predicado));
                }
                array_push($universo->elementos, $elemento);
            }
        }
        return $universo;
    }

}
