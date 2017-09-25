<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//de repente mudar o caminho, para nao precisar citar por completo (veronica)
require_once("C:/xampp/htdocs/icombh5/application/libraries/fpdf/fpdf.php");

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
        //precisa pegar o id do exercicio, deixei fixo por enquanto (veronica)
        $exercicio = $this->Exercicio_model->GetById(2);

        //removendo .000000 que o MYSQL coloca em time()
        $tempoEsperadoTratamento = explode('.', $exercicio->tempo_esperado);
        $tempoEsperado = $tempoEsperadoTratamento[0];

        $tempoEsperadoExercicio = explode(':', $tempoEsperado);
        $tempoEsperadoS = (($tempoEsperadoExercicio[0]) * 60 + $tempoEsperadoExercicio[1])*60 + $tempoEsperadoExercicio[2];
        
        $retorno = $this->icomb->getLogs();

        $tempoDemorado = $this->icomb->getDuracaoExercicio();
        $tempoDemoradoS = ((($tempoDemorado->y * 365.25 + $tempoDemorado->m * 30 + $tempoDemorado->d) * 24 + $tempoDemorado->h) * 60 + $tempoDemorado->i)*60 + $tempoDemorado->s;
        $convertTempoDemorado = $tempoDemorado->format('%H:%I:%S');

        $diff = (strtotime($exercicio->tempo_esperado) - strtotime($convertTempoDemorado));
        $diffPositivaouNegativa = '';
        if($diff > 0){
            $diffPositivaouNegativa = 'Tempo levado pelo aluno foi menor que o tempo esperado ';
        }else if($diff < 0){
            $diffPositivaouNegativa = 'Tempo levado pelo aluno foi maior que o tempo esperado ';
        }else{
            $diffPositivaouNegativa = 'Tempo levado pelo aluno foi igual ao tempo esperado ';
        }
        //convert SEGUNDOS PARA HH:MM:SS -  $diff (diferença de tempo esperado e tempo realizado) 
        $horasDiferença = floor($diff / 3600);
        $minutosDiferença = floor(($diff - ($horasDiferença * 3600)) / 60);
        $segundosDiferença = floor($diff % 60);
        $convertTempoDiferença = $horasDiferença . ":" . $minutosDiferença . ":" . $segundosDiferença;


        $quantidadeErros = $this->icomb->getQuantidadeErroEstagio();
        $quantidadeAcertos = $this->icomb->getQuantidadeAcertosEstagio();

        $arrayDadosExercicio = array('formula' => $formula, 'retorno' => $retorno, 'tempoEsperado' => $tempoEsperado, 'tempoDemorado' => $convertTempoDemorado, 'tempoEsperadoS' => $tempoEsperadoS, 'tempoDemoradoS' => $tempoDemoradoS, 'diffPositivaouNegativa' => $diffPositivaouNegativa,'quantidadeErros' => $quantidadeErros, 'quantidadeAcertos' => $quantidadeAcertos);

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


        $this->load->model('Atributos_model');
        $idUniverso = $_POST['universo_id'];
        $chaves = $this->Atributos_model->GetByChaveChaveDesc($idUniverso);
        //retorna lista de registros com propriedades "chave" e "chave_desc"
        $retorno = $this->icomb->validaCondicao($request, $chaves);


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

    public function testevaloresdeerro() {

        echo "getDuracaoExercicio:".$this->icomb->getDuracaoExercicio()."<br>";
        echo "getQuantidadeErroEstagio:".$this->icomb->getQuantidadeErroEstagio()."<br>";

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

    public function Finaliza() {

        $relacionamento =  $_POST['relacionamento'];
        $retorno = $this->icomb->finalizaExercicio($relacionamento);

        //convertemos o objeto em formato json, para entendimento do javascript
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($retorno));

        //        echo json_encode($retorno);


    }

    public function geraPDF(){    
        $date = new DateTime();
        $timestamp = $date->getTimestamp();

        $nome = "icombh5";
        $email = "anaerikaveronica@gmail.com";
        $endereco = "Rua do Andradas 9999 nº 12";
        $cep = "99999-999";
        $cidade = "Guarulhos";
        $estado = "RS";
        $telefone= "9999-9999";
        $observacoes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis";

        $pdf= new FPDF("P","pt","A4");
        $pdf= new FPDF("P","pt","A4");
        $pdf->AddPage();
         
        $pdf->SetFont('arial','B',18);
        $pdf->Cell(0,5,"Relatório",0,1,'C');
        $pdf->Cell(0,5,"","B",1,'C');
        $pdf->Ln(50);

        //nome
        $pdf->SetFont('arial','B',12);
        $pdf->Cell(70,20,"Nome:",0,0,'L');
        $pdf->setFont('arial','',12);
        $pdf->Cell(0,20,$nome,0,1,'L');
         
        //email
        $pdf->SetFont('arial','B',12);
        $pdf->Cell(70,20,"E-mail:",0,0,'L');
        $pdf->setFont('arial','',12);
        $pdf->Cell(70,20,$email,0,1,'L');
         
        //Endereço
        $pdf->SetFont('arial','B',12);
        $pdf->Cell(70,20,"Endereço:",0,0,'L');
        $pdf->setFont('arial','',12);
        $pdf->Cell(70,20,$endereco,0,1,'L');
         
        //cep
        $pdf->SetFont('arial','B',12);
        $pdf->Cell(70,20,"CEP:",0,0,'L');
        $pdf->setFont('arial','',12);
        $pdf->Cell(70,20,$cep,0,1,'L');
         
        //cidade
        $pdf->SetFont('arial','B',12);
        $pdf->Cell(70,20,"Cidade:",0,0,'L');
        $pdf->setFont('arial','',12);
        $pdf->Cell(70,20,$cidade,0,1,'L');
         
        //Estado
        $pdf->SetFont('arial','B',12);
        $pdf->Cell(70,20,"Estado:",0,0,'L');
        $pdf->setFont('arial','',12);
        $pdf->Cell(70,20,$estado,0,1,'L');
         
        $pdf->ln(10);
        //Observações
        $pdf->SetFont('arial','B',12);
        $pdf->Cell(70,20,"Observações:",0,1,'L');
        $pdf->setFont('arial','',12);
        $pdf->MultiCell(0,20,$observacoes,0,'J');
         
        //cabeçalho da tabela 
        $pdf->SetFont('arial','B',14);
        $pdf->Cell(130,20,'Coluna 1',1,0,"L");
        $pdf->Cell(140,20,'Coluna 2',1,0,"L");
        $pdf->Cell(130,20,'Coluna 3',1,0,"L");
        $pdf->Cell(160,20,'Coluna 4',1,1,"L");
         
        //linhas da tabela
        $pdf->SetFont('arial','',12);
        for($i= 1; $i <10;$i++){
            $pdf->Cell(130,20,"Linha ".$i,1,0,"L");
            $pdf->Cell(140,20,rand(),1,0,"L");
            $pdf->Cell(130,20,rand(),1,0,"L");
            $pdf->Cell(160,20,rand(),1,1,"L");
        }
        $pdf->Output("icombh5_".$timestamp.".pdf","D");
    }

}
