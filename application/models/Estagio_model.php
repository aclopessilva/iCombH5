<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Estagio_model extends CI_Model {

    var $table = "estagio";

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

    function GetBySolucaoId($id) {
        if (is_null($id))
            return false;
        $this->db->where('solucao_id', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

}
