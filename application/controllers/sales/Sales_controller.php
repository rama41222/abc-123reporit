<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_controller extends CI_Controller{


	public function __construct(){

		parent::__construct();
		$this->load->model('sales/sales_model','m');
	}

	public function index(){
		$data['salesdata'] = $this->m->GetSalesOrders();
		$this->load->view('sales/salesorder', $data);
	}

	public function edit(){

	$this->load->view('sales/editsalesorder');
	}
}


	

?>
