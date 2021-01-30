<!DOCTYPE html>
<html>

<!-- head -->
<?php $this->load->view("components/backend/_head"); ?>
<link rel="stylesheet" href="<?= base_url("assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") ?>">
<link rel="stylesheet" href="<?= base_url("assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css") ?>">
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
							<h1 class="m-0 text-dark">Kelola Users</h1>
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
								<div class="card-header border-0">
									<a href="<?= base_url("kelola-users/tambah") ?>" class="btn btn-primary">Tambah Users</a>
								</div>
								<div class="card-body">

									<!-- flashdata -->
									<?= $this->session->flashdata('message'); ?>
									<!-- end of flashdata -->

									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th width="10">No.</th>
												<th width="64">Avatar</th>
												<th>Name</th>
												<th>E-mail</th>
												<th>Role</th>
												<th>Created at</th>
												<th width="150">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1; ?>
											<?php foreach ($users as $user) : ?>
												<tr>
													<td><?= $no++; ?></td>
													<td>
														<img src="<?= base_url("assets/uploads/avatars/" . $user["avatar"]) ?>" style="width: 64px; height: 64px; object-fit:cover; object-position:center;" class="rounded-circle">
													</td>
													<td><?= $user["name"] ?></td>
													<td><?= $user["email"] ?></td>
													<td>
														<?php if ($user["role"] == "admin") : ?>
															<span class="badge badge-success">Admin</span>
														<?php else : ?>
															<span class="badge badge-warning">Member</span>
														<?php endif; ?>
													</td>
													<td><?= date('d F Y', strtotime($user["created_at"])) ?></td>
													<td>
														<a href="<?= base_url("kelola-users/detail/" . $user["id"]) ?>" class="btn btn-info btn-sm">Detail</a>
														<a href="<?= base_url("kelola-users/update/" . $user["id"]) ?>" class="btn btn-warning btn-sm">Edit</a>
														<a href="<?= base_url("kelola-users/hapus/" . $user["id"]) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus user ini dari sistem?')">Delete</a>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
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

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- scripts -->
	<?php $this->load->view("components/backend/_scripts"); ?>
	<script src="<?= base_url("assets/backend/plugins/datatables/jquery.dataTables.min.js") ?>"></script>
	<script src="<?= base_url("assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") ?>"></script>
	<script src="<?= base_url("assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js") ?>"></script>
	<script src="<?= base_url("assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") ?>"></script>
	<script>
		$(function() {
			$("#example1").DataTable({
				"responsive": true,
				"autoWidth": false,
			});
		});
	</script>
	<!-- end of scripts -->
</body>

</html>
