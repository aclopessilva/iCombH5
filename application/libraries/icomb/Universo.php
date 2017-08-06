<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Condicao
 *
 * @author Jane Asher
 */
class Universo extends ICombClass {
    /* Nao precisa definir propriedades, ainda, pois estamos usando os campos do bd, ao fazer o cast esse propriedades serao copiadas aqui. */
    /* public $tipo;
      public $quantidade;
      public $elementos = array();
     */

    public function createFromBDObject($universo) {
        $universo = $this->cast('Universo', $universo);
        $novos_elementos = array();
        if ($universo->elementos) {
            foreach ($universo->elementos as $elemento) {
                $elemento = $this->cast('Element', $elemento);
                $elemento->addAttribute($elemento->id, array($elemento->atributo, $elemento->valor), array($elemento->predicado));
                array_push($novos_elementos, $elemento);
            }
            $universo->elementos = $novos_elementos;
        }
        return $universo;
    }

}
