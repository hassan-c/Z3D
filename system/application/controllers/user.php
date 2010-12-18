<?php

class User extends Controller {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->library('ion_auth');
		
		$this->load->view('user/view', array('page_title' => 'User Control Panel'));
	}
	
	function desmond()
	{
		echo 'DESMOND THE MOON BEAR';
	}
}