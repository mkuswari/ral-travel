<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/auth/_head"); ?>
<!-- end of head -->

<body style="background-image: url(<?= base_url('assets/frontend/images/banner/sembalun-banner.jpg') ?>); background-size: cover;
	background-position: center;">
	<main>
		<div class="container">
			<div class="section d-flex align-items-center" style="margin-top: 120px;">
				<div class="col-sm-5 mx-auto">
					<?= $this->session->flashdata('message'); ?>
					<div class="card shadow-lg border-0">
						<div class="card-header text-center border-0">
							<h5 class="font-weight-bold">Silahkan Login</h5>
						</div>
						<div class="card-body">
							<form action="<?= base_url("login") ?>" method="POST">
								<div class="form-group">
									<label for="email" class="small">Email</label>
									<input type="text" class="form-control <?= form_error("email") ? "is-invalid" : "" ?>" id="email" name="email" placeholder="Masukkan E-mail">
									<?= form_error('email', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
								</div>
								<div class="form-group">
									<label for="password" class="small">Password</label>
									<input type="password" class="form-control <?= form_error("password") ? "is-invalid" : "" ?>" id="password" name="password" placeholder="Masukkan Password">
									<?= form_error('password', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="remember" name="remember">
									<label class="form-check-label" for="remember">Remember Me</label>
								</div>
								<button type="submit" class="btn btn-block btn-login">Submit</button>
								<a href="<?= base_url("register") ?>" class="btn btn-block btn-light">Register</a>
								<div class="text-center mt-3">
									<a href="" class="text-muted">Lupa Password?</a>
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
