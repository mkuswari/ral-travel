<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/backend/_head"); ?>
<!-- end of head -->

<body>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<!-- navbar -->
			<?php $this->load->view("components/backend/_navbar"); ?>
			<!-- end of navbar -->
			<!-- sidebar -->
			<?php $this->load->view("components/backend/_sidebar"); ?>
			<!-- end of sidebar -->

			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="section-header d-flex justify-content-between">
						<h1>Update Destinasi</h1>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-8 mx-auto">
												<form action="<?= base_url("kelola-destinasi/tambah") ?>" method="post" enctype="multipart/form-data">
													<input type="hidden" name="id" id="id" value="<?= $destination["id"] ?>">
													<div class="form-group row">
														<label for="name" class="col-sm-2 col-form-label">Nama</label>
														<div class="col-sm-10">
															<input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" name="name" id="name" value="<?= $destination["name"] ?>">
															<?= form_error('name', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
														</div>
													</div>
													<div class="form-group row">
														<label for="images" class="col-sm-2 col-form-label">Images</label>
														<div class="col-sm-10">
															<img src="<?= base_url("assets/uploads/destinations/" . $destination["images"]) ?>" width="100%" style="height: 400px; object-fit: cover; object-position: center;" class="rounded mb-2">
															<input type="file" class="form-control <?= form_error('images') ? 'is-invalid' : '' ?>" name="images" id="images">
															<small class="text-muted">Kosongkan jika tidak ingin merubah</small>
															<?= form_error('images', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
														</div>
													</div>
													<div class="form-group row">
														<label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
														<div class="col-sm-10">
															<textarea class="summernote-simple" id="description" name="description"><?= $destination["description"] ?></textarea>
															<?= form_error('description', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
														</div>
													</div>
													<div class="form-group row">
														<div class="col-sm-2"></div>
														<div class="col-sm-10">
															<button type="submit" class="btn btn-primary">Update Destinasi</button>
															<button type="reset" class="btn btn-warning text-white">Reset Form</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!-- footer -->
			<?php $this->load->view("components/backend/_footer"); ?>
			<!-- end of footer -->
		</div>
	</div>

	<!-- scripts -->
	<?php $this->load->view("components/backend/_scripts"); ?>
	<!-- end of scripts -->
</body>

</html>
