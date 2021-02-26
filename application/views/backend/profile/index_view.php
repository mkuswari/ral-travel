<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/backend/_head"); ?>

<body>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">

			<!-- topbar -->
			<?php $this->load->view("components/backend/_navbar"); ?>

			<!-- sidebar -->
			<?php $this->load->view("components/backend/_sidebar"); ?>

			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="section-header d-flex justify-content-between">
						<h1>Profile Saya</h1>
					</div>
					<div class="row">
						<div class="col-4">
							<div class="card mb-3" style="max-width: 540px;">
								<div class="row no-gutters">
									<div class="col-md-4">
										<img src="<?= base_url("assets/uploads/avatars/" . $this->session->userdata("avatar")) ?>" class="card-img" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
									</div>
									<div class="col-md-8">
										<div class="card-body">
											<h5 class="card-title"><?= $this->session->userdata("name"); ?></h5>
											<p class="card-text"><?= $this->session->userdata("email"); ?></p>
											<p class="card-text"><small class="text-muted">Member Since : <?= date('d F Y', strtotime($this->session->userdata("created_at"))); ?></small></p>
										</div>
									</div>
								</div>
							</div>
							<?= $this->session->flashdata("message"); ?>
						</div>
						<div class="col-8">
							<div class="card">
								<div class="card-body">
									<h5>Edit Profil</h5>
									<hr>
									<form action="<?= base_url("profile/update") ?>" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label for="name">Nama</label>
											<input type="text" id="name" name="name" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" value="<?= $this->session->userdata("name"); ?>">
											<?= form_error('name', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
										</div>
										<div class="form-group">
											<label for="email">E-mail</label>
											<input type="text" id="email" name="email" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" value="<?= $this->session->userdata("email"); ?>">
											<?= form_error('email', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
										</div>
										<div class="form-group">
											<label for="phone">Phone</label>
											<input type="text" id="phone" name="phone" class="form-control <?= form_error('phone') ? 'is-invalid' : ''; ?>" value="<?= $this->session->userdata("phone"); ?>">
											<?= form_error('phone', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
										</div>
										<div class="form-group">
											<label for="address">Alamat</label>
											<textarea name="address" id="address" rows="5" class="form-control <?= form_error('address') ? 'is-invalid' : ''; ?>"><?= $this->session->userdata("address"); ?></textarea>
											<?= form_error('address', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
										</div>
										<div class="form-group">
											<label for="avatar">Avatar</label>
											<input type="file" id="avatar" name="avatar" class="form-control">
											<small class="text-muted">Kosongkan jika tidak ingin merubah</small>
										</div>
										<div class="form-action">
											<button type="submit" class="btn btn-primary">Update profile</button>
										</div>
									</form>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<h5>Ganti Password</h5>
									<hr>
									<form action="<?= base_url("profile/ubah_password") ?>" method="post">
										<div class="form-group">
											<label for="current_password">Password sekarang</label>
											<input type="password" id="current_password" name="current_password" class="form-control <?= form_error('current_password') ? 'is-invalid' : ''; ?>">
											<?= form_error('current_password', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
										</div>
										<div class="form-group">
											<label for="new_password">Password baru</label>
											<input type="password" id="new_password" name="new_password" class="form-control <?= form_error('new_password') ? 'is-invalid' : ''; ?>">
											<?= form_error('new_password', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
										</div>
										<div class="form-group">
											<label for="password_confirm">Konfirmasi password</label>
											<input type="password" id="password_confirm" name="password_confirm" class="form-control <?= form_error('password_confirm') ? 'is-invalid' : ''; ?>">
											<?= form_error('password_confirm', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
										</div>
										<div class="form-action">
											<button type="submit" class="btn btn-primary">Ganti Password</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!-- footer -->
			<?php $this->load->view("components/backend/_footer"); ?>
		</div>
	</div>

	<!-- scripts -->
	<?php $this->load->view("components/backend/_scripts"); ?>
</body>

</html>
