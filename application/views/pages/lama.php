<?php $this->load->view('main/header'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pasien</title>
</head>
<body>
	<form action="">
		<table align="center">
			<tr>
				<td><h2>Registrasi Pasien Lama</h2></td>
			</tr>
			<tr>
				<td><h2>=======================</h2></td>
			</tr>
			<tr>
			  <td><div class="form-group">
			    <label for="norkm">No.Rekam Medis</label>
			    <input type="text" class="form-control" id="norkm" placeholder="No.CM" name="norkm">
			  </div></td>
			 </tr>
			 <tr>
			  <td><div class="form-group">
			    <label for="tgllahir">Tanggal Lahir</label>
			    <input type="date" class="form-control" id="tgllahir" placeholder="Tanggal Lahir" name="tgllahir">
			  </div></td>
			 </tr>
			 <tr>
				<td><input class="btn btn-danger" type="submit" name="cari" value="Cari"></td>
			</tr>
			</table>
</form>
</body>
</html>
