<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/backend/_head"); ?>
<!-- end of head -->

<body>

	<!-- Begin page -->
	<div id="app">

		<div class="main-wrapper main-wrapper-1">
			<!-- navbar -->
			<?php $this->load->view("components/backend/_navbar"); ?>
			<!-- end of navbar -->
			<!-- sidebar -->
			<?php $this->load->view("components/backend/_sidebar"); ?>
			<!-- end of sidebar -->

			<div class="main-content">
				<div class="section">
					<div class="section-header d-flex justify-content-between">
						<h1>Kelola Kategori</h1>
						<a href="<?= base_url("kelola-kategori/tambah") ?>" class="btn btn-primary">Tambah Kategori</a>
					</div>
					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
				</div>
				<div class="section-body">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped" id="table-1">
											<thead>
												<tr>
													<th width="10">No.</th>
													<th width="50">Nama Kategori</th>
													<th width="225">Slug</th>
													<th width="225">Tanggal Dibuat</th>
													<th width="100">Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php $no = 1; ?>
												<?php foreach ($categories as $category) : ?>
													<tr>
														<td><?= $no++; ?></td>
														<td><?= $category["name"] ?></td>
														<td><?= $category["slug"] ?></td>
														<td><?= $category["created_at"] ?></td>
														<td>
															<a href="<?= base_url("kelola-kategori/update/" . $category["category_id"]) ?>" class="btn btn-warning btn-icon">
																<i class="fas fa-pencil-alt"></i>
															</a>
															<a href="<?= base_url("kelola-kategori/hapus/" . $category["category_id"]) ?>" class="btn btn-danger btn-icon btn-delete">
																<i class="fas fa-trash"></i>
															</a>
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
			</div>

		</div>
		<!-- END wrapper -->


		<?php $this->load->view("components/backend/_scripts"); ?>
		<!-- end of datatables -->
</body>

</html>
