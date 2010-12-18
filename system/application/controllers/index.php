<?php

class Index extends Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * @todo Create view skeleton for all pages
	 * @todo regex-censor-list
	 */
	
	function index()
	{
		$this->load->helper('form');
		$this->load->view('index/view');
	}
	
	function create()
	{	
		$this->load->library('form_validation');
		$this->load->library('ion_auth');
		
		$this->form_validation->set_rules('z3d', 'Z3D name', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('z3d_pass', 'Z3D password', 'trim|required|matches[z3d_pass_conf]');
		$this->form_validation->set_rules('z3d_pass_conf', 'Z3D confirm password', 'trim|required');
		
		$user = $this->input->post('z3d');
		$pass = $this->input->post('z3d_pass');
		$pass_conf = $this->input->post('z3d_pass_conf');
		
		if ($this->form_validation->run() == false)
		{
			$this->load->view('index/view');
		}
		else
		{
			if ($this->ion_auth->register($user, $pass, 'user@hassanc.co.uk', ''))
			{
				$this->load->view('index/create_view');
			}
		}
	}
	
	function login()
	{
		$this->load->library('form_validation');
		$this->load->library('ion_auth');
		
		$this->form_validation->set_rules('z3d', 'Z3D name', 'trim|required');
		$this->form_validation->set_rules('z3d_pass', 'Z3D password', 'trim|required');
		
		$user = $this->input->post('z3d');
		$pass = $this->input->post('z3d_pass');
		
		if ($this->form_validation->run() == false)
		{
			$this->load->view('index/login_view');
		}
		else
		{
			if ($this->ion_auth->login($user, $pass, 'user@hassanc.co.uk', ''))
			{
				$this->load->view('user/view');
			}
		}
		
		$this->load->view('index/login_view');
	}
	
	function logout()
	{
		$this->load->library('ion_auth');
		
		$this->ion_auth->logout();
	}
}

/* End of file index.php */
/* Location: ./system/application/controllers/index.php */