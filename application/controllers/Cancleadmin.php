<?php 

/**
 * 
 */
class Cancleadmin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{

		$this->load->view("template/header");
		$this->load->view("page/cancle_admin");
		$this->load->view("template/footer");

	}


}




 ?>