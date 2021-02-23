<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/auth/_head"); ?>
<!-- end of head -->

<body style="background-image: url(<?= base_url('assets/frontend/images/banner/sembalun-banner.jpg') ?>); background-size: cover;
	background-position: center; background-repeat: no-repeat;">
	<!-- navbar -->
	<?php $this->load->view("components/auth/_navbar"); ?>
	<!-- end of navbar -->
	<main>
		<div class="container">
			<div class="section d-flex align-items-center" style="margin-top: 120px;">
				<div class="col-sm-5 mx-auto">
					<?= $this->session->flashdata('message'); ?>
					<div class="card shadow-lg border-0">
						<div class="card-header text-center border-0">
							<h5 class="font-weight-bold">Register Akun</h5>
						</div>
						<div class="card-body">
							<form action="<?= base_url("register") ?>" method="post">

								<div class="form-group">
									<label class="small" for="name">Nama Lengkap</label>
									<input type="text" class="form-control <?= form_error("name") ? "is-invalid" : "" ?>" name="name" id="name" placeholder="Masukkan Nama">
									<?= form_error('name', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
								</div>
								<div class="form-group">
									<label class="small" for="email">Email</label>
									<input class="form-control <?= form_error("email") ? "is-invalid" : ""; ?>" type="text" name="email" id="email" placeholder="Masukkan E-mail">
									<?= form_error('email', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
								</div>

								<div class="form-group">
									<label class="small" for="password">Password</label>
									<input class="form-control <?= form_error("password") ? "is-invalid" : ""; ?>" type="password" name="password" id="password" placeholder="Masukkan Password">
									<?= form_error('password', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
								</div>
								<div class="form-group">
									<label class="small" for="password_confirm">Konfirmasi Password</label>
									<input class="form-control <?= form_error("password_confirm") ? "is-invalid" : ""; ?>" type="password" name="password_confirm" id="password" placeholder="Masukkan Password">
									<?= form_error('password_confirm', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
								</div>
								<div class="form-group text-center m-t-20">
									<button class="btn btn-login btn-block" type="submit">Register</button>
								</div>
								<div class="form-group text-center">
									<span>Sudah Punya Akun?</span>
									<a href="<?= base_url("login") ?>" class="text-muted">Login Disini</a>
								</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
	</main>
	<!-- scripts -->
	<?php $this->load->view("components/auth/_scripts"); ?>
	<!-- end of scripts -->
</body>

</html>
