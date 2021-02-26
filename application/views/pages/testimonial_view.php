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
							<section class="section-testimonials-content" id="testimonialsContent" style="margin-top:0;">
								<div class="container">
									<?= $this->session->flashdata('message'); ?>
									<div class="section-popular-travel row match-height">
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
