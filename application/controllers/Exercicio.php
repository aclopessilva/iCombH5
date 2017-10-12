<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//de repente mudar o caminho, para nao precisar citar por completo (veronica)
require_once("C:/xampp/htdocs/icombh5/application/libraries/fpdf/fpdf.php");

class Exercicio extends CI_Controller {

    public function __construct() {

        parent::__construct();
        //Precarregamento das Models para os metodos mencionados neste Controller
        $this->load->model('Exercicio_model');
        $this->load->model('Elemento_model');
        $this->load->model('Formula_model');
        $this->load->model('Atributos_model');

        //esta sendo carregado no config/autoload.php
        //$this->load->library('IComb', 'icomb');
    }
    
    public function index(){

            // Recupera todos os exercicios
            $exercicios = $this->Exercicio_model->GetAll('exercicio');

            // Declaracao de variaveis para separacao dos exercicios por categoria (universo)
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

            // Recupera todas as formulas
            $formula = $this->Formula_model->GetAll();

            //Empacota tudo em uma array e manda pra view
            $arrayExercicio = array('exercicio1' => $universo1, 'exercicio2' => $universo2, 'exercicio3' => $universo3, 'exercicio4' => $universo4, 'formula' => $formula);

            $this->load->view('exercicio/get', $arrayExercicio);
    }
            
    public function resolucao($idExercicio) {

        // Recupera todas as formulas
        $formula = $this->Formula_model->GetAll();
        $exercicio = $this->Exercicio_model->GetById($idExercicio);

        $idUniverso = $exercicio->universo_id;
        $elementosUniverso = $this->Elemento_model->GetByUniverse($idUniverso);
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
        $exercicioFull = $this->Exercicio_model->GetWithFullSolution($idExercicio);
        //chama iniciar icomb
        $this->icomb->iniciaDesenvolvimento($exercicioFull);
    }

    public function indicador() {
        $formula = $this->Formula_model->GetAll();
        //precisa pegar o id do exercicio, deixei fixo por enquanto (veronica)
        $exercicio = $this->icomb->obtemExercicioResolvido();

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

        /*enviando dados da sessão para view p/ mostrar estágios corretos - ana*/
        
        $estagiosCorretos = $this->icomb->coletaEstagiosCorretos();
        $resultadoFinal = $this->icomb->coletaResultadoFinal();
        $relacionamentoFinal = $this->icomb->relacionamentoResultadoFinal();
        $arrayDadosExercicio = array(
            'formula' => $formula, 
            'retorno' => $retorno, 
            'tempoEsperado' => $tempoEsperado, 
            'tempoDemorado' => $convertTempoDemorado, 
            'tempoEsperadoS' => $tempoEsperadoS, 
            'tempoDemoradoS' => $tempoDemoradoS, 
            'diffPositivaouNegativa' => $diffPositivaouNegativa,
            'quantidadeErros' => $quantidadeErros, 
            'quantidadeAcertos' => $quantidadeAcertos, 
            'estagiosCorretos' =>$estagiosCorretos, 
            'resultadoFinal' => $resultadoFinal,
            'relacionamentoFinal' => $relacionamentoFinal,
            'exercicio' => $exercicio
        );

        $this->load->view('/layout/header.php');
        $this->load->view('/layout/menu-exercicio.php', $arrayDadosExercicio);
        $this->load->view('/exercicio/indicador.php');
        $this->load->view('/layout/footer.php');
    }

    
    
    /**
     * AJAX -> 
     *      formulario
     * 
     * 
     * <- JSON
     */

    public function trocaChaves($idUniverso, $nomeChave){
        // Objetivo: coletar os elementos a serem exibidos no dropdown
        //de acordo com a chave (suit, value, team, player, etc) escolhida

        $valorPredicado = $this->Atributos_model->GetValorPredicadoByChave($idUniverso, $nomeChave);
        
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($valorPredicado));
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

//    public function logs() {
//
//        $retorno = $this->icomb->getLogs();
//        //convertemos o objeto em formato json, para entendimento do javascript
//        $this->output
//            ->set_content_type('application/json')
//            ->set_status_header(200)
//            ->set_output(json_encode($retorno));
//
//    }

//    public function testevaloresdeerro() {
//
//        echo "getDuracaoExercicio:".$this->icomb->getDuracaoExercicio()."<br>";
//        echo "getQuantidadeErroEstagio:".$this->icomb->getQuantidadeErroEstagio()."<br>";
//
//    }

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
        $idExercicio = $this->input->POST('idExercicio');
        $descricaoExercicio = $this->input->POST('descricaoExercicio'); 
        
