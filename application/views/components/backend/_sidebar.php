<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
	<div class="slimscroll-menu" id="remove-scroll">

		<!--- Sidemenu -->
		<div id="sidebar-menu">
			<!-- Left Menu Start -->
			<ul class="metismenu" id="side-menu">
				<li class="menu-title">Dashboard</li>
				<li>
					<a href="<?= base_url("dashboard") ?>" class="waves-effect">
						<i class="icon-accelerator"></i><span> Dashboard
						</span>
					</a>
				</li>

				<li class="menu-title">Menu</li>

				<li>
					<a href="<?= base_url("kelola-users") ?>" class="waves-effect">
						<i class="fas fa-users"></i><span> Kelola Users
						</span>
					</a>
				</li>

				<li>
					<a href="javascript:void(0);" class="waves-effect"><i class="icon-pencil-ruler"></i> <span>
							Kelola Destinasi <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
					<ul class="submenu">
						<li><a href="<?= base_url("kelola-kategori") ?>">Kategori</a></li>
						<li><a href="ui-badge.html">Destinasi</a></li>
					</ul>
				</li>

			</ul>

		</div>
		<!-- Sidebar -->
		<div class="clearfix"></div>

	</div>
	<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
