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
						<h1>Kelola Artikel</h1>
						<a href="<?= base_url("kelola-blog/tambah") ?>" class="btn btn-primary">Tambah Artikel</a>
					</div>

					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-striped" id="table-1">
												<thead>
													<tr>
														<th width="10">No.</th>
														<th width="300">Thumbnail</th>
														<th width="350">Judul</th>
														<th>Kategori</th>
														<th>Penulis</th>
														<th>Tanggal</th>
														<th width="120">Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php $no = 1; ?>
													<?php foreach ($blogs as $blog) : ?>
														<tr>
															<td><?= $no++; ?></td>
															<td>
																<img src="<?= base_url("assets/uploads/blogs/" . $blog["thumbnail"]) ?>" width="100%" class="rounded" style="height: 170px; object-fit: cover; object-position: center;">
															</td>
															<td><?= $blog["title"]; ?></td>
															<td><?= $blog["category_name"] ?></td>
															<td><?= $blog["author"] ?></td>
															<td><?= $blog["created_at"] ?></td>
															<td>
																<a href="<?= base_url("blogs/" . $blog["slug"]) ?>" class="btn btn-info btn-icon"><i class="fas fa-eye"></i></a>
																<a href="<?= base_url("kelola-blog/update/" . $blog["blog_id"]) ?>" class="btn btn-warning btn-icon"><i class="fas fa-pencil-alt"></i></a>
																<a href="<?= base_url("kelola-blog/hapus/" . $blog["blog_id"]) ?>" class="btn btn-danger btn-icon btn-delete"><i class="fas fa-trash"></i></a>
															</td>
														</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
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
</body>

</html>
