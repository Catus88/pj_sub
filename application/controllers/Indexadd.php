<?php 

/**
 * 
 */
class Indexadd extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{

		$this->load->view("template/header");
		#$this->load->view("page/index_add");
		$this->load->view("page/form");
		$this->load->view("template/footer");

	}


}




 ?>