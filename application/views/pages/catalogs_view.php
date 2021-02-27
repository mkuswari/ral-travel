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
			<div class="container mt-5">
				<div class="row">
					<div class="col-12">
						<div class="card card-details shadow border-0">
							<h1 class="text-center font-weight-bold" style="font-family: 'Lora', serif;">Katalog Paket Wisata</h1>
						</div>

						<div class="card mt-5 card-details shadow border-0">
							<div class="row d-flex justify-content-between">
								<div class="col-6 align-self-center">
									<h4>Semua Wisata</h2>

								</div>
								<div class="col-5 align-self-center">
									<form action="<?= base_url("katalog-wisata") ?>" method="post">
										<div class="input-group mb-3">
											<input type="text" class="form-control" placeholder="Cari Nama Wisata..." name="keyword" id="keyword">
											<div class="input-group-append">
												<button class="btn btn-login" type="submit">Search</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<hr>
							<section class="section-popular-content" id="popularContent">
								<div class="section-popular-travel row">
									<?php foreach ($travels as $travel) : ?>
										<div class="col-sm-6 col-md-4 col-lg-3">
											<div class="card-travel text-center d-flex flex-column" style="background-image: url('http://localhost/ral-travel/assets/uploads/travels/<?= $travel["images"] ?>');">
												<div class="travel-country"><?= $travel["location"] ?></div>
												<div class="travel-location"><?= $travel["name"] ?></div>
												<div class="travel-travel-price">IDR. <?= $travel["price"] ?></div>
												<div class="travel-button mt-auto">
													<a href="<?= base_url("detail/" . $travel["slug"]) ?>" class="btn btn-travel-details px-4">
														Lihat Detail
													</a>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</section>
						</div>
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
