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
						<h1>Kelola Destinasi</h1>
						<a href="<?= base_url("kelola-destinasi/tambah") ?>" class="btn btn-primary">Tambah Destinasi</a>
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
														<th width="10">No.</th>
														<th width="350">Image</th>
														<th>Nama Destinasi</th>
														<th>Deskripsi</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php $no = 1; ?>
													<?php foreach ($destinations as $destination) : ?>
														<tr>
															<td><?= $no++; ?></td>
															<td>
																<img src="<?= base_url("assets/uploads/destinations/" . $destination["images"]) ?>" width="100%" style="height: 150px; object-fit: cover; object-position: center;">
															</td>
															<td><?= $destination["name"] ?></td>
															<td>
																<small class="text-muted"><?= $destination["description"] ?></small>
															</td>
															<td>
																<a href="<?= base_url("kelola-destinasi/update/" . $destination["id"]) ?>" class="btn btn-warning btn-icon"><i class="fas fa-pencil-alt"></i></a>
																<a href="<?= base_url("kelola-destinasi/hapus/" . $destination["id"]) ?>" class="btn btn-danger btn-icon"><i class="fas fa-trash"></i></a>
															</td>
														</tr>
													<?php endforeach; ?>
													<!-- todo -->
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
