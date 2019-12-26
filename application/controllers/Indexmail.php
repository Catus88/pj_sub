<?php 

/**
 * 
 */
class Indexmail extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{

		$data["no"]  =  array('data1' => "aas" ,"data2" => "bbf" );                           
		$this->load->view("template/header");
		$this->load->view("page/index_mail",$data);
		$this->load->view("template/footer");

	}


}




 ?>