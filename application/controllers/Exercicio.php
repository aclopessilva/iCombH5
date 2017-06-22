<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicio extends CI_Controller {
	public function index()
	{
		// Recupera os contatos através do model
		$exercicio = $this->Exercicio_model->GetAll('exercicio');
		$this->load->model('Formula_model');
		$formula = $this->Formula_model->GetAll();

		$arrayExercicio = array('exercicio' => $exercicio, 'formula' => $formula);
		$this->load->view('exercicio/get', $arrayExercicio);
	}

	public function resolucao($id)
	{
		$this->load->model('Formula_model');
		$formula = $this->Formula_model->GetAll();

		$exercicio = $this->Exercicio_model->GetById($id);
		$arrayDadosExercicio = array('exercicio' => $exercicio, 'formula' => $formula);

		//$this->load->view('/layout/header.php');		
		$this->load->view('/layout/header.php');
		$this->load->view('/layout/menu-exercicio.php', $arrayDadosExercicio);
		$this->load->view('exercicio/exercicio-marcia', $arrayDadosExercicio);
		$this->load->view('/layout/footer.php');
	}

	public function indicador()
	{	
		$this->load->model('Formula_model');
		$formula = $this->Formula_model->GetAll();
		$arrayDadosExercicio = array('formula' => $formula);

		$this->load->view('/layout/header.php');
		$this->load->view('/layout/menu-exercicio.php', $arrayDadosExercicio);
		$this->load->view('/exercicio/indicador.php');
		$this->load->view('/layout/footer.php');
	}
}
