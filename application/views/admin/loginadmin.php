<?php $this->load->view('main/header'); ?>

<section class="home_banner_area">
		<div class="banner_inner">

			<div class="container">
				
				<div class="banner_content">
					
					<div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1">
						<h2>SELAMAT DATANG ADMIN</h2>
						<div class="about_inner">

	<form action="<?php echo base_url();?>index.php/tubes/aksi_login" method="post">
  <div class="form-group" data-validate = "masukan nama">
    <label for="username">Username:</label>
    <input type="text" name="username" class="form-control" id="username">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
   <p>kalau belom punya akun <a href="<?php echo base_url()?>index.php/regisadmin"> klik sini</a></p>
	</form>
						</div>

					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	<?php $this->load->view('main/footer'); ?>