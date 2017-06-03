<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicio extends CI_Controller {
	public function index()
	{
		// Recupera os contatos através do model
		$exercicio = $this->Exercicio_model->GetAll('exercicio');
		$arrayExercicio = array('exercicio' => $exercicio);
		// var_dump($exercicio);
		// die();
		$this->load->view('exercicio/get', $arrayExercicio);
	}
	public function resolucao()
	{
		$this->load->view('/layout/header.php');
		$this->load->view('/layout/menu.php');
		$this->load->view('exercicio/exercicio');
		$this->load->view('/layout/footer.php');
	}
}
