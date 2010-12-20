<?php

class Index extends Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->library('ion_auth');
		$this->load->helper('form');
	}
	
	/**
	 * @todo use built-in set_error() method by ion-auth
	 * @todo use set_value() on form fields
	 */
	
	function index()
	{	
		if ($this->ion_auth->logged_in())
		{
			redirect('user');
		}
		
		$this->load->view('index/view', array('page_title' => 'Welcome'));
	}
	
	function create()
	{
	  
    if (empty($this->input->post('z3d')) || empty($this->input->post('z3d_pass')))
    {
      redirect('index');
    }
    
		$this->load->library('form_validation');
		
		if ($this->ion_auth->logged_in())
		{
			redirect('user');
		}
		
		$this->form_validation->set_rules('z3d', 'Email', 'trim|required|valid_email|email_check');
		$this->form_validation->set_rules('z3d_pass', 'Z3D password', 'trim|required|matches[z3d_pass_conf]');
		$this->form_validation->set_rules('z3d_pass_conf', 'Z3D confirm password', 'trim|required');
		
		$email = $this->input->post('z3d');
		$pass = $this->input->post('z3d_pass');
		
		$tmp = explode('@', $email);
		$user = $tmp[0];
		
		if ($this->form_validation->run() == false)
		{
			$this->load->view('index/view', array('page_title' => 'Welcome'));
		}
		else
		{
			if ($this->ion_auth->register($user, $pass, $email, array()))
			{
				$this->load->view('index/create_view', array('page_title' => 'Create a new Z3D'));
			}
			else
			{
				$this->load->view('base', array('page_title' => 'Error', 'string' => 'That email already exists. Please choose a different one. ' . anchor('index', 'Go Back')));
			}
		}
	}

}

/* End of file index.php */
/* Location: ./system/application/controllers/index.php */