<div class="main-sidebar sidebar-style-2">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="<?= base_url() ?>">Admin Ral T&T</a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="<?= base_url() ?>">RAL</a>
		</div>
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<li class="active">
				<a class="nav-link" href="<?= base_url("dashboard") ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
			</li>
			<li class="menu-header">Master Data</li>
			<li>
				<a class="nav-link" href="<?= base_url("kelola-users") ?>"><i class="fas fa-users"></i> <span>Kelola Users</span></a>
			</li>
			<li>
				<a href="<?= base_url("kelola-wisata") ?>" class="nav-link"><i class="fas fa-umbrella-beach"></i> <span>Kelola Wisata</span></a>
			</li>
			<li>
				<a href="<?= base_url("kelola-booking") ?>" class="nav-link"><i class="fas fa-credit-card"></i> <span>Kelola Booking</span></a>
			</li>
			<li>
				<a href="<?= base_url("kelola-testimoni") ?>" class="nav-link"><i class="fas fa-pencil-alt"></i> <span>Kelola Testimoni</span></a>
			</li>
			<li class="dropdown">
				<a href="#" class="nav-link has-dropdown"><i class="fas fa-file"></i> <span>Kelola Blogs</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="bootstrap-alert.html">Kelola Kategori</a></li>
					<li><a class="nav-link" href="bootstrap-badge.html">Kelola Artikel</a></li>
				</ul>
			</li>
			<li>
				<a href="" class="nav-link"><i class="fas fa-user-cog"></i> <span>Profile Saya</span></a>
			</li>
			<li>
				<a href="" class="nav-link"><i class="fas fa-cogs"></i> <span>Pengaturan</span></a>
			</li>
			<li>
				<a class="nav-link text-danger" href="<?= base_url("logout") ?>"><i class="fas fa-sign-out-alt"></i> <span>Sign Out</span></a>
			</li>
		</ul>
	</aside>
</div>
