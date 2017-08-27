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
  					'wordwrap' => TRUE
	);



$this->email->initialize($config);

	$this->email->from("usuario@mail.com", 'Meu E-mail');
	$this->email->subject("Assunto do e-mail");
	$this->email->to("destinatario@mail.com"); 
	$this->email->message("Aqui vai a mensagem ao seu destinatário");
	$this->email->send();

	echo $this->email->print_debugger();
	}


}
