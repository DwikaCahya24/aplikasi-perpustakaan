<div class="col-sm-12">
		
		<div class="caption">
			<h3> Form Petugas </h3>
		</div>
	<form action="<?php echo base_url();?>index.php/petugas/save" method="POST">
		<input type="hidden" name="id_petugas" value="<?php echo (isset($row->id_petugas)?$row->id_petugas:'');?>" class="form-control">

		<table class="table" width="100%">
			
				<td>Nama Petugas</td>
				<td>:</td>
				<td><input type="text" name="nama_petugas" value="<?php echo (isset($row->nama_petugas)?$row->nama_petugas:'');?>" class="form-control" required></td>
			</tr>
			
			
			<tr>
				<td>Jabatan Petugas</td>
				<td>:</td>
				<td><input type="text" name="jabatan_petugas" value="<?php echo (isset($row->nama_petugas)?$row->jabatan_petugas:'');?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Telephone</td>
				<td>:</td>
				<td><input type="text" name="no_telp_petugas" value="<?php echo (isset($row->no_telp_petugas)?$row->no_telp_petugas:'');?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat_petugas" class="form-control"><?php echo (isset($row->alamat_petugas)?$row->alamat_petugas:'');?></textarea>
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