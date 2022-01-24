<div class="col-sm-12">
		
		<div class="caption">
			<h3> Form Buku </h3>
		</div>
	<form action="<?php echo base_url();?>index.php/buku/save" method="POST">
		<input type="hidden" name="id_buku" value="<?php echo (isset($row->id_buku)?$row->id_buku:'');?>" class="form-control">

		<table class="table" width="100%">
			<tr>
				<td>Kode Buku</td>
				<td>:</td>
				<td><input type="text" name="kode_buku" value="<?php echo (isset($row->kode_buku)?$row->kode_buku:'');?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Judul Buku</td>
				<td>:</td>
				<td><input type="text" name="judul_buku" value="<?php echo (isset($row->judul_buku)?$row->judul_buku:'');?>" class="form-control" required></td> 
			</tr>
			<tr>
				<td>Penulis Buku</td>
				<td>:</td>
				<td><input type="text" name="penulis_buku" value="<?php echo (isset($row->penulis_buku)?$row->penulis_buku:'');?>" class="form-control" required></td> 
			</tr>
		
			<tr>
				<td>Penerbit Buku</td>
				<td>:</td>
				<td><input type="text" name="penerbit_buku" value="<?php echo (isset($row->judul_buku)?$row->penerbit_buku:'');?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Tahun Penerbit</td>
				<td>:</td>
				<td><input type="text" name="tahun_penerbit" value="<?php echo (isset($row->tahun_penerbit)?$row->tahun_penerbit:'');?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td>
					<textarea name="stok" class="form-control"><?php echo (isset($row->stok)?$row->stok:'');?></textarea>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" class="btn btn-success" value="Simpan"></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>