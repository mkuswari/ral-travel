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
														<th>Kode Booking</th>
														<th>Nominal Transfer</th>
														<th>Bank Asal</th>
														<th>Nama Pengirim</th>
														<th>Bukti Transfer</th>
														<th>Status</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($payments as $payment) : ?>
														<tr>
															<td>
																<?= $payment["booking_code"] ?>
															</td>
															<td>
																<?= $payment["total_payment"] ?>
															</td>
															<td><?= $payment["origin_bank"] ?></td>
															<td><?= $payment["sender_name"] ?></td>
															<td>
																<img src="<?= base_url("assets/uploads/transfers_slip/" . $payment["transfer_slip"]) ?>" width="200">
															</td>
															<td>
																<?php if ($payment["status"] == 0) : ?>
																	<span class="badge badge-warning">Menunggu Konfirmasi</span>
																<?php elseif ($payment["status"] == 1) : ?>
																	<span class="badge badge-success">Pembayaran Diterima</span>
																<?php else : ?>
																	<span class="badge badge-danger">Pembayaran Ditolak</span>
																<?php endif; ?>
															</td>
															<td>
																<a href="<?= base_url("kelola-pembayaran/ubahstatus/" . $payment["id_payment_confirmation"]) ?>" class="btn btn-warning btn-icon">
																	<i class="fa fa-pencil-alt"></i>
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
