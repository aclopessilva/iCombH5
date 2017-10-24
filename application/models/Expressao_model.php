<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Expressao_model extends CI_Model {

    var $table = "expressao";

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

    function GetByEstagioId($id) {
        if (is_null($id))
            return false;
        $this->db->where('estagio_id', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

}
