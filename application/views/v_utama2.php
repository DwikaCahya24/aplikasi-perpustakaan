<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<center><img src="<?php echo base_url(); ?>lo.png" height="150"><br>
	<div class="caption">
			<h3> Perpustakaan </h3>
		</div>
<div class="container" style="margin-top: 10px;margin-left: 40%;">
	<div class="row">

		<?php
			error_reporting(0);
			$this->load->view($content);
		?>
	</div>
</div>


</body>
</html>