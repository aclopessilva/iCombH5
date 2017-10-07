<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Exercicio_model extends CI_Model {

    // Variável que define que a tabela utilizada aqui é a EXERCICIO
    var $table = "exercicio";

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //Metodo que coleta todos os dados de um exercicio em especifico, pelo seu id
    function GetById($id) {
        if (is_null($id))
            return false;
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    /**
     * Retorna um objeto exercicio com objeto solucao interno identico ao icomb
     * @return type
     */
    function GetWithFullSolution($id) {
        
        $this->load->model('Solucao_model');
        $this->load->model('Estagio_model');
        $this->load->model('Expressao_model');
        $this->load->model('Caracteristica_model');
        $this->load->model('Universo_model');
        $this->load->model('Elemento_model');
        $this->load->model('Atributos_model');
        
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $exercicio = $query->row();
            //carregando a solucao
            if (isset($exercicio->solucao_id)) {
                $solucao = $this->Solucao_model->GetById($exercicio->solucao_id);                
                $solucao->estagios = $this->Estagio_model->GetBySolucaoId($exercicio->solucao_id);
                
                foreach($solucao->estagios as $estagio){
                    $estagio->expressoes = $this->Expressao_model->GetByEstagioId($estagio->id);                    
                    foreach($estagio->expressoes as $expressao){                        
                        $expressao->caracteristicas = $this->Caracteristica_model->GetByExpressaoId($expressao->id);
                    }
                }
                //adicionamos a solucao como uma propriedade do objeto exercicio
                $exercicio->solucao = $solucao;
            }
            //carregando o universo e seus elementos
            if (isset($exercicio->universo_id)) {
                $universo = $this->Universo_model->GetById($exercicio->universo_id);
                $universo->elementos = $this->Elemento_model->GetByUniverse($exercicio->universo_id);
                //procuramos pelos atributos do elemento e adicionamos ao atributo "atributos"
                foreach ($universo->elementos as $elemento){
                    $elemento->atributos = $this->Atributos_model->GetByElemento($elemento->id);
                }
                $exercicio->universo = $universo; 
            }
            return $exercicio;
        } else {
            return null;
        }
    }

    //Metodo que coleta todos os exercicios e seus dados
    function GetAll() {
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

}
