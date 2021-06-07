<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("components/frontend/_head"); ?>

<body>
	<?php $this->load->view("components/frontend/_navbar"); ?>
	<main>
		<section class="section-details-header"></section>
		<section class="section-details-content">
			<div class="container">
				<div class="row mt-5">
					<div class="col-lg-3">
						<div class="card card-details shadow border-0">
							<div class="text-center">
								<img src="<?= base_url("assets/uploads/avatars/" . $this->session->userdata("avatar")) ?>" style="height: 100px; width: 100px; object-position: center; object-fit: cover; border-radius: 50%;" class="shadow mb-2">
								<h2><?= $this->session->userdata("name"); ?></h2>
								<small class="text-muted"><?= $this->session->userdata("email"); ?></small>
							</div>
							<hr>
							<ul>
								<li>
									<a href="<?= base_url("home") ?>">Data Booking</a>
								</li>
								<li>
									<a href="<?= base_url("profile") ?>">Profile Saya</a>
								</li>
								<li>
									<a href="<?= base_url("logout") ?>" class="text-danger">Log Out</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-9 pl-lg-0">
						<div class="card card-details mb-3">
							<h1>Detail Data Booking</h1>
							<hr>
							<h2>Informasi Booking</h2>
							<table class="table">
								<tr>
									<td>Kode Booking</td>
									<td>:</td>
									<td><?= $booking["booking_code"] ?></td>
								</tr>
								<tr>
									<td>Paket Wisata</td>
									<td>:</td>
									<td><?= $booking["travel_name"]; ?></td>
								</tr>
								<tr>
									<td>Tanggal Travel</td>
									<td>:</td>
									<td><?= $booking["travel_date"] ?></td>
								</tr>
								<tr>
									<td>Durasi Travel</td>
									<td>:</td>
									<td><?= $booking["duration"] ?> Hari</td>
								</tr>
								<tr>
									<td>Nominal Pembayaran</td>
									<td>:</td>
									<td>Rp. <?= number_format($booking["total_payment"]) ?></td>
								</tr>
							</table>
							<hr>
							<h2>Informasi Bukti Pembayaran</h2>
							<table class="table">
								<tr>
									<td>Nama Pengirim</td>
									<td>:</td>
									<td><?= $payment["sender_name"] ?></td>
								</tr>
								<tr>
									<td>Asal Bank</td>
									<td>:</td>
									<td><?= $payment["origin_bank"] ?></td>
								</tr>
								<tr>
									<td>Slip Pembayaran</td>
									<td>:</td>
									<td>
										<img src="<?= base_url("assets/uploads/transfers_slip/" . $payment["transfer_slip"]) ?>" width="350">
									</td>
								</tr>
								<tr>
									<td>Status Pembayaran</td>
									<td>:</td>
									<td>
										<?php if ($payment["status"] == 0) : ?>
											<span class="badge badge-warning text-white">Menunggu Konfirmasi</span>
										<?php elseif ($payment["status"] == 1) : ?>
											<span class="badge badge-success">Pembayaran Diterima</span>
										<?php else : ?>
											<span class="badge badge-danger">Pembayaran Ditolak</span>
										<?php endif; ?>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php $this->load->view("components/frontend/_footer"); ?>
	<?php $this->load->view("components/frontend/_scripts"); ?>
</body>

</html>
