<?php $this->load->view('header') ?>
		
		<p>Log in to your Z3D account:</p>
		
		<div class="red"><?=validation_errors()?></div>
		
		<?=form_open('index/login')?>
		
		Z3D name: <?=form_input('z3d')?> <br />
		Z3D password: <?=form_password('z3d_pass')?> <br />
		Remember me: <?=form_checkbox('remember')?> <br />
		<?=form_submit('z3d_sub', 'Submit')?>
		
		<?=form_close()?>
		
		<p>Don't have a Z3D account? <?=anchor('index', 'Sign up for one')?></p>

<?php $this->load->view('footer') ?>