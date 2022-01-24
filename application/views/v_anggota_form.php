<div class="col-sm-12">
		
		<div class="caption">
			<h3> Form Anggota </h3>
		</div>
	<form action="<?php echo base_url();?>index.php/anggota/save" method="POST">
		<input type="hidden" name="id_anggota" value="<?php echo (isset($row->id_anggota)?$row->id_anggota:'');?>" class="form-control">

		<table class="table" width="100%">
			<tr>
				<td>Kode Anggota</td>
				<td>:</td>
				<td><input type="text" name="kode_anggota" value="<?php echo (isset($row->kode_anggota)?$row->kode_anggota:'');?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Nama Anggota</td>
				<td>:</td>
				<td><input type="text" name="nama_anggota" value="<?php echo (isset($row->nama_anggota)?$row->nama_anggota:'');?>" class="form-control" required></td>
			</tr>
			
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<div class="form-check">
						<input type="radio" name="jk_anggota" value="Laki - laki" id="jk_anggota1" <?php echo $checked = ($row->jk_anggota == 'Laki - laki')?'checked':'checked'; ?>>
						<label class="form-check-label" for="jk_anggota1">
							Laki - laki
						</label>
					</div>
					<div class="form-check">
						<input type="radio" name="jk_anggota" value="Perempuan" id="jk_anggota2" <?php echo $checked = ($row->jk_anggota == 'Perempuan')?'checked':''; ?>>
						<label class="form-check-label" for="jk_anggota2">
							Perempuan
						</label>
					</div>
				</td>
			</tr>
			<tr>
				<td>Jurusan Anggota</td>
				<td>:</td>
				<td><input type="text" name="jurusan_anggota" value="<?php echo (isset($row->nama_anggota)?$row->jurusan_anggota:'');?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Telephone</td>
				<td>:</td>
				<td><input type="text" name="no_telp_anggota" value="<?php echo (isset($row->no_telp_anggota)?$row->no_telp_anggota:'');?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat_anggota" class="form-control"><?php echo (isset($row->alamat_anggota)?$row->alamat_anggota:'');?></textarea>
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