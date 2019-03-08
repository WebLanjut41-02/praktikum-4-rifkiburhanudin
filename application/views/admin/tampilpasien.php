<?php $this->load->view('main/header1'); ?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<form>
	<table style="margin:20px auto;"align="" border="1">
		<tr>
			<input type="text" name="cari" id="key">
			<button type="submit" id="btn-search">Search</button>
			<a href="<?php echo base_url(); ?>">reset</a>
		</tr>
		<tr>
			<th>No</th>
			<th>No Rekam</th>
			<th>Nama</th>
			<th>No identitas</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>No Handphone</th>
			<th>action</th>
			<br>
		</tr>
			<?php $no = 1;
			foreach ($dataa1 as $val) { 
			?>
		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $val->norekam ?></td>
			<td><?php echo $val->nama ?></td>
			<td><?php echo $val->noidentitas ?></td>
			<td><?php echo $val->jenkel ?></td>
			<td><?php echo $val->tgllahir ?></td>
			<td><?php echo $val->alamat ?></td>
			<td><?php echo $val->nohp ?></td>

			<td><?php echo anchor('tubes/hapus/'.$val->id_pas,'hapus'); ?>
			<?php echo anchor('tubes/editpasien/'.$val->id_pas,'edit'); ?></td>
			</tr>
		<?php } ?>
		
	</table>
	</form>
</body>
</html>

<?php $this->load->view('main/footer1'); ?>