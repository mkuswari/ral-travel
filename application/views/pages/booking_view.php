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
					<div class="col-lg-5">
						<div class="card shadow border-0 card-details">
							<h2>Informasi</h2>
							<table class="trip-informations">
								<img src="<?= base_url("assets/uploads/travels/" . $travel["images"]) ?>" width="100%" style="height: 200px; object-fit: cover; object-position: center;" class="rounded">
								<hr>
								<tr>
									<th width="50%">Nama</th>
									<td width="50%" class="text-right"><?= $travel["name"] ?></td>
								</tr>
								<tr>
									<th width="50%">Lokasi</th>
									<td width="50%" class="text-right"><?= $travel["location"] ?></td>
								</tr>
								<tr>
									<th width="40%">Biaya</th>
									<td width="60%" class="text-right">IDR. <?= number_format($travel["price"]) ?> / Hari</td>
								</tr>
								<tr>
									<th width="40%">Durasi</th>
									<td width="60%" class="text-right"><?= $duration ?> Hari.</td>
								</tr>
								<tr>
									<th width="40%">Tanggal Traveling</th>
									<td width="60%" class="text-right"><?= date('d F Y', strtotime($travel_date)) ?></td>
								</tr>
							</table>
							<hr>
							<div class="text-center">
								<h4 class="font-weight-bold" style="font-family: 'Lora', serif;">Jumlah Bayar</h4>
								<h4>IDR. <?= number_format($travel["price"] * $duration) ?></h4>
							</div>
						</div>
					</div>
					<div class="col-lg-7 pl-lg-0">
						<div class="card shadow border-0 card-details mb-3">
							<h1>Booking Information</h1>
							<p><?= $travel["name"] ?></p>
							<hr>
							<form action="<?= base_url("proses-booking/" . $travel["travel_id"]) ?>" method="POST" class="p-3">
								<input type="hidden" name="user_id" value="<?= $this->session->userdata("user_id"); ?>">
								<input type="hidden" name="travel_id" value="<?= $travel["travel_id"] ?>">
								<div class="form-group">
									<label for="name">Nama Lengkap</label>
									<input type="text" class="form-control <?= form_error("name") ? "is-invalid" : "" ?>" name="name" id="name" value="<?= $this->session->userdata("name"); ?>">
									<?= form_error('name', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control <?= form_error("email") ? "is-invalid" : "" ?>" name="email" id="email" value="<?= $this->session->userdata("email"); ?>">
									<?= form_error('email', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
								</div>
								<div class="form-group">
									<label for="phone">Phone</label>
									<input type="text" class="form-control <?= form_error("phone") ? "is-invalid" : "" ?>" name="phone" id="phone" value="<?= $this->session->userdata("phone"); ?>">
									<?= form_error('phone', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
								</div>
								<div class="form-group">
									<label for="duration">Durasi Traveling</label>
									<input type="text" class="form-control <?= form_error("duration") ? "is-invalid" : "" ?>" name="duration" id="duration" value="<?= $duration ?>" readonly>
									<?= form_error('duration', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
								</div>
								<div class="form-group">
									<label for="travel_date">Tanggal Traveling</label>
									<input type="date" class="form-control <?= form_error("travel_date") ? "is-invalid" : "" ?>" name="travel_date" id="travel_date" value="<?= $travel_date ?>" readonly>
									<?= form_error('travel_date', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
								</div>
								<div class="form-group d-none">
									<label for="total_payment">Total Pembayaran</label>
									<input type="text" class="form-control" name="total_payment" id="total_payment" value="<?= $travel["price"] * $duration ?>">
								</div>
								<div class="form-action">
									<button type="submit" class="btn btn-block btn-login rounded-0">Booking Sekarang</button>
									<a href="" class="btn btn-block btn-light rounded-0">Batal</a>
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
