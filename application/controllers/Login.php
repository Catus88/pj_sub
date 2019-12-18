<?php 

/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{

		$this->load->view("page/login.php");

	}
	public function authen()
	{

		print_r($this->input->post());

	}
 


}




 ?>