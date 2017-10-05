<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("C:/xampp/htdocs/icombh5/application/libraries/phpmailer/class.phpmailer.php");
require_once("C:/xampp/htdocs/icombh5/application/libraries/fpdf/fpdf.php");
		define('GUSER', 'icombh5@gmail.com');	// <-- Insira aqui o seu GMail
		define('GPWD', 'acabalogotcc');		// <-- Insira aqui a senha do seu GMail

class Email extends CI_Controller {

	public function email_controller()
	{	
		$this->load->library('IComb', 'icomb');
		// $DATA = ARRAY('NUSUARIO' => $THIS->INPUT->POST('NOMEUSUARIO'),
		// 'EMAIL' => $THIS->INPUT->POST('EMAILDESTINO'));

		// $NUSUARIO = $THIS->INPUT->POST('NOMEUSUARIO');
		// $EMAIL = $THIS->INPUT->POST('EMAILDESTINO');
		
		// $THIS->LOAD->LIBRARY('EMAIL');

		// $CONFIG = ARRAY('PROTOCOL' => 'SMTP',
	 //  					'SMTP_HOST' => 'SMTP.MAILTRAP.IO',
	 //  					'SMTP_PORT' => 2525,
	 //  					'SMTP_USER' => '1F3C1F8CAF8B9C',
	 //  					'SMTP_PASS' => 'C32E208BF17FE2',
	 //  					'CRLF' => "\R\N",
	 //  					'NEWLINE' => "\R\N",
	 //  					'MAILPATH' => '/ USR / SBIN / SENDMAIL',
	 //  					'CHARSET' =>'UTF-8',
	 //  					'MAILTYPE'=>'HTML',
	 //  					'WORDWRAP' => TRUE
		// );
		
		// $THIS->EMAIL->INITIALIZE($CONFIG);	
		// $THIS->EMAIL->FROM("ICOMBH5@MAIL.COM", 'ICOMBH5');
		// $THIS->EMAIL->SUBJECT("ICOMBH5, ".$NUSUARIO);
		// $THIS->EMAIL->TO($EMAIL); 
		
		// $HTML = $THIS->LOAD->VIEW('EMAIL/TEMPLATEMAIL.PHP',$DATA,TRUE);		
	 //  	$THIS->EMAIL->MESSAGE($HTML);
	  
	 // 	$THIS->EMAIL->ATTACH('C:/XAMPP/HTDOCS/ICOMBH5/USER_GUIDE/IMG/IMAGENS_BARALHO/ASCOPAS.PNG');
		// $THIS->EMAIL->SEND();

		// ECHO $THIS->EMAIL->PRINT_DEBUGGER();
		// REDIRECT('EXERCICIOS');


		//PDF___________________________________________________________________________________________________________________________
		$quantidadeErros = $this->icomb->getQuantidadeErroEstagio();
        $quantidadeAcertos = $this->icomb->getQuantidadeAcertosEstagio();
        $estagiosCorretos = $this->icomb->coletaEstagiosCorretos();
        $resultadoFinal = $this->icomb->coletaResultadoFinal();
        $relacionamentoFinal = $this->icomb->relacionamentoResultadoFinal();  
        $retorno = $this->icomb->getLogs();

        $date = new DateTime();
        $timestamp = $date->getTimestamp();

        $nome = "icombh5";
        $email = "anaerikaveronica@gmail.com";
        $observacoes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis";

        $pdf= new FPDF("P","pt","A4");
        $pdf= new FPDF("P","pt","A4");
        $pdf->AddPage();
         
        $pdf->SetFont('arial','B',18);
        $pdf->Cell(0,5,"iCombH5",0,1,'C');
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

        $doc = $pdf->Output("icombh5_".$timestamp.".pdf","S");
		//FIM PDF______________________________________________________________________________________________________________________________________________

        $nomeAluno  = "EVA";
		$Nome		= "fdfdsfdsdsf";	// Pega o valor do campo Nome
		$Fone		= "156165515156";	// Pega o valor do campo Telefone
		$EmailPara	=  'joaopaulorosadelima@gmail.com';	// Pega o valor do campo Email
		$Mensagem	= "gfdgfdfdgfdgfdgfdgf";	// Pega os valores do campo Mensagem

		//configs
		global $error;
		$mail = new PHPMailer();
		$mail->IsSMTP(true); 		// Define que a mensagem será SMTP
		$mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
		$mail->SMTPSecure = 'tls';	// SSL REQUERIDO pelo GMail
		$mail->Port = 587; //587
		$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
		$mail->SMTPDebug = 1;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas

		$mail->Username = GUSER;
		$mail->Password = GPWD;

		$mail->AddAddress($EmailPara); //para quem vai enviar

		$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

		$mail->Subject  = "Mensagem Teste"; // Assunto da mensagem 
		$mail->Body = "Este é o corpo da mensagem de teste, em <b>HTML</b>!  :)"; //PODE SER HTML
		$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)"; //NAO SEI EXATAMENTE

		//$doc = $pdf->Output('', 'S');
		$mail->AddStringAttachment($doc, 'icombH5-'.$nomeAluno.'.pdf', 'base64', 'application/pdf');

		$enviado = $mail->Send(); //envia
		// Limpa os destinatários e os anexos
		$mail->ClearAllRecipients();
		$mail->ClearAttachments();

		if ($enviado) {
		  echo "E-mail enviado com sucesso!";
		  redirect('exercicios');
		}
		else {
		  echo "Não foi possível enviar o e-mail.";
		  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
		}
	}


}
