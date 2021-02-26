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
							<h1 class="text-center font-weight-bold" style="font-family: 'Lora', serif;">Blogs</h1>
						</div>

						<div class="card mt-5 card-details shadow border-0">
							<div class="row d-flex justify-content-between">
								<div class="col-6 align-self-center">
									<h4>Semua Artikel</h2>

								</div>
								<div class="col-5 align-self-center">
									<div class="input-group mb-3">
										<input type="text" class="form-control" placeholder="Cari Artkel..." aria-label="Recipient's username" aria-describedby="button-addon2">
										<div class="input-group-append">
											<button class="btn btn-login" type="submit">Search</button>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<section class="section-popular-content" id="popularContent">
								<div class="section-popular-travel row">
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
										<img src="<?= base_url("assets/frontend/images/no-data.svg") ?>" width="400">
									<?php endif; ?>
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
