<?php

if (!$this->ion_auth->logged_in())
{
	redirect('index/login');
}

?>

<?php $this->load->view('header') ?>
		
		<p>
			<span class="strong">ID:</span> <?=$this->ion_auth->get_user()->id)?> <br />
		</p>

<?php $this->load->view('footer') ?>