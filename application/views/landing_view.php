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
					<?php if ($testimonials) : ?>
						<?php foreach ($testimonials as $testimonial) : ?>
							<div class="col-sm-6 col-md-6 col-lg-4">
								<div class="card card-testimonial text-center shadow-lg border-0">
									<div class="testimonial-content">
										<img src="<?= base_url("assets/uploads/avatars/" . $testimonial["avatar"]) ?>" style="width:100px; height:100px; object-fit: cover; object-position: center;" class="mb-4 rounded-circle" />
										<h3 class="mb-4"><?= $testimonial["name"] ?></h3>
										<p class="testimonials">
											“ <?= $testimonial["content"] ?> “
										</p>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php else : ?>
						<img src="<?= base_url("assets/frontend/images/no-data.svg") ?>" width="400">
					<?php endif; ?>
				</div>
				<?php if ($testimonials) : ?>
					<div class="row">
						<div class="col-12 text-center">
							<a href="<?= base_url("testimoni") ?>" class="btn btn-get-started px-4 mt-4 mx-1">
								Lihat Story Lainnya
							</a>
						</div>
					</div>
				<?php endif; ?>
				<hr>
				<?php if ($this->session->userdata("email")) : ?>
					<div class="card shadow border-0">
						<div class="card-body">
							<div class="row">
								<div class="col text-center">
									<h4 class="font-weight-bold" style="font-family: 'Lora', serif;">Bagikan Cerita Kamu?</h4>
									<p>Bagikan cerita seru kamu di RAL T&T melalui form dibawah ini.</p>
									<hr>
									<div class="testimonial-content px-5">
										<form action="<?= base_url("testimoni/tambah") ?>" method="post">
											<textarea class="form-control" name="content" id="content" rows="6" placeholder="Tuliskan pengalaman kamu menggunakan RAL T&T disini..." required></textarea>
											<button type="submit" class="btn btn-login mt-2">Kirim Story Kamu</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</section>

		<section class="section-blogs bg-light py-5">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 style="font-family: 'Lora', serif;" class="font-weight-bold">Artikel Terbaru</h2>
						<hr>
					</div>
				</div>
				<div class="row">
					<?php if ($blogs) : ?>
						<?php foreach ($blogs as $blog) : ?>
							<div class="col-sm-4">
								<div class="card shadow border-0">
									<img src="<?= base_url("assets/uploads/blogs/" . $blog["thumbnail"]) ?>" class="card-img-top" width="100%" style="object-cover; object-position: center; height:200px;">
									<div class="card-body">
										<a href="<?= base_url("blogs/" . $blog["slug"]) ?>" class="card-text font-weight-bold text-dark"><?= $blog["title"] ?></a>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php else : ?>
						<img src="<?= base_url("assets/frontend/images/no-data.svg") ?>" width="400" class="mx-auto">
					<?php endif; ?>
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
