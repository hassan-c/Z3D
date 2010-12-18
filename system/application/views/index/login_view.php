<?php $this-load->view('header') ?>

		<h1>Z3D: <?=$page_title?></h1>
		
		<p>Log in to your Z3D account:</p>
		
		<div class="red"><?=validation_errors()?></div>
		
		<?=form_open('index/login_process')?>
		
		Z3D name: <?=form_input('z3d')?>
		<br />
		Z3D password: <?=form_password('z3d_pass')?>
		<br />
		<?=form_submit('z3d_sub', 'Submit')?>
		
		<?=form_close()?>
		
		<p>Don't have a Z3D account? <?=anchor('index/signup', 'Sign up for one')?></p>

<?php $this->load->view('footer') ?>