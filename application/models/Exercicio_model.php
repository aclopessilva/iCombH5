<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Exercicio_model extends CI_Model {
  // Variável que define o nome da tabela
  var $table = "exercicio";

  function __construct() {
    parent::__construct();
  }

  function GetById($id) {
    if(is_null($id))
      return false;
    $this->db->where('exer_id', $id);
    $query = $this->db->get($this->table);
    if ($query->num_rows() > 0) {
      return $query->row_array();
    } else {
      return null;
    }
  }


  function GetAll() {
    $this->load->database();
    $query = $this->db->get($this->table);
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return null;
    }
  }
}
