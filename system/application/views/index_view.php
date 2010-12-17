<!DOCTYPE html>
<html>
	<head>
	<title>Welcome to Z3D!</title>
	<link href="<?=base_url()?>assets/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>Welcome to Z3D!</h1>
		
		<p>Get started by creating your very own Z3D and giving it a password:</p>
		
		<?=form_open('index/create')?>
		
		Z3D name: <?=form_input('z3d')?>
		<br />
		Z3D password: <?=form_password('z3d_pass')?>
		<br />
		<?=form_submit('z3d_sub', 'Submit')?>
		
		<?=form_close()?>
		
		<p>Already have a Z3D? <?=anchor('index/login', 'Log in to it here')?></p>
		
		<p><br />Page rendered in {elapsed_time} seconds using {memory_usage} of memory</p>
		
	</body>
</html>