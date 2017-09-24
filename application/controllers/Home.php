<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('home/get');
	}
	public function exercicios()
	{
		$this->load->view('exercicio/get');
	}

	public function email_controller()
	{
		$this->load->library('email');

		$config = Array('protocol' => 'smtp',
	  					'smtp_host' => 'smtp.mailtrap.io',
	  					'smtp_port' => 2525,
	  					'smtp_user' => '1f3c1f8caf8b9c',
	  					'smtp_pass' => 'c32e208bf17fe2',
	  					'crlf' => "\r\n",
	  					'newline' => "\r\n",
	  					'mailpath' => '/ usr / sbin / sendmail',
	  					'charset' =>'utf-8',
	  					'mailtype'=>'html',
	  					'wordwrap' => TRUE
		);
		
		$data=true;
		$this->email->initialize($config);		

		$this->email->from("usuario@mail.com", 'Meu E-mail');
		$this->email->subject("Assunto do e-mail");
		$this->email->to("destinatario@mail.com"); 
			
		$html = $this->load->view('email/emailTeste.php',$data,TRUE);		
	  	$this->email->message($html); 
		
	 	$this->email->attach('c:/xampp/htdocs/icombh5/user_guide/img/imagens_Baralho/AsCopas.png');
		$this->email->send();

		echo $this->email->print_debugger();
		redirect('exercicios');
		}


}
