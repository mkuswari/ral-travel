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
						<h1>Update Testimoni</h1>
					</div>

					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-8 mx-auto">
												<form action="<?= base_url("kelola-blog/update/" . $blog["blog_id"]) ?>" method="post" enctype="multipart/form-data">
													<input type="hidden" name="blog_id" id="blog_id" value="<?= $blog["blog_id"] ?>">
													<div class="form-group row">
														<label for="user_id" class="col-sm-2 col-form-label">Judul Artikel</label>
														<div class="col-sm-10">
															<input type="text" class="form-control <?= form_error('title') ? 'is-invalid' : ''; ?>" name="title" id="title" value="<?= $blog["title"] ?>">
															<?= form_error('title', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
														</div>
													</div>
													<div class="form-group row">
														<label for="category_id" class="col-sm-2 col-form-label">Kategori</label>
														<div class="col-sm-10">
															<select name="category_id" id="category_id" class="form-control <?= form_error('category_id') ? 'is-invalid' : ''; ?>">
																<option value="" selected disabled>--Pilih Kategori--</option>
																<?php foreach ($categories as $category) : ?>
																	<?php if ($category["category_id"] == $blog["category_id"]) : ?>
																		<option value="<?= $category["category_id"]; ?>" selected><?= $category["name"]; ?></option>
																	<?php else : ?>
																		<option value="<?= $category["category_id"]; ?>"><?= $category["name"]; ?></option>
																	<?php endif; ?>
																<?php endforeach; ?>
															</select>
															<?= form_error('category_id', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
														</div>
													</div>
													<div class="form-group row">
														<label for="thumbnail" class="col-sm-2 col-form-label">Thumbnail</label>
														<div class="col-sm-10">
															<img src="<?= base_url("assets/uploads/blogs/" . $blog["thumbnail"]) ?>" width="100%" class="rounded mb-2" style="height: 350px; object-fit: cover; object-position: center;">
															<input type="file" name="thumbnail" id="thumbnail" class="form-control">
															<small class="text-muted">Kosongkan jika tidak ingin merubah</small>
														</div>
													</div>
													<div class="form-group row">
														<label for="author" class="col-sm-2 col-form-label">Author</label>
														<div class="col-sm-10">
															<input type="text" name="author" id="author" class="form-control <?= form_error('author') ? 'is-invalid' : ''; ?>" value="<?= $blog["author"] ?>">
															<?= form_error('author', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
														</div>
													</div>
													<div class="form-group row">
														<label for="content" class="col-sm-2 col-form-label">Konten</label>
														<div class="col-sm-10">
															<textarea class="summernote" id="content" name="content"><?= $blog["content"] ?></textarea>
															<?= form_error('content', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
														</div>
													</div>
													<div class="form-action row">
														<div class="col-sm-2"></div>
														<div class="col-sm-10">
															<button type="submit" class="btn btn-primary">Update Artikel</button>
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
