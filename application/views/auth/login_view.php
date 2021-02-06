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
				<h5 class="font-18 text-center">Login untuk Melanjutkan</h5>

				<form class="form-horizontal m-t-30" action="<?= base_url("login") ?>" method="post">

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
							<div class="checkbox checkbox-primary">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label" for="customCheck1"> Remember me</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group text-center m-t-20">
						<div class="col-12">
							<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log
								In</button>
						</div>
					</div>

					<div class="form-group row m-t-30 m-b-0">
						<div class="col-sm-7">
							<a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Lupa Password?</a>
						</div>
						<div class="col-sm-5 text-right">
							<a href="<?= base_url("register") ?>" class="text-muted">Buat Akun Baru</a>
						</div>
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
