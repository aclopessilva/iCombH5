<?php
/**
 * Created by PhpStorm.
 * User: Jane Asher
 * Date: 14/10/2017
 * Time: 17:00
 */

class Sessao
{
    public $desenvolvimento;

    protected $CI;


    public function __construct() {
        // Assign the CodeIgniter super-object
        $this->CI = & get_instance();
    }

    public function  saveDesenvolvimento($valor){
        $this->CI->session->set_userdata('desenvolvimento', $valor);
    }

    public function getDesenvolvimento(){
        return $this->CI->session->userdata('desenvolvimento');
    }

    public function deleteDesenvolvimento(){
        $this->CI->session->unset_userdata('desenvolvimento');
    }

}