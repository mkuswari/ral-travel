<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/backend/_head"); ?>
<!-- end of head -->

<!-- datatables -->
<link href="<?= base_url("assets/backend/plugins/datatables/dataTables.bootstrap4.min.css") ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url("assets/backend/plugins/datatables/buttons.bootstrap4.min.css") ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url("assets/backend/plugins/datatables/responsive.bootstrap4.min.css") ?>" rel="stylesheet" type="text/css" />
<!-- end of datatabes -->

<body>

	<!-- Begin page -->
	<div id="wrapper">

		<!-- topbar -->
		<?php $this->load->view("components/backend/_topbar"); ?>
		<!-- end of topbar -->

		<!-- sidebar -->
		<?php $this->load->view("components/backend/_sidebar"); ?>
		<!-- end of sidebar -->

		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="container-fluid">
					<div class="page-title-box">
						<div class="row justify-content-between">
							<div class="col-auto">
								<h4 class="page-title">Kelola Users</h4>
							</div>
							<div class="col-auto">
								<a href="<?= base_url("kelola-users/tambah") ?>" class="btn btn-primary">Tambah User</a>
							</div>
						</div>
						<!-- end row -->
					</div>
					<!-- end page-title -->

					<!-- sweet alert flashdata -->
					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
					<!-- end of sweet alert flashdata -->


					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing:0; width:100%;">
										<thead>
											<tr>
												<th width="10">No.</th>
												<th width="50">Avatar</th>
												<th width="225">Nama</th>
												<th width="225">Email</th>
												<th width="180">Phone</th>
												<th>Alamat</th>
												<th width="50">Hak Akses</th>
												<th width="100">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 1; ?>
											<?php foreach ($users as $user) : ?>
												<tr>
													<td><?= $i++; ?></td>
													<td>
														<img src="<?= base_url("assets/uploads/avatars/" . $user["avatar"]) ?>" class="rounded-circle" style="width:50px; height:50px; object-fit:cover; object-position:center;">
													</td>
													<td><?= $user["name"] ?></td>
													<td><?= $user["email"] ?></td>
													<td><?= $user["phone"] ?></td>
													<td><?= $user["address"] ?></td>
													<td>
														<?php if ($user["role"] == "admin") : ?>
															<span class="badge badge-success">Admin</span>
														<?php else : ?>
															<span class="badge badge-warning">Member</span>
														<?php endif; ?>
													</td>
													<td>
														<a href="<?= base_url("kelola-users/update/" . $user["id"]) ?>" class="btn btn-warning"><i class="mdi mdi-pencil"></i></a>
														<a href="<?= base_url("kelola-users/hapus/" . $user["id"]) ?>" class="btn btn-danger btn-delete"><i class="mdi mdi-trash-can"></i></a>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- container-fluid -->

			</div>
			<!-- content -->

			<!-- footer -->
			<?php $this->load->view("components/backend/_footer"); ?>
			<!-- end of footer -->

		</div>
		<!-- ============================================================== -->
		<!-- End Right content here -->
		<!-- ============================================================== -->

	</div>
	<!-- END wrapper -->

	<!-- scripts -->
	<?php $this->load->view("components/backend/_scripts"); ?>
	<!-- end of scripts -->
	<!-- datatables -->
	<script src="<?= base_url("assets/backend/plugins/datatables/jquery.dataTables.min.js") ?>"></script>
	<script src="<?= base_url("assets/backend/plugins/datatables/dataTables.bootstrap4.min.js") ?>"></script>
	<script src="<?= base_url("assets/backend/plugins/datatables/dataTables.responsive.min.js") ?>"></script>
	<script src="<?= base_url("assets/backend/plugins/datatables/responsive.bootstrap4.min.js") ?>"></script>
	<script src="<?= base_url("assets/backend/assets/pages/datatables.init.js") ?>"></script>
	<!-- end of datatables -->
	<!-- sweet alert -->
	<?php $this->load->view("backend/users/_sweet_alert"); ?>
	<!-- end of sweet alert -->
</body>

</html>
