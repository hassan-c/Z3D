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
		$this->load->view('index_view');
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