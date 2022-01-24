<div class="col-sm-12">
		
		<div class="caption">
			<h3> Form Peminjaman </h3>
		</div>
	<form action="<?php echo base_url();?>index.php/peminjaman/save" method="POST">
		<input type="hidden" name="id_peminjaman" value="<?php echo (isset($row->id_peminjaman)?$row->id_peminjaman:'');?>" class="form-control">

		<table class="table" width="100%">
	<tr>
				<td>Tanggal Pinjam</td>
				<td>:</td>
				<td><input type="date" name="tanggal_pinjam" value="<?php echo (isset($row->tanggal_pinjam)?$row->tanggal_pinjam:'');?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Tanggal Kembali</td>
				<td>:</td>
				<td><input type="date" name="tanggal_kembali" value="<?php echo (isset($row->tanggal_kembali)?$row->tanggal_kembali:'');?>" class="form-control" required></td> 
			</tr>
			<tr>
				<td>ID Buku</td>
				<td>:</td>
				<td><input type="text" name="kode_buku" id="kode_buku" placeholder="Example : B1-dst" value="<?php echo (isset($row->id_buku)?$row->id_buku:'');?>" class="form-control" required><input type="text" name="id_buku" value="<?php echo (isset($row->id_buku)?$row->id_buku:'');?>" class="form-control" required></td> 
			</tr>
			<tr>
				<td>ID Anggota</td>
				<td>:</td>
				<td><input type="text" name="kode_anggota" id="kode_anggota" placeholder="Example : K1-dst" value="<?php echo (isset($row->tanggal_kembali)?$row->id_anggota:'');?>" class="form-control" required><input type="text" name="id_anggota" value="<?php echo (isset($row->id_anggota)?$row->id_anggota:'');?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>ID Petugas</td>
				<td>:</td>
				<td><input type="text" name="nama_petugas" id="nama_petugas" placeholder="Example : Agung " value="<?php echo (isset($row->id_petugas)?$row->id_petugas:'');?>" class="form-control" required><input type="text" name="id_petugas" value="<?php echo (isset($row->id_petugas)?$row->id_petugas:'');?>" class="form-control" required></td>
			</tr>
		
			<tr>
				<td><input type="submit" name="submit" class="btn btn-success" value="Simpan"></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>

	<script src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){

		    $('#kode_buku').autocomplete({
                source: "<?php echo site_url('peminjaman/get_autocomplete');?>",
     
                select: function (event, ui) {
                    $('[name="id_buku"]').val(ui.item.des); 
                    
                }
            });

		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){

		    $('#kode_anggota').autocomplete({
                source: "<?php echo site_url('peminjaman/get_autocomplete1');?>",
     
                select: function (event, ui) {
                    $('[name="id_anggota"]').val(ui.item.des); 
                    
                }
            });

		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){

		    $('#nama_petugas').autocomplete({
                source: "<?php echo site_url('peminjaman/get_autocomplete2');?>",
     
                select: function (event, ui) {
                    $('[name="id_petugas"]').val(ui.item.des); 
                    
                }
            });

		});
	</script>