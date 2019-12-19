<?php 

/**
 * 
 */
class Search_edit_page1 extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{

		$this->load->view("template/header");
		$this->load->view("page/search_edit_page1");
		$this->load->view("template/footer");

	}


}




 ?>