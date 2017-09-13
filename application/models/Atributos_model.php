<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Atributos_model extends CI_Model {

    var $table = "atributos";

    function __construct() {
        parent::__construct();
    }

    function GetById($id) {
        if (is_null($id))
            return false;
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    function GetAll() {
        $this->load->database();
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    function GetByElemento($idElemento) {
        if (is_null($idElemento)){
            return false;
        }
        $this->db->where('elemento_id', $idElemento);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    function GetByChaveChaveDesc($idUniverso){
        
        if (is_null($idUniverso))
            return false;
        $sql = "SELECT DISTINCT chave, chave_desc FROM `atributos` WHERE universo_id = ?";
        $query = $this->db->query($sql, $idUniverso);
        //$query = $this->db->get($this->table);
        return $query->result();
        
    }
    
    function GetValorPredicadoByChave($idUniverso, $idChave){
        
        if (is_null($idChave))
            return false;
        $sql = "(SELECT"
                . " DISTINCT valor"
                . " FROM `atributos`"
                . " WHERE chave = '".$idChave."'"
                . " AND universo_id = ".$idUniverso."
                    AND valor is not null)
                UNION
                (SELECT DISTINCT predicado as valor
                FROM `atributos`
                WHERE chave = '".$idChave."' AND universo_id = ".$idUniverso. " AND predicado is not null)";
        $query = $this->db->query($sql);
        return $query->result();
        
    }
    
}
