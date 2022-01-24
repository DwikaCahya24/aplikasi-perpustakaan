<div class="col-sm-12">
	<div class="thumbnail">
		<div class="caption">
			<h2>Data Peminjaman</h2>
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
			<th>Tanggal Peminjaman</th>
			<th>Tanggal Kembali</th>
			<th>Kode Buku</th>
			<th>Judul Buku</th>
			<th>Nama Anggota</th>
			<th>ID Petugas</th>
			
			<th><?php $t = $this->session->userdata('nama'); if($t=="admin"){  ?><a href="<?php echo base_url();?>index.php/peminjaman/open_form" class="btn btn-success">Tambah Data</a><?php }else{ ?>
					
				<?php } ?></th>
		</tr>
			<?php 
			$no = 1;

			foreach($list_peminjaman->result() as $rowPeminjaman){
				?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $rowPeminjaman->tanggal_pinjam; ?></td>
				<td><?php echo $rowPeminjaman->tanggal_kembali; ?></td>
				<td><?php echo $rowPeminjaman->kode_buku; ?></td>
				<td><?php echo $rowPeminjaman->judul_buku; ?></td>
				<td><?php echo $rowPeminjaman->nama_anggota; ?></td>
				<td><?php echo $rowPeminjaman->id_petugas; ?></td>
				
				<td><?php $t = $this->session->userdata('nama'); if($t=="admin"){  ?><a href="<?php echo 
		base_url();?>index.php/peminjaman/open_form/<?php echo $rowPeminjaman->id_peminjaman;?>" class="btn btn-primary">Edit</a>
				<a href="<?php echo base_url();?>index.php/peminjaman/delete/<?php echo $rowPeminjaman->id_peminjaman;?>" class="btn btn-danger">Hapus</a><?php }else{ ?>
					
				<?php } ?>
				</td>
			</tr>

			<?php 
			$no++;
			}?>
	</table>
	</div>
</div>