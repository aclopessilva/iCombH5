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
class Solucao extends ICombClass {

    public function createFromBDObject($solucao) {
        $classe_solucao = $this->cast('Solucao', $solucao);

        if ($solucao->estagios) {
            $novos_condicoes = array();
            foreach ($solucao->estagios as $estagio) {
                $condicao = $this->cast('Condicao', $estagio);

                if ($condicao->expressoes) {
                    $novos_expressoes = array();
                    foreach ($condicao->expressoes as $expressao) {
                        $novo_expressao = $this->cast('Expressao', $expressao);
                        $array_elemento = $novo_expressao->caracteristicas;
                        if($array_elemento != null){
                            $novo_expressao->elementos = array();
                            foreach ($array_elemento as $elemento){
                                array_push($novo_expressao->elementos, $elemento->valor);
                            }
                        }
                        array_push($novos_expressoes, $novo_expressao);
                    }
                    $condicao->expressoes = $novos_expressoes;
                }
                
                //print_r($elemento);
                //echo "<br><br>";
                array_push($novos_condicoes, $condicao);
            }
            unset($classe_solucao->estagios);
            $classe_solucao->condicoes = $novos_condicoes;
        }
        return $classe_solucao;
    }

}
