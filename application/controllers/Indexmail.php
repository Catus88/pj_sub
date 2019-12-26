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

		$data["no"]  =   array('coulum1' => "radio",'coulum2'=>"umrno",'coulum3'=>"Date"
		                        ,'coulum4'=>"ddd",'coulum5'=>"ddd",'coulum6'=>"dddfff" 
		                    	,'coulum7'=>"ddd",'coulum8'=>"ddd",'coulum9'=>"dddfff");
		$this->load->view("template/header");
		$this->load->view("page/index_mail",$data);
		$this->load->view("template/footer");

	}


}




 ?>