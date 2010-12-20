<?php $this->load->view('header') ?>
		
		<p>
			<span class="strong">Overview</span> <br />
			An overview of the basic information your account holds
		</p>
		
		<div class="group">
			<p>
				Username: <?=$this->ion_auth->get_user()->username?> <br />
				Email: <?=$this->ion_auth->get_user()->email?> <br />
				Created on: <?=$this->ion_auth->get_user()->created_on?> <br />
				Last login: <?=$this->ion_auth->get_user()->last_login?> <br />
				Active: <?=$this->ion_auth->get_user()->active?> <br />
				Group: <?=$this->ion_auth->get_user()->group_id?> <?=$this->ion_auth->get_user()->group?> (<?=$this->ion_auth->get_user()->group_description?>) <br />
			</p>
		</div>
		
		<p>
			<span class="strong">Options</span> <br />
			Change your basic account information and perform other actions
		</p>
		
		<div class="group">
			<p>
				<?=anchor('auth/change_password', 'Change password')?> | 
				<?=anchor('auth/deactivate', 'Deactivate account')?>
			</p>
		</div>
		

<?php $this->load->view('footer') ?>