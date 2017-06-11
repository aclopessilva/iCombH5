<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicio extends CI_Controller {
	public function index()
	{
		// Recupera os contatos através do model
		$exercicio = $this->Exercicio_model->GetAll('exercicio');
		$arrayExercicio = array('exercicio' => $exercicio);
		$this->load->view('exercicio/get', $arrayExercicio);
	}

	public function resolucao($id)
	{
		$this->load->model('Formula_model');
		$formula = $this->Formula_model->GetAll();

		$exercicio = $this->Exercicio_model->GetById($id);
		$arrayDadosExercicio = array('exercicio' => $exercicio, 'formula' => $formula);

		$this->load->view('/layout/header.php');
		$this->load->view('/layout/menu.php');
		$this->load->view('exercicio/exercicio', $arrayDadosExercicio);
		$this->load->view('/layout/footer.php');
	}
}
