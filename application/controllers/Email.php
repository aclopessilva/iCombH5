<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function email_controller()
	{	
		$data = array('nUsuario' => $this->input->post('nomeUsuario'),
		'email' => $this->input->post('emailDestino'));

		$nUsuario = $this->input->post('nomeUsuario');
		$email = $this->input->post('emailDestino');
		
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
		
		$this->email->initialize($config);	
		$this->email->from("iCombH5@mail.com", 'iCombH5');
		$this->email->subject("iCombH5, ".$nUsuario);
		$this->email->to($email); 
		
		$html = $this->load->view('email/templateMail.php',$data,true);		
	  	$this->email->message($html);
	  
	 	$this->email->attach('c:/xampp/htdocs/icombh5/user_guide/img/imagens_Baralho/AsCopas.png');
		$this->email->send();

		echo $this->email->print_debugger();
		redirect('exercicios');
		}


}
