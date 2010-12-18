<?php

if (!$this->ion_auth->logged_in())
{
	redirect('index/login');
}

?>

<?php $this->load->view('header') ?>
		
		<p>
			<span class="strong">Overview</span> <br />
			An overview of the basic information that your account holds:
		</p>
		
		<div class="group">
			<p>
				ID: <?=$this->ion_auth->get_user()->id?> <br />
				Username: <?=$this->ion_auth->get_user()->username?> <br />
				Created on: <?=$this->ion_auth->get_user()->created_on?> <br />
				Last log in: <?=$this->ion_auth->get_user()->last_login?> <br />
				Group: <?=$this->ion_auth->get_user()->group?> <br />
			</p>
		</div>
		
		<div class="group">
			<p>
				
			</p>
		</div>
		

<?php $this->load->view('footer') ?>