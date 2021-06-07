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
						<h1>Ubah Status Pembayaran</h1>
					</div>

					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-8 mx-auto">
												<form action="<?= base_url("payment/actionChangePaymentStatus/" . $payment["id_payment_confirmation"]) ?>" method="post">
													<input type="hidden" name="id_payment_confirmation" value="<?= $payment["id_payment_confirmation"] ?>">
													<div class="form-group row">
														<label for="status" class="col-sm-2 col-form-label">Status Pembayaran</label>
														<div class="col-sm-10">
															<select name="status" id="status" class="form-control">
																<?php if ($payment["status"] == 0) : ?>
																	<option value="0" selected>Menunggu Konfirmasi</option>
																	<option value="1">Pembayaran Diterima</option>
																	<option value="2">Pembayaran Ditolak</option>
																<?php elseif ($payment["status"] == 1) : ?>
																	<option value="0">Menunggu Konfirmasi</option>
																	<option value="1" selected>Pembayaran Diterima</option>
																	<option value="2">Pembayaran Ditolak</option>
																<?php else : ?>
																	<option value="0">Menunggu Konfirmasi</option>
																	<option value="1">Pembayaran Diterima</option>
																	<option value="2" selected>Pembayaran Ditolak</option>
																<?php endif; ?>
															</select>
														</div>
													</div>
													<div class="form-action row">
														<div class="col-sm-2"></div>
														<div class="col-sm-10">
															<button type="submit" class="btn btn-primary">Update Status Pembayaran</button>
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
