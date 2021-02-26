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
					<div class="section-header">
						<h1>Dashboard</h1>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-primary">
									<i class="fas fa-users"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Total User</h4>
									</div>
									<div class="card-body">
										<?= $total_user ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-danger">
									<i class="fas fa-umbrella-beach"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Total Wisata</h4>
									</div>
									<div class="card-body">
										<?= $total_destination ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-warning">
									<i class="far fa-credit-card"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Total Booking</h4>
									</div>
									<div class="card-body">
										<?= $total_booking ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-success">
									<i class="fas fa-file"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Total Artikel</h4>
									</div>
									<div class="card-body">
										<?= $total_blog ?>
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
