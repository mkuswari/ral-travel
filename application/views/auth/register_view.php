<!DOCTYPE html>
<html>

<!-- head -->
<?php $this->load->view("components/auth/_head"); ?>
<!-- end of head -->

<body class="hold-transition login-page" style="background-image: url();">
	<div class="login-box">
		<div class="login-logo">
			<a href="assets/backend/index2.html"><b>Ral</b>T&T</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Silahkan Login</p>

				<form action="<?= base_url("register") ?>" method="post">
					<div class="input-group mb-3">
						<input type="text" name="name" id="name" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" placeholder="Nama">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
						<?= form_error('name', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
					</div>
					<div class="input-group mb-3">
						<input type="text" name="email" id="email" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" placeholder="Email">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
						<?= form_error('email', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
					</div>
					<div class="input-group mb-3">
						<input type="password" name="password" id="password" class="form-control <?= form_error('password') ? 'is-invalid' : ''; ?>" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
						<?= form_error('password', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
					</div>
					<div class="input-group mb-3">
						<input type="password" name="password_confirm" id="password_confirm" class="form-control <?= form_error('password_confirm') ? 'is-invalid' : ''; ?>" placeholder="Konfirmasi Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
						<?= form_error('password_confirm', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
					</div>
					<hr>
					<div class="input-group mb-3">
						<button type="submit" class="btn btn-primary btn-block">Register</button>
					</div>
				</form>
				<hr>
				<div class="text-center">
					<p class="mb-1 small">
						Sudah punya akun ? <a href="forgot-password.html">Login</a>
					</p>
				</div>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- scripts -->
	<?php $this->load->view("components/auth/_scripts"); ?>
	<!-- end of scripts -->
</body>

</html>
