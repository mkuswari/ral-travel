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
					<div class="col p-0 pl-3 pl-lg-0"">
              			<nav class=" text-white" aria-label=" breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item" aria-current="page">
								Paket Travel
							</li>
							<li class="breadcrumb-item text-white font-weight-bold" aria-current="page">
								<?= $travel["name"] ?>
							</li>
						</ol>
						</nav>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 pl-lg-0">
						<div class="card card-details shadow border-0">
							<h1><?= $travel["name"] ?></h1>
							<p>
								<?= $travel["location"] ?>
							</p>
							<div class="gallery">
								<div class="xzoom-container">
									<img class="xzoom" id="xzoom-default" src="<?= base_url("assets/uploads/travels/" . $travel["images"]) ?>" xoriginal="<?= base_url("assets/uploads/travels/" . $travel["images"]) ?>" />
									<div class="xzoom-thumbs">
										<a href="<?= base_url("assets/uploads/travels/" . $travel["images"]) ?>"><img class="xzoom-gallery" width="128" src="<?= base_url("assets/uploads/travels/" . $travel["images"]) ?>" xpreview="<?= base_url("assets/uploads/travels/" . $travel["images"]) ?>" /></a>
										<a href="<?= base_url("assets/frontend/images/details-1.jpg") ?>"><img class="xzoom-gallery" width="128" src="<?= base_url("assets/frontend/images/details-1.jpg") ?>" xpreview="<?= base_url("assets/frontend/images/details-1.jpg") ?>" /></a>
										<a href="<?= base_url("assets/frontend/images/details-1.jpg") ?>"><img class="xzoom-gallery" width="128" src="<?= base_url("assets/frontend/images/details-1.jpg") ?>" xpreview="<?= base_url("assets/frontend/images/details-1.jpg") ?>" /></a>
										<a href="<?= base_url("assets/frontend/images/details-1.jpg") ?>"><img class="xzoom-gallery" width="128" src="<?= base_url("assets/frontend/images/details-1.jpg") ?>" xpreview="<?= base_url("assets/frontend/images/details-1.jpg") ?>" /></a>
										<a href="<?= base_url("assets/frontend/images/details-1.jpg") ?>"><img class="xzoom-gallery" width="128" src="<?= base_url("assets/frontend/images/details-1.jpg") ?>" xpreview="<?= base_url("assets/frontend/images/details-1.jpg") ?>" /></a>
									</div>
								</div>
								<h2>Tentang Wisata</h2>
								<div>
									<?= $travel["description"] ?>
								</div>
							</div>
						</div>
						<section class="section-popular-content mt-4" id="popularContent">
							<h4 class="font-weight-bold">Wisata Lainnya</h4>
							<hr>
							<div class="section-popular-travel row justify-content-center">
								<?php foreach ($travels as $travel) : ?>
									<div class="col-sm-6 col-md-4 col-lg-4">
										<div class="card-travel text-center d-flex flex-column shadow-lg" style="background-image: url('http://localhost/ral-travel/assets/uploads/travels/<?= $travel["images"] ?>');">
											<div class="travel-country"><?= $travel["location"] ?></div>
											<div class="travel-location"><?= $travel["name"] ?></div>
											<div class="travel-travel-price">IDR. <?= $travel["price"] ?></div>
											<div class="travel-button mt-auto">
												<a href="<?= base_url("paket/" . $travel["slug"]) ?>" class="btn btn-travel-details px-4">
													Lihat Detail
												</a>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</section>
						<!-- <section class="section-reviews mt-4">
							<h4 class="font-weight-bold">Ulasan Member</h4>
							<hr>
						</section> -->
					</div>
					<div class="col-lg-4">
						<form action="" method="post">
							<div class="card card-details card-right shadow border-0">
								<h2>Detail Lengkap</h2>
								<table class="trip-informations">
									<tr>
										<th width="50%">Lokasi</th>
										<td width="50%" class="text-right"><?= $travel["location"] ?></td>
									</tr>
									<tr>
										<th width="50%">Harga</th>
										<td width="50%" class="text-right">IDR. <?= $travel["price"] ?></td>
									</tr>
								</table>
								<hr>
								<div class="form-group">
									<label for="duration">Berapa Hari</label>
									<input type="number" class="form-control" name="duration" id="duration">
								</div>
								<div class="form-group">
									<label for="duration">Pilih Tanggal</label>
									<input type="date" class="form-control" name="duration" id="duration">
								</div>
							</div>
							<div class="join-container">
								<button tyle="submit" class="btn btn-block btn-join-now mt-3 py-2">Booking Sekarang</button>
							</div>
						</form>
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
