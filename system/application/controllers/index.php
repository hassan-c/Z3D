<?php

class Index extends Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->library('ion_auth');
	}
	
	/**
	 * @todo Create view skeleton for all pages
	 * @todo regex-censor-list
	 * @todo replace echo in create() - add var in view and pass
	 * @todo use set_value() on form fields
	 */
	
	function index()
	{
		$this->load->helper('form');
		
		if ($this->ion_auth->logged_in())
		{
			redirect('user');
		}
		
		$this->load->view('index/view', array('page_title' => 'Welcome'));
	}
	
	function create()
	{	
		$this->load->library('form_validation');
		
		if ($this->ion_auth->logged_in())
		{
			redirect('user');
		}
		
		$this->form_validation->set_rules('z3d', 'Z3D name', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('z3d_pass', 'Z3D password', 'trim|required|matches[z3d_pass_conf]');
		$this->form_validation->set_rules('z3d_pass_conf', 'Z3D confirm password', 'trim|required');
		
		$user = $this->input->post('z3d');
		$pass = $this->input->post('z3d_pass');
		
		if ($this->form_validation->run() == false)
		{
			$this->load->view('index/view', array('page_title' => 'Welcome'));
		}
		else
		{
			if ($this->ion_auth->register($user, $pass, $user.'_user@hassanc.co.uk', array()))
			{
				$this->load->view('index/create_view', array('page_title' => 'Create a new Z3D'));
			}
			else
			{
				echo '<p>That username already exists. Please choose a different one.</p>' . anchor('index', 'Go Back');
			}
		}
	}
	
	function login()
	{
		$this->load->library('form_validation');
		
		if ($this->ion_auth->logged_in())
		{
			redirect('user');
		}
		
		$this->form_validation->set_rules('z3d', 'Z3D name', 'trim|required');
		$this->form_validation->set_rules('z3d_pass', 'Z3D password', 'trim|required');
		
		$user = $this->input->post('z3d');
		$pass = $this->input->post('z3d_pass');
		$remember = $this->input->post('remember');
		
		if ($this->form_validation->run() == false)
		{
			$this->load->view('index/login_view', array('page_title' => 'Log in'));
		}
		else
		{
			if ($this->ion_auth->login($user, $pass, $remember))
			{
				redirect('user');
			}
			else
			{
				$this->load->view('index/login_view', array('page_title' => 'Log in'));
			}
		}
	}
	
	function logout()
	{
		$this->ion_auth->logout();
		
		redirect('index/login');
	}
}

/* End of file index.php */
/* Location: ./system/application/controllers/index.php */