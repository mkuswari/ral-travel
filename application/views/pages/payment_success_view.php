<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("components/frontend/_head"); ?>
<!-- end of head -->

<body>
	<!-- navbar -->
	<?php $this->load->view("components/auth/_navbar"); ?>
	<!-- end nav -->
	<main>
		<div class="section-success d-flex align-items-center">
			<div class="col text-center">
				<img src="<?= base_url("assets/frontend/images/ic_mail.png") ?>" alt="" />
				<h1>Yess! Pembayaran Berhasil</h1>
				<p>
					Kami akan menghubungi anda untuk lebih lanjut <br />
					Mohon untuk menunggu
				</p>
				<a href="<?= base_url("home") ?>" class="btn btn-home-page mt-3 px-5">
					Home Page
				</a>
			</div>
		</div>
	</main>
	<?php $this->load->view("components/frontend/_scripts"); ?>
</body>

</html>
