<?php 

/**
 * 
 */
class Submit extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{

		$this->load->view("template/header");
		$this->load->view("page/submit");
		$this->load->view("template/footer");

	}
	public function testpost()
	{

		$this->load->view("template/header");
		$this->load->view("page/testpost");
		$this->load->view("template/footer");

	}

}




 ?>