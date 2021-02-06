<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/auth/_head"); ?>
<!-- end of head -->

<body style="background-image: url(http://localhost/ral-travel/assets/frontend/images/bg_5.jpg)">

	<!-- Begin page -->
	<!-- <div class="accountbg"></div> -->
	<div class="wrapper-page">

		<?= $this->session->flashdata("message") ?>

		<div class="card card-pages shadow-none">

			<div class="card-body">
				<h5 class="font-18 text-center">Register</h5>

				<form class="form-horizontal m-t-30" action="<?= base_url("register") ?>" method="post">

					<div class="form-group">
						<div class="col-12">
							<label for="name">Nama Lengkap</label>
							<input type="text" class="form-control <?= form_error("name") ? "is-invalid" : "" ?>" name="name" id="name" placeholder="Masukkan Nama">
							<?= form_error('name', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-12">
							<label for="email">Email</label>
							<input class="form-control <?= form_error("email") ? "is-invalid" : ""; ?>" type="text" name="email" id="email" placeholder="Masukkan E-mail">
							<?= form_error('email', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-12">
							<label for="password">Password</label>
							<input class="form-control <?= form_error("password") ? "is-invalid" : ""; ?>" type="password" name="password" id="password" placeholder="Masukkan Password">
							<?= form_error('password', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-12">
							<label for="password_confirm">Konfirmasi Password</label>
							<input class="form-control <?= form_error("password_confirm") ? "is-invalid" : ""; ?>" type="password" name="password_confirm" id="password" placeholder="Masukkan Password">
							<?= form_error('password_confirm', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
						</div>
					</div>

					<div class="form-group text-center m-t-20">
						<div class="col-12">
							<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Register</button>
						</div>
					</div>

					<div class="form-group m-t-10 m-b-0 text-center">
						<span>Sudah Punya Akun?</span>
						<a href="<?= base_url("register") ?>" class="text-muted">Login Disini</a>
					</div>
				</form>
			</div>

		</div>
	</div>
	<!-- END wrapper -->

	<!-- scripts -->
	<?php $this->load->view("components/auth/_scripts"); ?>
	<!-- end of scripts -->

</body>

</html>
