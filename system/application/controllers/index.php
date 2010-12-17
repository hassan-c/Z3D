<?php

class Index extends Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * @todo Create view skeleton for all pages
	 */
	
	function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('z3d', 'Z3D name', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('z3d_pass', 'Z3D password', 'trim|required');
		
		if ($this->form_validation->run() == false)
		{
			$this->load->view('index_view');
		}
		else
		{
			$this->load->view('index_create_view');
		}
	}
	
	function create()
	{
		$this->load->view('index_create_view');
	}
	
	function login()
	{
		$this->load->view('index_login_view');
	}
}

/* End of file index.php */
/* Location: ./system/application/controllers/index.php */