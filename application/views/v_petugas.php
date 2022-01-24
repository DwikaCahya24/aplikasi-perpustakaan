<div class="col-sm-12">
	<div class="thumbnail">
		<div class="caption">
			<h2>Data Petugas</h2>
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
			<th>Nama Petugas</th>
			<th>Jabatan Petugas</th>
			<th>No Telp Petugas</th>
			<th>Alamat</th>
			
			<th><a href="<?php echo base_url();?>index.php/petugas/open_form" class="btn btn-success">Tambah Data</a></th>
		</tr>
			<?php 
			$no = 1;

			foreach($list_petugas->result() as $rowPetugas){
				?>
			<tr>
				<td><?php echo $no; ?></td>
				
				<td><?php echo $rowPetugas->nama_petugas; ?></td>
				<td><?php echo $rowPetugas->jabatan_petugas; ?></td>
				
				<td><?php echo $rowPetugas->no_telp_petugas; ?></td>
				<td><?php echo $rowPetugas->alamat_petugas; ?></td>
				
				<td><a href="<?php echo 
		base_url();?>index.php/petugas/open_form/<?php echo $rowPetugas->id_petugas;?>" class="btn btn-primary">Edit</a>
				<a href="<?php echo base_url();?>index.php/petugas/delete/<?php echo $rowPetugas->id_petugas;?>" class="btn btn-danger">Hapus</a>
				</td>
			</tr>

			<?php 
			$no++;
			}?>
	</table>
	</div>
</div>