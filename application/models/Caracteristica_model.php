<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Caracteristica_model extends CI_Model {

    var $table = "caracteristica";

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

    function GetByExpressaoId($id) {
        if (is_null($id))
            return false;
        $this->db->where('expressao_id', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

}
