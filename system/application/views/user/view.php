<?php $this->load->view('header') ?>
		
		<p>
			<span class="strong">Overview</span> <br />
			An overview of the basic information your account holds
		</p>
		
		<div class="group">
			<p>
				<span class="strong">Username:</span> <?=$this->ion_auth->get_user()->username?> <br />
				<span class="strong">Email:</span> <?=$this->ion_auth->get_user()->email?> <br />
				<span class="strong">Created on:</span> <?=$this->ion_auth->get_user()->created_on?> <br />
				<span class="strong">Last login:</span> <?=$this->ion_auth->get_user()->last_login?> <br />
				<span class="strong">Active:</span> <?=$this->ion_auth->get_user()->active?> <br />
				<span class="strong">Group:</span> <?=$this->ion_auth->get_user()->group_id?>: <?=$this->ion_auth->get_user()->group?> (<?=$this->ion_auth->get_user()->group_description?>) <br />
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