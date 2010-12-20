<p id="nav">
	<?php if ($this->ion_auth->logged_in()): ?>
		Logged in as <span class="strong"><?=$this->ion_auth->get_user()->username?></span>
		| <?=anchor('auth/logout', 'Log out')?>
	<?php else: ?>
		<?=anchor('auth/login', 'Log in')?> or
		<?=anchor('index', 'Create an account')?>
	<?php endif; ?>
	
</p>