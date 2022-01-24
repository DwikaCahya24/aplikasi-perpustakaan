<div class="col-sm-12">
	<div class="thumbnail">
		<div class="caption">
			<h2>Data Pengembalian</h2>
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
			<th>Tanggal Pengembalian</th>
			<th>Denda</th>
			<th>Kode Buku</th>
			<th>Nama Anggota</th>
			<th>ID Petugas</th>
			<th>Tanggal Kembali</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
			<?php
				// hanya menampilkan data yang terlambat
$conn = new mysqli('localhost', 'root', '', 'perpustakaan');

				$q = $conn->query("SELECT * FROM pengembalian INNER JOIN peminjaman INNER JOIN anggota INNER JOIN buku WHERE (peminjaman.id_buku = pengembalian.id_buku) AND (anggota.id_anggota = peminjaman.id_anggota) AND (peminjaman.id_buku = buku.id_buku) ");
		
				$no = 1;
				while($r = $q->fetch_assoc()) {
					// untuk menghitung selisih hari terlambat
					$t = date_create($r['tanggal_pengembalian']);
					$n = date_create(date('Y-m-d'));
					$terlambat = date_diff($t, $n);
					$hari = $terlambat->format("%a");

					// menghitung denda
					$denda = $hari * 1000;
				?>		
			<tr>
				<td><?php echo $no; ?></td>
				<td><?= $r['tanggal_pengembalian'] ?> </td>
				<td><?= $denda ?></td>			
				<td><?= $r['kode_buku'] ?> </td>
				<td><?= $r['nama_anggota'] ?></td>
				<td><?= $r['id_petugas'] ?></td>
				<td><?= $r['tgl_kembali'] ?></td>
				<td><?= $r['ket'] ?> </td>

				<td><a href="<?php echo 
		base_url();?>index.php/pengembalian/open_form/<?php echo $r['id_pengembalian']?>" class="btn btn-danger">Kembali</a>
			
				</td>
			</tr>

			<?php 
			$no++;
			}?>
	</table>
	</div>
</div>