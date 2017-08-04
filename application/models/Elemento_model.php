<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Elemento_model extends CI_Model {

    var $table = "elemento";

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

    function GetByUniverse($idUniverse) {
        if (is_null($idUniverse)){
            return false;
        }
        $this->db->where('universo_id', $idUniverse);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

}
