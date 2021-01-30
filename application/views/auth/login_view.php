<!DOCTYPE html>
<html>

<!-- head -->
<?php $this->load->view("components/auth/_head"); ?>
<!-- end of head -->

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="assets/backend/index2.html"><b>Ral</b>T&T</a>
		</div>

		<!--flashdata -->
		<?= $this->session->flashdata('message'); ?>
		<!-- end of flashdata -->

		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Silahkan Login</p>

				<form action="<?= base_url("login") ?>" method="post">
					<div class="input-group mb-3">
						<input type="email" name="email" id="email" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" placeholder="Email">
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
					<div class="row">
						<div class="col-8">
							<div class="icheck-primary">
								<input type="checkbox" id="remember">
								<label for="remember">
									Remember Me
								</label>
							</div>
						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Sign In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
				<hr>
				<div class="text-center">
					<p class="mb-1 small">
						<a href="forgot-password.html">Lupa Password?</a>
					</p>
					<p class="mb-0 small">
						<a href="<?= base_url("register") ?>" class="text-center">Buat Akun baru</a>
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
