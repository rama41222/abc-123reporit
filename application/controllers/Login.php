<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function view(){

		$this->getLogin('login');
	}

	public function getLogin($page){

		if(! file_exists('application/views/'.$page.'.php')){
			show_404();
		}
		$this->load->view($page);

	}
	public function members(){

		$this->load->view('member');


	}

	public function logMeIn(){
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		
		if($this->form_validation->run()){
			$this->members();	
		}else{
			$this->load->view('login');
		}
	}
	

}

?>