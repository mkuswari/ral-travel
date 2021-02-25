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
						<h1>Kelola Testimoni</h1>
						<a href="<?= base_url("kelola-testimoni/tambah") ?>" class="btn btn-primary">Tambah Testimoni</a>
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
														<th>Nama User</th>
														<th>Testimoni</th>
														<th>Tanggal</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php $no = 1; ?>
													<?php foreach ($testimonials as $testimonial) : ?>
														<tr>
															<td><?= $no++; ?></td>
															<td><?= $testimonial["name"] ?></td>
															<td>
																<?= $testimonial["content"] ?>
															</td>
															<td><?= $testimonial["created_at"] ?></td>
															<td>
																<a href="<?= base_url("kelola-testimoni/update/" . $testimonial["testimonial_id"]) ?>" class="btn btn-warning btn-icon">
																	<i class="fa fa-pencil-alt"></i>
																</a>
																<a href="<?= base_url("kelola-testimoni/hapus/" . $testimonial["testimonial_id"]) ?>" class="btn btn-danger btn-icon btn-delete">
																	<i class="fa fa-trash"></i>
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
	<!-- <?php $this->load->view("backend/users/_sweet_alert"); ?> -->
</body>

</html>
