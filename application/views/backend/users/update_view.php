<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/backend/_head"); ?>
<!-- end of head -->

<body>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<!-- navbar -->
			<?php $this->load->view("components/backend/_navbar"); ?>
			<!-- end of navbar -->
			<!-- sidebar -->
			<?php $this->load->view("components/backend/_sidebar"); ?>
			<!-- end of sidebar -->

			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="section-header d-flex justify-content-between">
						<h1>Update User</h1>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-8 mx-auto">
												<div class="text-center">
													<img src="<?= base_url("assets/uploads/avatars/" . $user["avatar"]) ?>" width="200px;" height="200px;" style="object-fit: cover; object-position: center;" class="rounded-circle shadow">
												</div>
												<hr>
												<form action="<?= base_url("kelola-users/update/" . $user["user_id"]) ?>" method="post" enctype="multipart/form-data">
													<input type="hidden" name="user_id" id="user_id" value="<?= $user["user_id"] ?>">
													<div class="form-group row">
														<label for="name" class="col-sm-2 col-form-label">Nama</label>
														<div class="col-sm-10">
															<input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" name="name" id="name" value="<?= $user["name"] ?>">
															<?= form_error('name', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
														</div>
													</div>
													<div class="form-group row">
														<label for="email" class="col-sm-2 col-form-label">Email</label>
														<div class="col-sm-10">
															<input type="text" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" name="email" id="email" value="<?= $user["email"] ?>">
															<?= form_error('email', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
														</div>
													</div>
													<div class="form-group row">
														<label for="phone" class="col-sm-2 col-form-label">Nomor HP</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" name="phone" id="phone" value="<?= $user["phone"] ?>">
														</div>
													</div>
													<div class="form-group row">
														<label for="address" class="col-sm-2 col-form-label">Alamat</label>
														<div class="col-sm-10">
															<textarea name="address" id="address" class="form-control" rows="3"><?= $user["address"] ?></textarea>
														</div>
													</div>
													<div class="form-group row">
														<label for="avatar" class="col-sm-2 col-form-label">Avatar</label>
														<div class="col-sm-10">
															<input type="file" class="form-control" name="avatar" id="avatar">
															<small class="text-muted">Kosongkan jika tidak ingin merubah</small>
														</div>
													</div>
													<div class="form-group row">
														<label for="password_confirm" class="col-sm-2 col-form-label">Hak Akses</label>
														<div class="col-sm-10">
															<select name="role" id="role" class="form-control">
																<option value="admin" <?= $user["role"] == "admin" ? "selected" : "" ?>>Admin</option>
																<option value="member" <?= $user["role"] == "member" ? "selected" : "" ?>>Member</option>
															</select>
														</div>
													</div>
													<div class="form-group row">
														<div class="col-sm-2"></div>
														<div class="col-sm-10">
															<button type="submit" class="btn btn-primary">Update User</button>
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
					</div>
				</section>
			</div>
			<!-- footer -->
			<?php $this->load->view("components/backend/_footer"); ?>
			<!-- end of footer -->
		</div>
	</div>

	<!-- scripts -->
	<?php $this->load->view("components/backend/_scripts"); ?>
	<!-- end of scripts -->
</body>

</html>
