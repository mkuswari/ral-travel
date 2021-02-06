<!-- Top Bar Start -->
<div class="topbar">

	<!-- LOGO -->
	<div class="topbar-left">
		<a href="index.html" class="logo">
			<span class="logo-light">
				Ral T&T Travel
			</span>
			<span class="logo-sm">
				R
			</span>
		</a>
	</div>

	<nav class="navbar-custom">
		<ul class="navbar-right list-inline float-right mb-0">
			<li class="dropdown notification-list list-inline-item">
				<div class="dropdown notification-list nav-pro-img">
					<a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="index.html#" role="button" aria-haspopup="false" aria-expanded="false">
						<img src="<?= base_url("assets/uploads/avatars/" . $this->session->userdata("avatar")) ?>" class="rounded-circle">
						<span><?= $this->session->userdata("name"); ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
						<!-- item-->
						<a class="dropdown-item" href="index.html#"><i class="mdi mdi-account-circle"></i>
							Profile</a>
						<a class="dropdown-item d-block" href="index.html#"><i class="mdi mdi-settings"></i> Settings</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item text-danger" href="<?= base_url("logout") ?>"><i class="mdi mdi-power text-danger"></i> Logout</a>
					</div>
				</div>
			</li>

		</ul>

		<ul class="list-inline menu-left mb-0">
			<li class="float-left">
				<button class="button-menu-mobile open-left waves-effect">
					<i class="mdi mdi-menu"></i>
				</button>
			</li>
			<li class="d-none d-md-inline-block">
				<form role="search" class="app-search">
					<div class="form-group mb-0">
						<input type="text" class="form-control" placeholder="Search..">
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</li>
		</ul>

	</nav>

</div>
<!-- Top Bar End -->
