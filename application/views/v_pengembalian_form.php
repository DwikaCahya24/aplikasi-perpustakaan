<div class="col-sm-12">
		
		<div class="caption">
			<h3> Form Pengembalian </h3>
		</div>
	<form action="<?php echo base_url();?>index.php/pengembalian/save" method="POST">
		<input type="hidden" name="id_pengembalian" value="<?php echo (isset($row->id_pengembalian)?$row->id_pengembalian:'');?>" class="form-control">

		<table class="table" width="100%">
			<tr>
				<td>Tanggal Pinjam</td>
				<td>:</td>
				<td><input type="date" name="tanggal_pinjam" value="<?php echo (isset($row->tanggal_pinjam)?$row->tanggal_pinjam:'');?>" readonly class="form-control" required></td>
			</tr>
			<tr>
				<td>Tanggal Kembali</td>
				<td>:</td>
				<td><input type="date" name="tanggal_pengembalian" value="<?php echo (isset($row->tanggal_kembali)?$row->tanggal_kembali:'');?>" class="form-control" readonly required></td> 
			</tr>
			<tr>
				<td>ID Buku</td>
				<td>:</td>
				<td><input type="text" value="ID Buku : <?php echo (isset($row->id_buku)?$row->id_buku:'');?> -- Kode Buku : <?php echo (isset($row->kode_buku)?$row->kode_buku:'');?> -- Nama Buku : <?php echo (isset($row->judul_buku)?$row->judul_buku:'');?>" class="form-control" required readonly>
					<input type="text" name="id_buku" value="<?php echo (isset($row->id_buku)?$row->id_buku:'');?>" class="form-control" required></td> 
			</tr>
		
			<tr>
				<td>ID Anggota</td>
				<td>:</td>
				<td><input type="text" value="ID Anggota : <?php echo (isset($row->id_anggota)?$row->id_anggota:'');?> -- Nama Anggota : <?php echo (isset($row->nama_anggota)?$row->nama_anggota:'');?>" class="form-control" required readonly><input type="text" name="id_anggota" value="<?php echo (isset($row->id_anggota)?$row->id_anggota:'');?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>ID Petugas</td>
				<td>:</td>
				<td><input type="text" name="id_petugas" value="<?php echo (isset($row->id_petugas)?$row->id_petugas:'');?>" readonly class="form-control" required></td>
			</tr>
			<tr>
				<td>Tanggal Pengembalian</td>
				<td>:</td>
				<td><input type="date" name="tgl_kembali" value="<?php echo date('Y-m-d');?>" class="form-control" readonly required></td> 
			</tr>

			<tr>
				<td><input type="submit" name="submit" class="btn btn-success" value="Simpan"></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>