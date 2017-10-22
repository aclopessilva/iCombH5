<?php

/*
* Classe que converte o objeto de BD Solucao em classe para o entendimento do IComb
*/

class Solucao {

    public $resultado;
    public $formato_legado;
    public $condicoes = array();

    public function createFromBDObject($db_solucao) {

        $solucao = new Solucao();
        $solucao->resultado = $db_solucao->resultado;
        $solucao->formato_legado = $db_solucao->formato_legado;

        $condicoes = array();
        if (isset($db_solucao->estagios)) {
            foreach ($db_solucao->estagios as $estagio) {
                $condicao = new Condicao();
                $condicao->quantidade = $estagio->quantidade;

                //$condicao = $this->cast('Condicao', $estagio);

                if ($estagio->expressoes) {
                    foreach ($estagio->expressoes as $db_expressao) {
                        $expressao = new Expressao();
                        $expressao->atributo = $db_expressao->atributo;
                        //no mysql o booleano é armazenado como char(1)
                        //considerando isso, vamos usar uma validacao para colocar um boolean real no pertence
                        if ($db_expressao->pertence == 't') {//true
                            $expressao->pertence = true;
                        } else { //qualquer outra coisa que estiver na tabela
                            $expressao->pertence = false;
                        }
                        if (isset($db_expressao->caracteristicas)) {
                            foreach ($db_expressao->caracteristicas as $db_caracteristica) {
                                array_push($expressao->elementos, $db_caracteristica->valor);
                            }
                        }
                        array_push($condicao->expressoes, $expressao);
                    }
                }
                array_push($condicoes, $condicao);
            }
            $solucao->condicoes = $condicoes;
        }
        return $solucao;
    }

}
