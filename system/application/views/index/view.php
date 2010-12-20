<?php $this->load->view('header') ?>
		
		<p>Get started by creating your very own Z3D and giving it a password:</p>
		
		<div class="red"><?=validation_errors()?></div>
		
		<?=form_open('index/create')?>
		
		Email: <?=form_input('z3d')?> <br />
		Z3D password: <?=form_password('z3d_pass')?> <br />
		Z3D confirm password: <?=form_password('z3d_pass_conf')?> <br />
		<?=form_submit('z3d_sub', 'Submit')?>
		
		<?=form_close()?>
		
		<p>Already have an account? <?=anchor('auth/login', 'Log in to it here')?></p>

<?php $this->load->view('footer') ?>