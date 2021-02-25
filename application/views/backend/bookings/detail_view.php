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
						<h1>Detail Data Booking</h1>
					</div>

					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-8 mx-auto">
												<h4>Detail Booking</h4>
												<hr>
												<b>Tanggal Booking</b>
												<p><?= $booking["created_at"] ?></p>
												<b>Kode Boking</b>
												<p><?= $booking["booking_code"] ?></p>
												<b>Nama</b>
												<p><?= $booking["name"] ?></p>
												<b>Email</b>
												<p><?= $booking["email"] ?></p>
												<b>No. HP</b>
												<p><?= $booking["phone"] ?></p>
												<b>Durasi Traveling</b>
												<p><?= $booking["duration"] ?> Hari.</p>
												<b>Tanggal Traveling</b>
												<p><?= date('d F Y', strtotime($booking["travel_date"])) ?></p>
												<b>Jumlah Pembayaran</b>
												<p>IDR. <?= $booking["total_payment"] ?></p>
												<b>Tujuan Traveling</b>
												<p><?= $booking["travel_name"] ?></p>
												<hr>
												<h4>Informasi Pembayaran</h4>
												<hr>
												<b>Tanggal Pembayaran</b>
												<p><?= $payment["created_at"] ?></p>
												<b>Slip Pembayaran</b>
												<p>
													<img src="<?= base_url("assets/uploads/transfers_slip/" . $payment["transfer_slip"]) ?>" alt="">
												</p>
												<b>Asal Bank</b>
												<p><?= $payment["origin_bank"] ?></p>
												<b>Nama Pengirim</b>
												<p><?= $payment["sender_name"] ?></p>
											</div>
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
