<?php $this->load->view('header') ?>
		
		<p>
			<span class="strong">Overview</span> <br />
			An overview of the basic information your account holds
		</p>
		
		<div class="group">
			<p>
				ID: <?=$this->ion_auth->get_user()->id?> <br />
				Username: <?=$this->ion_auth->get_user()->username?> <br />
				Created on: <?=$this->ion_auth->get_user()->created_on?> <br />
				Last login: <?=$this->ion_auth->get_user()->last_login?> <br />
				Group: <?=$this->ion_auth->get_user()->group?> <br />
			</p>
		</div>
		
		<p>
			<span class="strong">Options</span> <br />
			{options_description}
		</p>
		
		<div class="group">
			<p>
				Nothing here yet. Move along...
			</p>
		</div>
		

<?php $this->load->view('footer') ?>