<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //precarregando models para todos os metdos
        $this->load->model('Exercicio_model');
        $this->load->model('Elemento_model');
        $this->load->model('Formula_model');

        //esta sendo carregado no config/autoload.php
        //$this->load->library('IComb', 'icomb');
    }
    
    public function index()
    {
            // Recupera os contatos através do model
            $exercicios = $this->Exercicio_model->GetAll('exercicio');
            $universo1 = array();
            $universo2 = array();
            $universo3 = array();
            $universo4 = array();
            
            foreach ($exercicios as $exec) {
                if($exec->universo_id == 1){
                    array_push($universo1, $exec);
                }
                if($exec->universo_id == 2){
                    array_push($universo2, $exec);
                }
                if($exec->universo_id == 3){
                    array_push($universo3, $exec);
                }
                if($exec->universo_id == 4){
                    array_push($universo4, $exec);
                }

            }
            $formula = $this->Formula_model->GetAll();

            $arrayExercicio = array('exercicio1' => $universo1, 'exercicio2' => $universo2, 'exercicio3' => $universo3, 'exercicio4' => $universo4, 'formula' => $formula);
            $this->load->view('exercicio/get', $arrayExercicio);
    }

    public function trocaChaves($idUniverso, $idChave){
        
        $this->load->model('Atributos_model');
        $valorPredicado = $this->Atributos_model->GetValorPredicadoByChave($idUniverso, $idChave);
//        print_r ($idChave);
//        print_r ($valorPredicado);
        
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($valorPredicado));
    }
            
    public function resolucao($id) {
        $formula = $this->Formula_model->GetAll();

        $exercicio = $this->Exercicio_model->GetById($id);

        $idUniverso = $exercicio->universo_id;
        $elementosUniverso = $this->Elemento_model->GetByUniverse($idUniverso);

       
        $this->load->model('Atributos_model');
        $chaves = $this->Atributos_model->GetByChaveChaveDesc($idUniverso);
        $valorPredicado = $this->Atributos_model->GetValorPredicadoByChave($idUniverso, $chaves[0]->chave);
        
        $arrayDadosExercicio = 
                array(
                    'exercicio' => $exercicio, 
                    'formula' => $formula, 
                    'chaves' => $chaves, 
                    'elementosUniverso' => $elementosUniverso,
                    'valorPredicado' => $valorPredicado
                );

         
        $this->load->view('/layout/header.php');
        $this->load->view('/layout/menu-exercicio.php', $arrayDadosExercicio);
        $this->load->view('exercicio/exercicio', $arrayDadosExercicio);
        $this->load->view('/layout/footer.php');


        //carrega o exercicio completo
        $exercicioFull = $this->Exercicio_model->GetWithFullSolution($id);
        //chama iniciar icomb
        $this->icomb->iniciaDesenvolvimento($exercicioFull);
    }

    public function indicador() {
        $formula = $this->Formula_model->GetAll();
        
        $retorno = $this->icomb->getLogs();

        $arrayDadosExercicio = array('formula' => $formula, 'retorno' => $retorno);

        //convertemos o objeto em formato json, para entendimento do javascript
        // var_dump($retorno);
        // die();

        $this->load->view('/layout/header.php');
        $this->load->view('/layout/menu-exercicio.php', $arrayDadosExercicio);
        $this->load->view('/exercicio/indicador.php');
        $this->load->view('/layout/footer.php');
    }

    public function ValidaCondicao() {
        $request = new stdClass();
        $request->numElementos = $_POST['num_elementos'];
        $request->numPropriedades = $_POST['num_propriedades'];

        if($request->numPropriedades == 1){
            $request->atributo = $_POST['atributo'];
            $request->pertence = $_POST['pertence'];
            $request->caracteristica = $_POST['caracteristica'];
        }
        if($request->numPropriedades == 2){
            $request->atributo = $_POST['atributo'];
            $request->pertence = $_POST['pertence'];
            $request->caracteristica = $_POST['caracteristica'];
            
            $request->atributo2 = $_POST['atributo2'];
            $request->pertence2 = $_POST['pertence2'];
            $request->caracteristica2 = $_POST['caracteristica2'];
        }
        
        $retorno = $this->icomb->validaCondicao($request);


        //convertemos o objeto em formato json, para entendimento do javascript
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($retorno));

        //echo json_encode($retorno);

    }

    public function logs() {

        $retorno = $this->icomb->getLogs();
        //convertemos o objeto em formato json, para entendimento do javascript
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($retorno));

    }

    public function ValidaEstagio() {


        $formula_request = new stdClass();
        $formula_request->formula = $_POST['formula'];
        $formula_request->n = $_POST['n'];
        $formula_request->p = $_POST['p'];

        $retorno = $this->icomb->validaEstagioAtual($formula_request);

        //convertemos o objeto em formato json, para entendimento do javascript

        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($retorno));

        //        echo json_encode($retorno);


    }

    public function EliminarEstagio() {



        $numero_estagio =  $_POST['estagio_a_deletar'];
        $retorno = $this->icomb->eliminarEstagio($numero_estagio);

        //convertemos o objeto em formato json, para entendimento do javascript
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($retorno));

        //        echo json_encode($retorno);


    }

}
