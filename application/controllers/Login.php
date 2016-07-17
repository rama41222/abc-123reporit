<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function view($page = 'login'){

		if(! file_exists('application/views/'.$page.'.php')){
			show_404();
		}
		$this->load->view($page);
	}

}

?>