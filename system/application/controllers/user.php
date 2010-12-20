<?php

class User extends Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->library('ion_auth');
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('index/login');
		}
	}
	
	function index()
	{	
		$this->load->view('user/view', array('page_title' => 'User Control Panel'));
	}
	
	function desmond()
	{
		$message = 'DESMOND THE MOON BEAR';
		$this->load->view('base', array('page_title' => $message, 'string' => $message));
	}
  
}

/* End of file user.php */
/* Location: ./system/application/controllers/user.php */