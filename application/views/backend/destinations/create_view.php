<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/backend/_head"); ?>
<!-- end of head -->

<link href="<?= base_url("assets/backend/plugins/summernote/summernote-bs4.css") ?>" rel="stylesheet" />

<body>

	<!-- Begin page -->
	<div id="wrapper">

		<!-- topbar -->
		<?php $this->load->view("components/backend/_topbar"); ?>
		<!-- end of topbar -->

		<!-- sidebar -->
		<?php $this->load->view("components/backend/_sidebar"); ?>
		<!-- end of sidebar -->

		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="container-fluid">
					<div class="page-title-box">
						<div class="row justify-content-between">
							<div class="col-auto">
								<h4 class="page-title">Tambah Destinasi Wisata</h4>
							</div>
						</div>
						<!-- end row -->
					</div>
					<!-- end page-title -->


					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-7 mx-auto">
											<form action="<?= base_url("kelola-users/tambah") ?>" method="post" enctype="multipart/form-data">
												<div class="form-group row">
													<label for="name" class="col-sm-2 col-form-label">Nama Destinasi</label>
													<div class="col-sm-10">
														<input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" name="name" id="name">
														<?= form_error('name', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
													</div>
												</div>
												<div class="form-group row">
													<label for="image" class="col-sm-2 col-form-label">Image</label>
													<div class="col-sm-10">
														<input type="file" class="form-control" name="image" id="image">
													</div>
												</div>
												<div class="form-group row">
													<label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
													<div class="col-sm-10">
														<div class="summernote">

														</div>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-sm-2"></div>
													<div class="col-sm-10">
														<button type="submit" class="btn btn-primary">Tambah User</button>
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
				<!-- container-fluid -->

			</div>
			<!-- content -->

			<!-- footer -->
			<?php $this->load->view("components/backend/_footer"); ?>
			<!-- end of footer -->

		</div>
		<!-- ============================================================== -->
		<!-- End Right content here -->
		<!-- ============================================================== -->

	</div>
	<!-- END wrapper -->

	<!-- scripts -->
	<?php $this->load->view("components/backend/_scripts"); ?>
	<!-- end of scripts -->
	<!-- summernote -->
	<script src="<?= base_url("assets/backend/plugins/summernote/summernote-bs4.min.js") ?>"></script>
	<!-- end of summernote -->
</body>

</html>
