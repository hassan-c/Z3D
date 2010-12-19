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
		$this->load->view('blank', array('string' => 'DESMOND THE MOON BEAR.'));
	}
}