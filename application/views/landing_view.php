<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/frontend/_head"); ?>
<!-- end of head -->

<body>
	<!-- navbar -->
	<?php $this->load->view("components/frontend/_navbar"); ?>
	<!-- end of navbar -->

	<header class="text-center">
		<h1>
			Jelajahi Keindahan Alam ini
			<br />
			Hanya dengan sekali Klik
		</h1>
		<p class="mt-3">
			Rasakan moment terbaik
			<br />
			yang belum pernah kamu rasakan sebelumnya.
		</p>
		<a href="<?= base_url("katalog-wisata") ?>" class="btn btn-get-started px-4 mt-4">
			Lihat Paket Wisata
		</a>
	</header>
	<main>
		<div class="container">
			<section class="section-stats row justify-content-center" id="stats">
				<div class="col-3 col-md-2 stats-detail">
					<h2>200</h2>
					<p>Member</p>
				</div>
				<div class="col-3 col-md-2 stats-detail">
					<h2>12</h2>
					<p>Paket Wisata</p>
				</div>
				<div class="col-3 col-md-2 stats-detail">
					<h2>3</h2>
					<p>Testimonial</p>
				</div>
				<div class="col-3 col-md-2 stats-detail">
					<h2>72</h2>
					<p>Artikel</p>
				</div>
			</section>
		</div>
		<section class="section-popular" id="popular">
			<div class="container">
				<div class="row">
					<div class="col text-center section-popular-heading">
						<h2>Wisata Terbaru</h2>
						<p>
							Beberapa Paket Wisata baru
							<br />
							yang kami tambahkan
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="section-popular-content" id="popularContent">
			<div class="container">
				<div class="section-popular-travel row justify-content-center">
					<?php foreach ($travels as $travel) : ?>
						<div class="col-sm-6 col-md-4 col-lg-3">
							<div class="card-travel text-center d-flex flex-column" style="background-image: url('http://localhost/ral-travel/assets/uploads/travels/<?= $travel["images"] ?>');">
								<div class="travel-country"><?= $travel["location"] ?></div>
								<div class="travel-location"><?= $travel["name"] ?></div>
								<div class="travel-travel-price">IDR. <?= number_format($travel["price"]) ?></div>
								<div class="travel-button mt-auto">
									<a href="<?= base_url("detail/" . $travel["slug"]) ?>" class="btn btn-travel-details px-4">
										Lihat Detail
									</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<section class="section-testimonials-heading" id="testimonialsHeading">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2>Apa kata mereka?</h2>
						<p>
							Apa kata member
							<br />
							tentang kami?
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="section-testimonials-content" id="testimonialsContent">
			<div class="container">
				<div class="section-popular-travel row justify-content-center match-height">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card card-testimonial text-center shadow-lg border-0">
							<div class="testimonial-content">
								<img src="frontend/images/avatar-1.png" alt="" class="mb-4 rounded-circle" />
								<h3 class="mb-4">Angga Risky</h3>
								<p class="testimonials">
									“ It was glorious and I could not stop to say wohooo for
									every single moment Dankeeeeee “
								</p>
							</div>
							<hr />
							<p class="trip-to mt-2">Trip to Ubud</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card card-testimonial text-center shadow-lg border-0">
							<div class="testimonial-content">
								<img src="frontend/images/avatar-2.png" alt="" class="mb-4 rounded-circle" />
								<h3 class="mb-4">Shayna</h3>
								<p class="testimonials">
									“ The trip was amazing and I saw something beautiful in that
									Island that makes me want to learn more “
								</p>
							</div>
							<hr />
							<p class="trip-to mt-2">Trip to Nusa Penida</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card card-testimonial text-center shadow-lg border-0">
							<div class="testimonial-content mb-auto">
								<img src="frontend/images/avatar-3.png" alt="" class="mb-4 rounded-circle" />
								<h3 class="mb-4">Shabrina</h3>
								<p class="testimonials">
									“ I loved it when the waves was shaking harder — I was
									scared too “
								</p>
							</div>
							<hr />
							<p class="trip-to mt-2">Trip to Karimun Jawa</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
							Saya butuh bantuan
						</a>
						<a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
							Lihat Paket Wisata
						</a>
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
