<div class="col-sm-12">
	<div class="thumbnail">
		<div class="caption">
			<h2>Data Rak</h2>
		</div>
	</div>


	<?php if ($this->session->flashdata('success') || $this->session->flashdata('warning')) {
	?>
		<?php if ($this->session->flashdata('success')) {?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<i class="fa fa-check sign"></i><?php echo $this->session->flashdata('success'); ?>
			</div>
			<?php } elseif ($this->session->flashdata('warning')) { ?>
				<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="fa fa-check sign"></i><?php echo $this->session->flashdata('warning'); ?>
				</div>
			<?php } ?>
		<?php } ?>

	<table class="table table-striped">
		<tr>
			<th>NO</th>
			<th>Nama Rak</th>
			<th>Lokasi Rak</th>
			<th>ID Buku</th>
			<th><?php $t = $this->session->userdata('nama'); if($t=="admin"){  ?><a href="<?php echo base_url();?>index.php/rak/open_form" class="btn btn-success">Tambah Data</a>

			<?php }else{ ?>
					
				<?php } ?></th></th>
		</tr>
			<?php 
			$no = 1;

			foreach($list_rak->result() as $rowRak){
				?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $rowRak->nama_rak; ?></td>
				<td><?php echo $rowRak->lokasi_rak; ?></td>
				<td><?php echo $rowRak->id_buku; ?></td>
				
				<td><?php $t = $this->session->userdata('nama'); if($t=="admin"){  ?><a href="<?php echo 
		base_url();?>index.php/rak/open_form/<?php echo $rowRak->id_rak;?>" class="btn btn-primary">Edit</a>
				<a href="<?php echo base_url();?>index.php/rak/delete/<?php echo $rowRak->id_rak;?>" class="btn btn-danger">Hapus</a>
				<?php }else{ ?>
					
				<?php } ?></th></td>
			</tr>

			<?php 
			$no++;
			}?>
	</table>
	</div>
</div>