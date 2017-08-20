<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Avaliador
 *
 * @author Jane Asher
 */
class Avaliador {
    
    private $universo;
    private $solucao;
    private $elementos;
    
    
    private $elemParticao;
    private $elemResposta;
    private $particoes;

    //put your code here
    public function init($universo, $solucao){
        $this->universo = $universo;
        $this->solucao = $solucao;
        
        //itera a traves dos elementos do universo e avalia se a solucao consegue identificar algum.
        $this->elementos = $this->universo->elementos;

        // README: Enquanto no java, objetos podem ser usados como indices do array, o php array tem limitacao para aceitar isso
        // para contornar esse problema sera usada a clase SplObjectStorage como "array" para armazenar os objetos no indice do array.
        // https://stackoverflow.com/questions/4642980/can-i-use-an-instantiated-object-as-an-array-key?lq=1

        $this->elemParticao =  new SplObjectStorage();
        $this->elemResposta =  new SplObjectStorage();
        $this->particoes =  new SplObjectStorage();

        $estagios = $this->solucao->condicoes; //aqui nos representamos estagios em lugar de condicoes (como o icomb faz)
        
        foreach ($this->elementos  as $elemento ){
            foreach ($estagios as $estagio){
//                print_r($estagio);
                if($estagio->evaluate($elemento)){
                    if (isset($this->elemParticao[$elemento])) {
                        //throw new RuntimeException(I18n.getString("evaluationMessage01"));
                        die('evaluationMessage01');
                    } else {

                        $this->elemParticao[$elemento] = $estagio;

                        $set = array();
                        if(isset($this->particoes[$estagio])){
                            $set = $this->particoes[$estagio];
                        }

                        $set[] = $elemento;
                        $this->particoes[$estagio] = $set;
                    }
                }
            }
        }
    }
    
    public function reset(){
        $this->elemResposta = new SplObjectStorage();
    }

    /**
     * Este método permite adicionarmos uma condição candidata para o problema.
     * A Condição não precisa ser idêntica a alguma das condições informadas no
     * contrutor, porém precisa ser compatível.
     *
     * A todo o momento o conjunto de soluções candidatas será confrontado com o
     * conjunto solução informado no construtor e uma mensagem de erro será
     * lançada quanto os conjuntos não forem compatíveis
     *
     * @param condicao candidata
     */
    public function adicionaCondicao($condicao) {

        $setElementos = array();
        $setCondicoes = array();
        
        foreach($this->elementos  as $elemento){
            if ($condicao->evaluate($elemento)) {

                //So adicionamos no SET se nao existir o valor previamente
                $valor = $elemento;
                if(!in_array($valor , $setElementos)){
                    $setElementos[] = $valor;
                }


                //So adicionamos no SET se nao existir o valor previamente
                $valor = $this->splSearchWithKey($this->elemParticao, $elemento);
                if(!in_array($valor , $setCondicoes)){
                    $setCondicoes[] = $valor;
                }

            }
        }
        if(sizeof($setElementos) == 0 ){
            return "Nenhum elemento do conjunto universo atende as restrições informadas. Cada estágio criado deverá selecionar ao menos 1 elemento.";
            //die("evaluationMessage02");
        }
        if(sizeof($setCondicoes) == 0 || (sizeof($setCondicoes) == 1 && $setCondicoes[0]==null) ){
            return "As restrições informadas selecionam elementos (do conjunto universo) que não deveriam ser escolhidos para este exercício.";
            //die("evaluationMessage03");
        }
        /*
        if (setCondicoes.size() == 0 || setCondicoes.size() == 1 && (setCondicoes.iterator().next() == null)) {
            throw new RuntimeException(I18n.getString("evaluationMessage03"));
        }
        */
         
        if($condicao->quantidade != sizeof($setElementos)){
            
            if(sizeof($setCondicoes)>1){
                foreach($setCondicoes as $cond){
                    $conjElementos1 = $this->particoes[$cond];
                    $e1 = $this->search($setElementos, $conjElementos1);
                    $e2 = $this->search($setElementos, $conjElementos2);
                    die("evaluationMessage04".$e1.$e2);
                }
            }
            
            
            $baseCondicao = $setCondicoes[0];
            $baseElementos = $this->particoes[$baseCondicao];
            
            if($setElementos == $baseElementos){
                if ($condicao->quantidade != $baseCondicao->quantidade) {
                    return "A condição selecionada está provavelmente correta, porém o número de elementos está errado.";
                    //die("evaluationMessage05");
                    //throw new RuntimeException(I18n.getString("evaluationMessage05"));
                }
            }else{
                return "Esta seleção irá alterar a distribuição esperada de alguns elementos.";
                //die("evaluationMessage06");
                //throw new RuntimeException(I18n.getString("evaluationMessage06"));
            }
         
        } // if (condicao.getQuantidade() != setElementos.size())
        else {
            foreach ($setCondicoes as $cond){
                $baseElementos = $this->particoes[$cond];
                if($cond->quantidade != sizeof($baseElementos)){
                    return "Algum elemento estará erroneamente presente em todas combinações.";
                    //die("evaluationMessage07");
                }
            }
        }
        // Se chegou aqui, condicao individual é ok
        $this->consolida($condicao, $setElementos);

        return "OK";

    } // void adicionaCondicao(Condicao condicao)


    private function splSearchWithKey($spl, $search){

        foreach ($spl as $key)
        {
            if($key == $search){
                return $spl[$key];
            }
        }
        return null;
        /*
        while($spl->valid()) {
            $index  = $spl->key();
            $object = $spl->current();
            if($index == $search){
                return $object;
            }
            $spl->next();
        }*/
    }
    /**
     * Depois das verificacoes, consolida condição ao conjunto de elementos.
     *
     * @param cond
     * @param setElementos
     */
    private function consolida($cond, $setElementos) {
        
        
        foreach ($setElementos as $e){
            $c = $this->splSearchWithKey($this->elemResposta,$e);
            if ($c != null) {
                die("evaluationMessage08");
            }
        }
        
        foreach ($setElementos as $e){
            $this->elemResposta[$e] = $cond;
        }

    }
    
    private function search($setElementos, $conjElementos1){
        
        foreach ( $setElementos as $setElemento){
            if( in_array($setElemento, $conjElementos1)){
                return $setElemento;
            }
        }
    }
    
}
