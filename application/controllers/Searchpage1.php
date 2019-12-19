<?php 

/**
 * 
 */
class Searchpage1 extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{

		$this->load->view("template/header");
		$this->load->view("page/search_page1");
		$this->load->view("template/footer");

	}


}




 ?>