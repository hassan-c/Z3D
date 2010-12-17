<?php

class Index extends Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->helper('form');
		$this->load->view('index_view');
	}
}

/* End of file index.php */
/* Location: ./system/application/controllers/index.php */