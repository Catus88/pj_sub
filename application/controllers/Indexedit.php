<?php 

/**
 * 
 */
class Indexedit extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{

		$this->load->view("template/header");
		$this->load->view("page/index_edit");
		$this->load->view("template/footer");

	}


}




 ?>