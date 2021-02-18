<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/backend/_head"); ?>
<!-- end of head -->

<body>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<!-- navbar -->
			<?php $this->load->view("components/backend/_navbar"); ?>
			<!-- end of navbar -->
			<!-- sidebar -->
			<?php $this->load->view("components/backend/_sidebar"); ?>
			<!-- end of sidebar -->

			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="section-header d-flex justify-content-between">
						<h1>Kelola Users</h1>
						<a href="<?= base_url("kelola-users/tambah") ?>" class="btn btn-primary">Tambah User</a>
					</div>

					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-striped" id="table-1">
												<thead>
													<tr>
														<th>No.</th>
														<th>Avatar</th>
														<th>Nama</th>
														<th>Email</th>
														<th>Phone</th>
														<th>Alamat</th>
														<th>Hak Akses</th>
														<th>Bergabung</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php $no = 1; ?>
													<?php foreach ($users as $user) : ?>
														<tr>
															<td><?= $no++; ?></td>
															<td>
																<img src="<?= base_url("assets/uploads/avatars/" . $user["avatar"]) ?>" style="width: 50px; heigh: 50px; object-fit: cover; object-position: center; border-radius: 50%;">
															</td>
															<td><?= $user["name"] ?></td>
															<td><?= $user["email"] ?></td>
															<td><?= $user["phone"] ?></td>
															<td>
																<small><?= $user["address"] ?></small>
															</td>
															<td>
																<?php if ($user["role"] == "admin") : ?>
																	<span class="badge badge-success">Admin</span>
																<?php else : ?>
																	<span class="badge badge-warning">Member</span>
																<?php endif; ?>
															</td>
															<td><?= date('d F Y', strtotime($user["created_at"])) ?></td>
															<td>
																<a href="<?= base_url("kelola-users/update/" . $user["id"]) ?>" class="btn btn-warning btn-icon"><i class="fas fa-pencil-alt"></i></a>
																<a href="<?= base_url("kelola-users/delete/" . $user["id"]) ?>" class="btn btn-danger btn-icon btn-delete"><i class="fas fa-trash"></i></a>
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
					</div>
				</section>
			</div>
			<!-- footer -->
			<?php $this->load->view("components/backend/_footer"); ?>
			<!-- end of footer -->
		</div>
	</div>

	<!-- scripts -->
	<?php $this->load->view("components/backend/_scripts"); ?>
	<!-- end of scripts -->
	<?php $this->load->view("backend/users/_sweet_alert"); ?>
</body>

</html>
