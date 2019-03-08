<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<?php foreach ($dataa1 as $val) {
			# code...  ?>
	</center>
	<form action="<?php echo base_url()?>index.php/tubes/update" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>id</td>
				<td><input type="text" name="id_pas" value="<?php echo $val->id_pas ?>"></td>
			</tr>
			<tr>
				<td>norekam</td>
				<td><input type="text" name="norekam" value="<?php echo $val->norekam ?>"></td>
			</tr>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama" value="<?php echo $val->nama ?>"></td>
			</tr>
			<tr>
				<td>noidentitas</td>
				<td><input type="text" name="noidentitas" value="<?php echo $val->noidentitas ?>"></td>
			</tr>
			<tr>
				<td>jenkel</td>
				<td><select name="jenkel">
			    	<option>---PILIH---</option>
			    	<option value="Laki-laki">Laki-laki</option>
			    	<option value="Perempuan">Perempuan</option>
			    </select></td>
			</tr>
			<tr>
				<td>tgllahir</td>
				<td><input type="date" name="tgllahir" value="<?php echo $val->tgllahir ?>"></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $val->alamat ?>"></td>
			</tr>
			<tr>
				<td>nohp</td>
				<td><input type="text" name="nohp" value="<?php echo $val->nohp ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>