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
							<h1 class="m-0 text-dark">Detail User</h1>
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
											<div class="text-center">
												<img src="<?= base_url("assets/uploads/avatars/" . $user["avatar"]) ?>" width="200px;" height="200px;" style="object-fit: cover; object-position: center;" class="rounded-circle shadow">
											</div>
											<hr>
											<b>Nama</b>
											<p><?= $user["name"] ?></p>
											<b>Email</b>
											<p><?= $user["email"] ?></p>
											<b>No HP</b>
											<p>
												<?php if ($user["phone"]) : ?>
													<?= $user["phone"] ?>
												<?php else : ?>
													-
												<?php endif; ?>
											</p>
											<b>Alamat</b>
											<p>
												<?php if ($user["address"]) : ?>
													<?= $user["address"] ?>
												<?php else : ?>
													-
												<?php endif; ?>
											</p>
											<b>Hak Akses</b>
											<p>
												<?php if ($user["role"] == "admin") : ?>
													<span class="badge badge-success">Admin</span>
												<?php else : ?>
													<span class="badge badge-warning text-white">Member</span>
												<?php endif; ?>
											</p>
											<b>Bergabung Pada</b>
											<p><?= date('d F, Y', strtotime($user["created_at"])) ?></p>
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
