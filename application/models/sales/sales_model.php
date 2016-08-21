<?php defined('BASEPATH') OR exit('No direct script access allowed');

class sales_model extends CI_Model{


	function GetSalesOrders(){

		$query=$this->db->get('Orders');
		return $query->result();
	}
}


	

?>
