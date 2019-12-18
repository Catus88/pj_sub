<?php 

/**
 * 
 */
class Create extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{

		$this->load->view("template/header");
		$this->load->view("page/create_page");
		$this->load->view("template/footer");

	}


}




 ?>