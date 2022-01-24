<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url().'js/jquery-ui.css'?>">

</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
<?php $t = $this->session->userdata('nama'); if($t=="admin"){  ?>

	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<img src="<?php echo base_url(); ?>lo.png" height="50">
		<ul class="navbar-nav"> 
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/buku">Beranda</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/anggota">Data Anggota</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/buku">Data Buku</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/petugas">Data Petugas</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/rak">Data Rak</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/peminjaman">Data Peminjaman</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/pengembalian">Data Pengembalian</a></li>
		
		
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/login/logout">Logout</a></li>

		</ul>
<?php }else{ ?>
	<img src="<?php echo base_url(); ?>lo.png" height="50">
		<ul class="navbar-nav"> 
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/buku">Beranda</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/anggota">Data Anggota</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/buku">Data Buku</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/rak">Data Rak</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/peminjaman">Data Peminjaman</a></li>
		
		
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/login/logout">Logout</a></li>

		</ul>
<?php } ?>
	</div>
</div>
	
</nav>

<div class="container" style="margin-top: 10px;">
	<div class="row">
		<?php

			error_reporting(0);
			$this->load->view($content);
		?>
	</div>
</div>


<div class="text-center text-white p-3 bg-dark" >
	© Copyright 2022 Perpustakaan 
</div>

</body>
</html>