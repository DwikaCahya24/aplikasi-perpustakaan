	
	<form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input  class="form-control" type="text" name="username"></td>
			</tr>
			<br>
			<tr>
				<td>Password</td>
				<td><input  class="form-control" type="password" name="password"></td>
			</tr>

			<tr>
				<td></td>
				<td><br><input type="submit" class="btn btn-success" value="Login"></td>
			</tr>
		</table>
	</form>
