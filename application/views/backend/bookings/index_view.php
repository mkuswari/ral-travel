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
						<h1>Kelola Data Booking</h1>
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
														<th>Tanggal</th>
														<th>Kode Booking</th>
														<th>Nama</th>
														<th>Wisata</th>
														<th>Durasi</th>
														<th>Taggal Traveling</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($bookings as $booking) : ?>
														<tr>
															<td><?= date('d F Y', strtotime($booking["created_at"])) ?></td>
															<td>
																<?= $booking["booking_code"] ?>
															</td>
															<td><?= $booking["name"] ?></td>
															<td><?= $booking["travel_name"] ?></td>
															<td><?= $booking["duration"] ?> Hari</td>
															<td>
																<?= date('d F Y', strtotime($booking["travel_date"])) ?>
															</td>
															<td>
																<a href="<?= base_url("kelola-booking/detail/" . $booking["booking_id"]) ?>" class="btn btn-info btn-icon">
																	<i class="fa fa-eye"></i>
																</a>
																<a href="<?= base_url("kelola-booking/hapus/" . $booking["booking_id"]) ?>" class="btn btn-danger btn-icon btn-delete">
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
