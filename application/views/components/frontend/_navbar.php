<div class="container">
	<nav class="row navbar navbar-expand-lg navbar-light bg-white">
		<a class="navbar-brand font-weight-bold" href="<?= base_url() ?>">
			<!-- <img src="frontend/images/logo.png" alt="" /> -->
			Ral T&T
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Menu -->
		<div class="collapse navbar-collapse" id="navb">
			<ul class="navbar-nav ml-auto mr-3">
				<li class="nav-item mx-md-2">
					<a class="nav-link active" href="<?= base_url() ?>">Home</a>
				</li>
				<li class="nav-item mx-md-2">
					<a class="nav-link" href="<?= base_url("katalog-wisata") ?>">Paket Wisata</a>
				</li>
				<li class="nav-item mx-md-2">
					<a class="nav-link" href="<?= base_url("testimoni") ?>">Testimonial</a>
				</li>
				<li class="nav-item mx-md-2">
					<a class="nav-link" href="<?= base_url("kontak") ?>">Kontak Kami</a>
				</li>

			</ul>
			<ul class="navbar-nav">
				<?php if ($this->session->userdata("email")) : ?>
					<li class="nav-item mx-md-2 dropdown">
						<a class="nav-link" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="<?= base_url("assets/uploads/avatars/" . $this->session->userdata("avatar")); ?>" class="rounded-circle profile-picture" style="height: 36px; width: 36px; object-fit: cover; object-position: center;" />
							<?= $this->session->userdata("name"); ?>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<?php if ($this->session->userdata("role") == "admin") : ?>
								<a class="dropdown-item" href="<?= base_url("dashboard") ?>">Dashboard</a>
								<a class="dropdown-item" href="<?= base_url("home") ?>">Akun Saya</a>
							<?php else : ?>
								<a class="dropdown-item" href="<?= base_url("home") ?>">Akun Saya</a>
							<?php endif; ?>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item text-danger" href="<?= base_url("logout") ?>">Logout</a>
						</div>
					</li>
				<?php else : ?>
					<li class="nav-item">
						<!-- Mobile button -->
						<form action="<?= base_url("login") ?>" class="form-inline d-sm-block d-md-none">
							<button class="btn btn-login my-2 my-sm-0">
								Masuk
							</button>
						</form>
						<!-- Desktop Button -->
						<form action="<?= base_url("login") ?>" class="form-inline my-2 my-lg-0 d-none d-md-block">
							<button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
								Masuk
							</button>
						</form>
					</li>
				<?php endif; ?>

			</ul>

		</div>
	</nav>
</div>
