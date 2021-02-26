<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("components/frontend/_head"); ?>

<body>
	<?php $this->load->view("components/frontend/_navbar"); ?>
	<main>
		<section class="section-details-header"></section>
		<section class="section-details-content">
			<div class="container">
				<div class="row mt-5">
					<div class="col-lg-3">
						<div class="card card-details shadow border-0">
							<div class="text-center">
								<img src="<?= base_url("assets/uploads/avatars/" . $this->session->userdata("avatar")) ?>" style="height: 100px; width: 100px; object-position: center; object-fit: cover; border-radius: 50%;" class="shadow mb-2">
								<h2><?= $this->session->userdata("name"); ?></h2>
								<small class="text-muted"><?= $this->session->userdata("email"); ?></small>
							</div>
							<hr>
							<ul>
								<li>
									<a href="<?= base_url("home") ?>">Data Booking</a>
								</li>
								<li>
									<a href="<?= base_url("profile") ?>">Profile Saya</a>
								</li>
								<li>
									<a href="<?= base_url("logout") ?>" class="text-danger">Log Out</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-9 pl-lg-0">
						<div class="card card-details mb-3">
							<h1>Update Profile</h1>
							<hr>
							<?= $this->session->flashdata("message"); ?>
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
									<textarea name="address" id="address" rows="" class="form-control <?= form_error('address') ? 'is-invalid' : ''; ?>"><?= $this->session->userdata("address"); ?></textarea>
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
						<div class="card card-details mb-3">
							<h1>Ganti Password</h1>
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
	</main>
	<?php $this->load->view("components/frontend/_footer"); ?>
	<?php $this->load->view("components/frontend/_scripts"); ?>
</body>

</html>
