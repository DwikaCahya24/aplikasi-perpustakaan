<div class="col-sm-12">
	<div class="thumbnail">
		<div class="caption">
			<h2>Data Anggota</h2>
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
			<th>Kode Anggota</th>
			<th>Nama Anggota</th>
			<th>Jenis Kelamin</th>
			<th>Jurusan Anggota</th>
			<th>No Telepon</th>
			<th>Alamat</th>
			<th><?php $t = $this->session->userdata('nama'); if($t=="admin"){  ?>
				<a href="<?php echo base_url();?>index.php/anggota/open_form" class="btn btn-success">Tambah Data</a><?php }else{ ?>
					
				<?php } ?></th>
		</tr>
			<?php 
			$no = 1;

			foreach($list_anggota->result() as $rowAnggota){
				?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $rowAnggota->kode_anggota; ?></td>
				<td><?php echo $rowAnggota->nama_anggota; ?></td>
				<td><?php echo $rowAnggota->jk_anggota; ?></td>
				<td><?php echo $rowAnggota->jurusan_anggota; ?></td>
				<td><?php echo $rowAnggota->no_telp_anggota; ?></td>
				<td><?php echo $rowAnggota->alamat_anggota; ?></td>
				
				<td><?php $t = $this->session->userdata('nama'); if($t=="admin"){  ?>
					<a href="<?php echo 
		base_url();?>index.php/anggota/open_form/<?php echo $rowAnggota->id_anggota;?>" class="btn btn-primary">Edit</a>
				<a href="<?php echo base_url();?>index.php/anggota/delete/<?php echo $rowAnggota->id_anggota;?>" class="btn btn-danger">Hapus</a><?php }else{ ?>
					
				<?php } ?></th>
				</td>
			</tr>

			<?php 
			$no++;
			}?>
	</table>
	</div>
</div>