<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,400italic' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<?php echo $this->Html->charset(); ?>
	<title>GameApp - 
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->css('reset.css');
		echo $this->Html->css('default.css');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer" class="clear">
			
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