        $quantidadeErros = $this->icomb->getQuantidadeErroEstagio();
        $quantidadeAcertos = $this->icomb->getQuantidadeAcertosEstagio();
        $estagiosCorretos = $this->icomb->coletaEstagiosCorretos();
        $resultadoFinal = $this->icomb->coletaResultadoFinal();
        $relacionamentoFinal = $this->icomb->relacionamentoResultadoFinal();  
        $retorno = $this->icomb->getLogs();

        $date = new DateTime();
        $timestamp = $date->getTimestamp();

        $pdf= new FPDF("P","pt","A4");
        $pdf= new FPDF("P","pt","A4");
        $pdf->AddPage();
         
        $pdf->SetFont('arial','B',18);
        $pdf->Cell(0,5,"iCombH5",0,1,'C');
        $pdf->Cell(0,5,"","B",1,'C');
        $pdf->Ln(50);

        $pdf->ln(10);
        //dados exercicio
        $pdf->SetFont('arial','B',12);
        $pdf->Cell(70,20,"Exercicio :".$idExercicio,0,1,'L');
        $pdf->setFont('arial','',12);
        $pdf->MultiCell(0,20,utf8_decode('Enunciado: '.$descricaoExercicio),0,'J');

        $pdf->ln(10);
        //acertos
        $pdf->SetFont('arial','B',12);
        $pdf->Cell(70,20,"N Acertos:",0,0,'L');
        $pdf->setFont('arial','',12);
        $pdf->Cell(0,20,$quantidadeAcertos,0,1,'L');

        //erros
        $pdf->SetFont('arial','B',12);
        $pdf->Cell(70,20,"N Erros:",0,0,'L');
        $pdf->setFont('arial','',12);
        $pdf->Cell(0,20,$quantidadeErros,0,1,'L');

        $pdf->ln(10);
        $pdf->MultiCell(0,20,'O(s) estagio(s) se relaciona(m) por meio de '. $relacionamentoFinal,0,'J');
        $pdf->MultiCell(0,20,'Resultado final: ' . $resultadoFinal . ' possibilidade(s) em total.',0,'J');
        
        $contador = 0;
        $pdf->ln(10);
        foreach ($estagiosCorretos as $estagioCorreto){
            $contador++;
            $quantidade =  $estagioCorreto->condicao->quantidade;
            $expressoes =  $estagioCorreto->condicao->expressoes;
        }

            $pdf->MultiCell(0,20, utf8_decode($contador. 'Estágio:'),0,'J');
            $pdf->MultiCell(0,20,$quantidade.  utf8_decode('elemento(s) cumpre(m) a(s) seguinte(s) condição(ões):'),0,'J');

            foreach($expressoes as $expressao)
                $pdf->MultiCell(0,20, utf8_decode($expressao->texto),0,'J');

        $n = $estagioCorreto->formula->n;
        $p = $estagioCorreto->formula->p;
        $textoFormula = str_replace("n", $n ,$estagioCorreto->formula->formula->notacao);
        $textoFormula = str_replace("p", $p ,$textoFormula );

         $pdf->ln(10);
        $pdf->MultiCell(0,20, utf8_decode('Fórmula utilizada '.$estagioCorreto->formula->formula->nome . ' ' . $textoFormula),0,'J');
        $pdf->MultiCell(0,20, utf8_decode('Resultado: '. $estagioCorreto->formula->resultado. ' possibilidade(s).'),0,'J'); 

        //LOGS
        $pdf->ln(10);
        $pdf->ln(10);
        $pdf->SetFont('arial','B',12);
        $pdf->Cell(70,20,"LOGS:",0,1,'L');
        $pdf->setFont('arial','',12);
       

        foreach ($retorno as $row)
            $pdf->Cell(0,20, utf8_decode($row->texto),0,1,'L');

        $pdf->Output("icombh5_".$timestamp.".pdf","D");
    }

}
