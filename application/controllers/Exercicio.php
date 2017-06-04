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
	public function resolucao($id)
	{
		//echo ($id);
		$exercicio = $this->Exercicio_model->GetById($id);
		//print_r($exercicio);
		$arrayDadosExercicio = array('exercicio' => $exercicio);
		$this->load->view('/layout/header.php');
		$this->load->view('/layout/menu.php');
		$this->load->view('exercicio/exercicio', $arrayDadosExercicio);
		$this->load->view('/layout/footer.php');
	}
}
