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
												<form action="<?= base_url("kelola-testimoni/update/" . $testimonial["testimonial_id"]) ?>" method="post">
													<input type="hidden" name="testimonial_id" value="<?= $testimonial["testimonial_id"] ?>">
													<div class="form-group row">
														<label for="user_id" class="col-sm-2 col-form-label">User</label>
														<div class="col-sm-10">
															<select name="user_id" id="user_id" class="form-control <?= form_error('user_id') ? 'is-invalid' : ''; ?>">
																<option value="" disabled selected>--Pilih User--</option>
																<?php foreach ($users as $user) : ?>
																	<?php if ($user["user_id"] == $testimonial["user_id"]) : ?>
																		<option value="<?= $user["user_id"]; ?>" selected><?= $user["name"] ?> | <?= $user["email"] ?></option>
																	<?php else : ?>
																		<option value="<?= $user["user_id"]; ?>"><?= $user["name"] ?> | <?= $user["email"] ?></option>
																	<?php endif; ?>
																<?php endforeach; ?>
															</select>
															<?= form_error('user_id', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
														</div>
													</div>
													<div class="form-group row">
														<label for="name" class="col-sm-2 col-form-label">Testimoni</label>
														<div class="col-sm-10">
															<textarea name="content" id="content" rows="" class="form-control <?= form_error('content') ? 'is-invalid' : ''; ?>"><?= $testimonial["content"] ?></textarea>
															<?= form_error('content', '<div class="invalid-feedback font-weight-bold pl-1">', '</div>') ?>
														</div>
													</div>
													<div class="form-action row">
														<div class="col-sm-2"></div>
														<div class="col-sm-10">
															<button type="submit" class="btn btn-primary">Update Testimoni</button>
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
