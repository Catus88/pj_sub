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

		$data["tablevalue"] = "           
                                <tr>
                                    <td>test</td>
                                    <td>a</td>
                                    <td>c</td>
                                    <td>d</td>
                                    <td>f</td>
                                    <td>g</td>
                                    <td>h</td>
                                    <td>j</td>
                                    <td>k</td>
                                </tr> ";

		$this->load->view("template/header");
		$this->load->view("page/index_mail",$data);
		$this->load->view("template/footer");

	}


}




 ?>