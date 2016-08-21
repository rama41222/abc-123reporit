<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Swifter extends CI_Controller {

	public function index()
	{
		$this->load->view('member');
	}

	public function Order()
	{
		$this->load->view('order');
	}

		public function Inventory()
	{
		$this->load->view('member');
	}

	public function Package()
	{
		$this->load->view('member');
	}

	public function Sales()
	{
		$this->load->view('sales/salesorder');
	}

}


