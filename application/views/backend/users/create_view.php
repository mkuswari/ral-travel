<!DOCTYPE html>
<html>

<!-- head -->
<?php $this->load->view("components/backend/_head"); ?>
<!-- end of head -->

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<?php $this->load->view("components/backend/_topbar"); ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php $this->load->view("components/backend/_sidebar"); ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark">Tambah User Baru</h1>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-7 mx-auto">
											<form action="<?= base_url("kelola-users/tambah") ?>" method="post" enctype="multipart/form-data">
												<div class="form-group row">
													<label for="name" class="col-sm-2 col-form-label">Nama</label>
													<div class="col-sm-10">
														<input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" name="name" id="name">
														<?= form_error('name', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
													</div>
												</div>
												<div class="form-group row">
													<label for="email" class="col-sm-2 col-form-label">Email</label>
													<div class="col-sm-10">
														<input type="text" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" name="email" id="email">
														<?= form_error('email', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
													</div>
												</div>
												<div class="form-group row">
													<label for="phone" class="col-sm-2 col-form-label">Nomor HP</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="phone" id="phone">
													</div>
												</div>
												<div class="form-group row">
													<label for="address" class="col-sm-2 col-form-label">Alamat</label>
													<div class="col-sm-10">
														<textarea name="address" id="address" class="form-control" rows="3"></textarea>
													</div>
												</div>
												<div class="form-group row">
													<label for="avatar" class="col-sm-2 col-form-label">Avatar</label>
													<div class="col-sm-10">
														<input type="file" class="form-control" name="avatar" id="avatar">
													</div>
												</div>
												<div class="form-group row">
													<label for="password" class="col-sm-2 col-form-label">Password</label>
													<div class="col-sm-10">
														<input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : ''; ?>" name="password" id="password">
														<?= form_error('password', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
													</div>
												</div>
												<div class="form-group row">
													<label for="password_confirm" class="col-sm-2 col-form-label">Konfirmasi Password</label>
													<div class="col-sm-10">
														<input type="password" class="form-control <?= form_error('password_confirm') ? 'is-invalid' : ''; ?>" name="password_confirm" id="password_confirm">
														<?= form_error('password_confirm', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
													</div>
												</div>
												<div class="form-group row">
													<label for="password_confirm" class="col-sm-2 col-form-label">Hak Akses</label>
													<div class="col-sm-10">
														<select name="role" id="role" class="form-control">
															<option value="admin">Admin</option>
															<option value="member" selected>Member</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-2"></div>
													<div class="col-sm-10">
														<button type="submit" class="btn btn-primary">Tambah User</button>
														<button type="reset" class="btn btn-warning text-white">Reset Form</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- footer -->
		<?php $this->load->view("components/backend/_footer"); ?>
		<!-- end of footer -->
	</div>
	<!-- ./wrapper -->

	<!-- scripts -->
	<?php $this->load->view("components/backend/_scripts"); ?>
	<!-- end of scripts -->
</body>

</html>
