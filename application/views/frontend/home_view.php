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
									<a href="">Profile Saya</a>
								</li>
								<li>
									<a href="<?= base_url("logout") ?>" class="text-danger">Log Out</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-9 pl-lg-0">
						<div class="card card-details mb-3">
							<h1>Data Booking</h1>
							<hr>
							<table class="table">
								<thead class="thead-light">
									<tr>
										<th scope="col">Kode Booking</th>
										<th scope="col">Tujuan</th>
										<th scope="col">Tangal Traveling</th>
										<th scope="col">Durasi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($bookings as $booking) : ?>
										<tr>
											<td><?= $booking["booking_code"] ?></td>
											<td><?= $booking["travel_name"] ?></td>
											<td>
												<?= date('d F Y', strtotime($booking["travel_date"])) ?>
											</td>
											<td><?= $booking["duration"] ?> Hari</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
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
