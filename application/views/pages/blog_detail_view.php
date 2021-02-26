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
					<div class="col p-0 pl-3 pl-lg-0"">
              			<nav class=" text-white" aria-label=" breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item" aria-current="page">
								Blogs
							</li>
							<li class="breadcrumb-item text-white font-weight-bold" aria-current="page">
								<?= $blog["title"] ?>
							</li>
						</ol>
						</nav>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card mt-5 card-details shadow border-0">
							<div class="row d-flex justify-content-between">
								<div class="col-10 mx-auto">
									<h4 class="text-center"><?= $blog["title"] ?></h2>
										<hr>
										<span>Author : <?= $blog["author"] ?></span> | <span>Diposting : <?= date("d-F-Y", strtotime($blog["created_at"])) ?></span>
										<hr>
										<img src="<?= base_url("assets/uploads/blogs/" . $blog["thumbnail"]) ?>" width="100%" style="height: 300px; object-fit: cover; object-position: center;">
										<div>
											<?= $blog["content"] ?>
										</div>
								</div>
							</div>
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
