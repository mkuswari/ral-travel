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
						<h1>Kelola Paket Wisata</h1>
						<a href="<?= base_url("kelola-wisata/tambah") ?>" class="btn btn-primary">Tambah Wisata</a>
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
														<th width="350">Thumbnail</th>
														<th>Nama Wisata</th>
														<th>Slug</th>
														<th>Lokasi</th>
														<th>Harga Paket</th>
														<!-- <th>Harga Promo</th> -->
														<th width="120">Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php $no = 1; ?>
													<?php foreach ($travels as $travel) : ?>
														<tr>
															<td><?= $no++; ?></td>
															<td>
																<img src="<?= base_url("assets/uploads/travels/" . $travel["images"]) ?>" width="100%" class="rounded" style="height: 170px; object-fit: cover; object-position: center;">
															</td>
															<td><?= $travel["name"] ?></td>
															<td><?= $travel["slug"] ?></td>
															<td><?= $travel["location"] ?></td>
															<td>IDR. <?= number_format($travel["price"]) ?></td>
															<td>
																<a href="<?= base_url("paket/" . $travel["slug"]) ?>" class="btn btn-info btn-icon"><i class="fas fa-eye"></i></a>
																<a href="<?= base_url("kelola-wisata/update/" . $travel["travel_id"]) ?>" class="btn btn-warning btn-icon"><i class="fas fa-pencil-alt"></i></a>
																<a href="<?= base_url("kelola-wisata/hapus/" . $travel["travel_id"]) ?>" class="btn btn-danger btn-icon btn-delete"><i class="fas fa-trash"></i></a>
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
</body>

</html>
