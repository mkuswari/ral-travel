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
							<h1 class="text-center font-weight-bold" style="font-family: 'Lora', serif;">Testimoni Member</h1>
						</div>

						<div class="card mt-5 card-details shadow border-0">
							<div class="row d-flex justify-content-between">
								<div class="col-6 align-self-center">
									<h4>Semua Wisata</h2>

								</div>
								<div class="col-5 align-self-center">
									<div class="input-group mb-3">
										<input type="text" class="form-control" placeholder="Cari Wisata..." aria-label="Recipient's username" aria-describedby="button-addon2">
										<div class="input-group-append">
											<button class="btn btn-login" type="submit">Search</button>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<section class="section-testimonials-content" id="testimonialsContent" style="margin-top: 0px;">
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
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 text-center">
											<a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
												Lihat Story Lainnya
											</a>
										</div>
									</div>
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
