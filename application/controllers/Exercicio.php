<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicio extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
            //precarregando models para todos os metdos
            $this->load->model('Exercicio_model');
            $this->load->model('Elemento_model');
            $this->load->model('Formula_model');
            
            $this->load->library('IComb', 'icomb');
        }
	public function index()
	{
		// Recupera os contatos através do model
		$exercicio = $this->Exercicio_model->GetAll('exercicio');
		$formula = $this->Formula_model->GetAll();

		$arrayExercicio = array('exercicio' => $exercicio, 'formula' => $formula);
		$this->load->view('exercicio/get', $arrayExercicio);
	}

	public function resolucao($id)
	{
		$formula = $this->Formula_model->GetAll();

		$exercicio = $this->Exercicio_model->GetById($id);
		
                $exercicioFull = $this->Exercicio_model->GetWithFullSolution($id);
                
                print_r($exercicioFull);
                $this->icomb->iniciaExercicio($exercicioFull);
                
                
		$idUniverso = $exercicio->universo_id;
		$elementosUniverso = $this->Elemento_model->GetByUniverse($idUniverso);

		$arrayDadosExercicio = array('exercicio' => $exercicio, 'formula' => $formula, 'elementosUniverso' => $elementosUniverso);
	
		$this->load->view('/layout/header.php');
		$this->load->view('/layout/menu-exercicio.php', $arrayDadosExercicio);
		$this->load->view('exercicio/exercicio', $arrayDadosExercicio);
		$this->load->view('/layout/footer.php');
	}

	public function indicador()
	{	
		$formula = $this->Formula_model->GetAll();
		$arrayDadosExercicio = array('formula' => $formula);

		$this->load->view('/layout/header.php');
		$this->load->view('/layout/menu-exercicio.php', $arrayDadosExercicio);
		$this->load->view('/exercicio/indicador.php');
		$this->load->view('/layout/footer.php');
	}

	public function teste()
    {
        //$teste = ($_POST);
        // var_dump($teste);
        // die();
        $PostP=$_POST['p'];
        $PostN=$_POST['n'];
        $PostFormula=$_POST['formula'];

        $formulax = 1;
        $nx = 4;
        $px = 1;
    }

     public function ValidaCondicao()
    {
    	$validaExer = 1;
		$validaNumElement = 1;
		$validaNumPropried = 1;
		$validaAtributo = 1;
		$validaPertence = 1;
		$validaCaract = 1;

		$numElementos = $_POST['num_elementos'];
		$numPropriedades = $_POST['num_propriedades'];
		$atributo = $_POST['atributo'];
		$pertence = $_POST['pertence'];
		$caracteristica = $_POST['caracteristica'];
		
			if($numElementos == $validaNumElement){				
				if ($numPropriedades == $validaNumPropried) {					
					if ($atributo == $validaAtributo) {					
						if ($pertence == $validaPertence) {							
							
							if ($caracteristica == $validaCaract) {
								echo "Dados de condição CORRETOS!!! Passe para a Etapa 2"; 
							}else echo "Valor de elemento incorreto";
						
						}else echo "Pertinência(é/não é) incorreto";
					}else echo "Tipo de atributo incorreto";
				}else echo "Número de propriedade(s) incorreta(s)";
			}else echo "Número de elementos incorretos";
		
	}

	/**public function ValidaCondicao2()
    {
    	$validaExer = 1;
		$validaNumElement = 1;
		$validaNumPropried = 1;
		$validaAtributo2 = 1;
		$validaPertence2 = 1;
		$validaCaract2 = 1;

		$numElementos = $_POST['num_elementos'];
		$numPropriedades = $_POST['num_propriedades'];
		$atributo2 = $_POST['atributo2'];
		$pertence2 = $_POST['pertence2'];
		$caracteristica2 = $_POST['caracteristica2'];
		
			if($numElementos == $validaNumElement){				
				if ($numPropriedades == $validaNumPropried) {					
					if ($atributo2 == $validaAtributo2) {					
						if ($pertence2 == $validaPertence2) {							
							
							if ($caracteristica2 == $validaCaract2) {
								echo "Dados de condição CORRETOS!!! Passe para a Etapa 2"; 
							}else echo "Valor de elemento incorreto";
						
						}else echo "Pertinência(é/não é) incorreto";
					}else echo "Tipo de atributo incorreto";
				}else echo "Número de propriedade(s) incorreta(s)";
			}else echo "Número de elementos incorretos";
		
	}**/
}
