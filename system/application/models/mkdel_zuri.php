<?php

class Zuri extends Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function title($part = 2)
	{
		return ucfirst($this->uri->segment($part));
	}
}