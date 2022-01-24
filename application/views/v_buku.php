<div class="col-sm-12">
	<div class="thumbnail">
		<div class="caption">
			<h2>Data Buku</h2>
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
			<th>Kode Buku</th>
			<th>Judul Buku</th>
			<th>Penulis Buku</th>
			<th>Penerbit Buku</th>
			<th>Tahun Penerbit</th>
			<th>Stok</th>
			<th><?php $t = $this->session->userdata('nama'); if($t=="admin"){  ?>
				<a href="<?php echo base_url();?>index.php/buku/open_form" class="btn btn-success">Tambah Data</a>
				<?php }else{ ?>
					
				<?php } ?></th>
		</tr>
			<?php 
			$no = 1;

			foreach($list_buku->result() as $rowBuku){
				?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $rowBuku->kode_buku; ?></td>
				<td><?php echo $rowBuku->judul_buku; ?></td>
				<td><?php echo $rowBuku->penulis_buku; ?></td>
				<td><?php echo $rowBuku->penerbit_buku; ?></td>
				<td><?php echo $rowBuku->tahun_penerbit; ?></td>
				<td><?php echo $rowBuku->stok; ?></td>
				
				<td>

<?php $t = $this->session->userdata('nama'); if($t=="admin"){  ?>
					<a href="<?php echo 
		base_url();?>index.php/buku/open_form/<?php echo $rowBuku->id_buku;?>" class="btn btn-primary">Edit</a>
				<a href="<?php echo base_url();?>index.php/buku/delete/<?php echo $rowBuku->id_buku;?>" class="btn btn-danger">Hapus</a>
				<?php }else{ ?>
					
				<?php } ?>
				</td>
			</tr>

			<?php 
			$no++;
			}?>
	</table>
	</div>
</div>