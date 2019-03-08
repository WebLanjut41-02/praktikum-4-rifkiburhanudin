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
				<td><h2>Registrasi Pasien Baru</h2></td>
			</tr>
			<tr>
				<td><h2>=======================</h2></td>
			</tr>
			<tr>
			  <td><div class="form-group">
			    <label for="nama">Nama Pasien</label>
			    <input type="text" class="form-control" id="nama" placeholder="Nama Pasien" name="nama">
			  </div></td>
			 </tr>
			 <tr>
			  <td><div class="form-group">
			    <label for="tempatlahir">Password:</label>
			    <input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir" name="tempatlahir">
			  </div></td>
			 </tr>
			 <tr>
			  <td><div class="form-group">
			    <label for="tgllahir">Tanggal Lahir</label>
			    <input type="date" class="form-control" id="tgllahir" placeholder="Tanggal Lahir" name="tgllahir">
			  </div></td>
			 </tr>
			 <tr>
			  <td><div class="form-group">
			    <label for="nohp">Nomor Handphone</label>
			    <input type="text" class="form-control" id="nohp"  placeholder="Nomor Handphone Anda" name="nohp">
			  </div></td>
			 </tr>
			 <tr>
				<td><input class="btn btn-primary" type="submit" name="submit" value="submit"></td>
			</tr>
			</table>
</form>
</body>
</html>
