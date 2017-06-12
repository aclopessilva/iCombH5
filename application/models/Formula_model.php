<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Formula_model extends CI_Model {
  // Variável que define o nome da tabela
  var $table = "formula";

  function __construct() {
    parent::__construct();
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