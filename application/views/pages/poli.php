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
				<td><h2>Pemilihan Poli Yang Dituju</h2></td>
			</tr>
			<tr>
				<td><h2>=======================</h2></td>
			</tr>
			<tr>
			  	<td>
					<div class="form-group">
					  <label for="sel1">Pilih Poli</label>
					  <select class="form-control" id="sel1" name="pilpol">
					    <option>---Pilih---</option>
					    <option>Kardiologi</option>
					    <option>Urologi</option>
					    <option>Perawatan Gigi</option>
					    <option>Perawatan Mata</option>
					    <option>Neurologi</option>
					    <option>Operasi Plastik</option>
					  </select>
					</div>
				</td>
			 </tr>
			 <tr>
			  <td><div class="form-group">
			    <label for="tglkun">Tanggal kunjungan</label>
			    <input type="date" class="form-control" id="tglkun" placeholder="Tanggal Kunjungan" name="tglkun">
			  </div></td>
			 </tr>
			<tr>
			  	<td>
					<div class="form-group">
					  <label for="sel1">Pembayaran</label>
					  <select class="form-control" id="sel1" name="pembayaran">
					    <option>---Pilih---</option>
					    <option>Umum</option>
					    <option>BPJS</option>
					  </select>
					</div>
				</td>
			 </tr>
			 <tr>
				<td><input class="btn btn-primary" type="submit" name="submit" value="submit"></td>
			</tr>
			</table>
</form>
</body>
</html>
