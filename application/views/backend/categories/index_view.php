<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/backend/_head"); ?>
<!-- end of head -->

<!-- datatables -->
<link href="<?= base_url("assets/backend/plugins/datatables/dataTables.bootstrap4.min.css") ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url("assets/backend/plugins/datatables/buttons.bootstrap4.min.css") ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url("assets/backend/plugins/datatables/responsive.bootstrap4.min.css") ?>" rel="stylesheet" type="text/css" />
<!-- end of datatabes -->

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
								<h4 class="page-title">Kelola Kategori</h4>
							</div>
							<div class="col-auto">
								<a href="javascript:void(0)" class="btn btn-primary showModal" onclick="addCategory()">Tambah Kategori</a>
							</div>
						</div>
						<!-- end row -->
					</div>
					<!-- end page-title -->


					<div class="row">
						<div class="col-12">

							<?= $this->session->flashdata('message') ?>

							<div class="card">
								<div class="card-body">
									<table id="tableCategories" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing:0; width:100%;">
										<thead>
											<tr>
												<th width="10">No.</th>
												<th width="50">Nama</th>
												<th width="225">Slug</th>
												<th width="225">Tanggal Dibuat</th>
												<th width="100">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<!-- generate from ajax -->
										</tbody>
									</table>
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
	<!-- datatables -->
	<script src="<?= base_url("assets/backend/plugins/datatables/jquery.dataTables.min.js") ?>"></script>
	<script src="<?= base_url("assets/backend/plugins/datatables/dataTables.bootstrap4.min.js") ?>"></script>
	<script src="<?= base_url("assets/backend/plugins/datatables/dataTables.responsive.min.js") ?>"></script>
	<script src="<?= base_url("assets/backend/plugins/datatables/responsive.bootstrap4.min.js") ?>"></script>
	<script src="<?= base_url("assets/backend/assets/pages/datatables.init.js") ?>"></script>
	<!-- end of datatables -->
	<!-- load modal component -->
	<?php $this->load->view("backend/categories/_modal_component"); ?>
	<!-- end of load modal component -->
	<!-- load ajax reques -->
	<?php $this->load->view("backend/categories/_ajax_request"); ?>
	<!-- end of load ajax reques -->
</body>

</html>
