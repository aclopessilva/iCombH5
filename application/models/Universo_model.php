<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Exercicio_model extends CI_Model {
  var $table = "universo";

  function __construct() {
    parent::__construct();
  }

  function GetById($id) {
    if(is_null($id))
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
}
