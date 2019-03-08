<?php $this->load->view('main/header'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pasien</title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/tubes/cek1" method="post">
		<table align="center">
			<tr>
				<td><h2>Pemilihan Kamar Rawat Jalan</h2></td>
			</tr>
			<tr>
				<td><h2>=======================</h2></td>
			</tr>
			<div class="container">
			<tr>
			  <td><div class="form-group" data-validate = "masukan nama">
			    <label for="nama">Nama Pasien</label>
			    <input type="text" class="form-control" id="nama" placeholder="Nama Pasien" name="nama">
			  </div></td>
			 </tr>
			 <tr>
			 <td><div class="form-group">
     			<label for="tglmasuk">Tanggal Masuk</label>
      			<input type="date" class="form-control" id="tglmasuk" placeholder="Tanggal Masuk" name="tglmasuk">
   				 </div></td>

    		 <td><div class="form-group">
     		 <label for="tglkeluar">Tanggal Keluar</label>
     			<input type="date" class="form-control" id="tglkeluar" placeholder="Tanggal Keluar" name="tglkeluar">
    			</div></td>
   			 </div>
			</tr>
			 <tr>
			  <td><div class="form-group">
			    <label for="tgllahir">Lama Inap</label>
			    <input type="text" class="form-control" id="lamainap" placeholder="Lama Inap" name="lamainap">
			  </div></td>
			 </tr>
			 <tr>
			  <td><div class="form-group">
     			<label for="ruang">Ruang</label>
      			<input type="text" class="form-control" id="ruang" placeholder="Ruang" name="ruang">
   				 </div></td>

    		<td><div class="form-group">
     		 <label for="kelas">Kelas</label>
     			<input type="type" class="form-control" id="kelas" placeholder="Kelas" name="kelas">
    			</div></td>
   			 </div>
			</tr>
			<tr>
			  <td><div class="form-group">
			    <label for="tindakan">Tindakan</label>
			    <input type="text" class="form-control" id="tindakan" placeholder="Tindakan" name="tindakan">
			  </div></td>
			 </tr>
			 <tr>
				<td><input class="btn btn-primary" type="submit" name="submit" value="submit">
					</div>
				<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
				</td>
			</tr>
			</table>
</form>
</body>
</html>

<?php $this->load->view('main/footer'); ?>