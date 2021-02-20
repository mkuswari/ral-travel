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
					<a class="nav-link" href="#">Paket Wisata</a>
				</li>
				<li class="nav-item mx-md-2">
					<a class="nav-link" href="#">Testimonial</a>
				</li>
				<li class="nav-item mx-md-2">
					<a class="nav-link" href="#">Kontak Kami</a>
				</li>

			</ul>
			<ul class="navbar-nav">
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

			</ul>

		</div>
	</nav>
</div>
