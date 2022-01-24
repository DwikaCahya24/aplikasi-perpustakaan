<div class="col-sm-12">
		
		<div class="caption">
			<h3> Form Rak </h3>
		</div>
	<form action="<?php echo base_url();?>index.php/rak/save" method="POST">
		<input type="hidden" name="id_rak" value="<?php echo (isset($row->id_rak)?$row->id_rak:'');?>" class="form-control">

		<table class="table" width="100%">
			<tr>
				<td>Nama Rak</td>
				<td>:</td>
				<td><input type="text" name="nama_rak" value="<?php echo (isset($row->nama_rak)?$row->nama_rak:'');?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Lokasi Rak</td>
				<td>:</td>
				<td><input type="text" name="lokasi_rak" value="<?php echo (isset($row->lokasi_rak)?$row->lokasi_rak:'');?>" class="form-control" required></td>
			</tr>
			
			
			<tr>
				<td>ID Buku</td>
				<td>:</td>
				<td><input type="text" name="id_buku" id="kode_buku" value="<?php echo (isset($row->lokasi_rak)?$row->id_buku:'');?>" class="form-control" required><input type="hidden" name="id_buku" value="<?php echo (isset($row->id_buku)?$row->id_buku:'');?>" class="form-control" required></td> </tr>
			
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