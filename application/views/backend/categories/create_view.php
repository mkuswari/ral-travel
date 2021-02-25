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
						<h1>Tambah Testimoni</h1>
					</div>

					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-8 mx-auto">
												<form action="<?= base_url("kelola-kategori/tambah") ?>" method="post">
													<div class="form-group row">
														<label for="user_id" class="col-sm-2 col-form-label">Nama Kategori</label>
														<div class="col-sm-10">
															<input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" name="name" id="name">
															<?= form_error('name', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
														</div>
													</div>
													<div class="form-action row">
														<div class="col-sm-2"></div>
														<div class="col-sm-10">
															<button type="submit" class="btn btn-primary">Tambah Kategori</button>
															<button type="reset" class="btn btn-warning">Reset Form</button>
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
	<!-- <?php $this->load->view("backend/users/_sweet_alert"); ?> -->
</body>

</html>
