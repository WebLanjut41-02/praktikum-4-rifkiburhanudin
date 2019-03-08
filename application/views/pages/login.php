<?php $this->load->view('main/header'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pasien</title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/tubes/lama">
		<table border="0" align="center">
			<section class="section_gap team_area lite_bg">
		<div class="container">
			<!-- <div class="row"> -->
			
				<div><h1>Registrasi Pasien<h1></div><br>
			
			
				<div><h1>================</h1></div><br>
			
			
				
					<div>
					  <label for="sel1">Pilih Jenis Pasien</label>
					  <select class="form-control" id="sel1" name="pilpol">
					  	<option>---Pilih---</option>
					    <option>Pasien Lama</option>
					    <option>Pasien Baru</option>
					  </select>
					</div>
				<br>
			
			
				<div><input class="btn btn-primary" type="submit" name="submit" value="submit"></div>
			
			<!-- </div> -->
		</div>
	</section>
		</table>
	</form>
</body>
</html>

 
