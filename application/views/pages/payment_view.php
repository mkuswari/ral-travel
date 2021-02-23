<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/frontend/_head"); ?>
<!-- end of head -->

<body>
	<!-- navbar -->
	<?php $this->load->view("components/frontend/_navbar"); ?>
	<!-- end of navbar -->
	<main>
		<section class="section-details-header"></section>
		<section class="section-details-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-details shadow border-0">
							<h2>Informasi Pembayaran</h2>
							<hr>
							<table class="trip-informations">
								<tr>
									<th width="50%">Kode Booking</th>
									<td width="50%" class="text-right"><?= $booking["booking_code"] ?></td>
								</tr>
								<tr>
									<th width="50%">Durasi</th>
									<td width="50%" class="text-right"><?= $booking["duration"] ?> Hari.</td>
								</tr>
								<tr>
									<th width="80%">Total Bayar</th>
									<td width="20%" class="text-right">IDR. <?= number_format($booking["total_payment"]) ?></td>
								</tr>
								<tr>
									<th width="30%">Tanggal</th>
									<td width="70%" class="text-right"><?= date('d F Y', strtotime($booking["travel_date"])) ?></td>
								</tr>
							</table>

							<hr />
							<h2>Petunjuk Pembayaran</h2>
							<p class="payment-instructions">
								Lakukan Transfer ke bank berikut untuk melanjutkan
							</p>
							<div class="bank">
								<div class="bank-item pb-3">
									<img src="<?= base_url("assets/frontend/images/ic_bank.png") ?>" alt="" class="bank-image" />
									<div class="description">
										<h3>Ral T&T Travel</h3>
										<p>
											0881 8829 8800
											<br />
											Bank BCA
										</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 pl-lg-0">
						<div class="card card-details mb-3">
							<h1>Konfirmasi Pembayaran</h1>
							<hr>
							<form action="<?= base_url("konfirmasi-pembayaran/" . $booking["booking_code"]) ?>" method="POST" class="p-3" enctype="multipart/form-data">
								<input type="hidden" name="booking_id" value="<?= $booking["booking_id"] ?>">
								<div class="form-group">
									<label for="transfer_slip">Upload Bukti Transfer</label>
									<input type="file" class="form-control" name="transfer_slip" id="transfer_slip">
								</div>
								<div class="form-group">
									<label for="origin_bank">Asal Bank</label>
									<select name="origin_bank" id="origin_bank" class="form-control <?= form_error("origin_bank") ? "is-invalid" : "" ?>">
										<option value="" selected disabled>--Pilih Bank Asal--</option>
										<option value="BCA">Bank BCA</option>
										<option value="Mandiri">Bank Mandiri</option>
										<option value="BRI">Bank BRI</option>
										<option value="BNI">Bank BNI</option>
									</select>
									<?= form_error('origin_bank', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
								</div>
								<div class="form-group">
									<label for="sender_name">Nama Pengirim</label>
									<input type="text" class="form-control <?= form_error("sender_name") ? "is-invalid" : "" ?>" name="sender_name" id="sender_name">
									<?= form_error('sender_name', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
								</div>
								<div class="form-action">
									<button type="submit" class="btn btn-block btn-login rounded-0">Konfirmasi Sekarang</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- footer -->
	<?php $this->load->view("components/frontend/_footer"); ?>
	<!-- end of footer -->
	<!-- scripts -->
	<?php $this->load->view("components/frontend/_scripts"); ?>
	<!-- end of scripts -->
</body>

</html>
