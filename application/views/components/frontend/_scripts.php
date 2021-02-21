<script src="<?= base_url("assets/frontend/libraries/retina/retina.js") ?>"></script>
<script src="<?= base_url("assets/frontend/libraries/jquery/jquery-3.4.1.min.js") ?>"></script>
<script src="<?= base_url("assets/frontend/libraries/bootstrap/js/bootstrap.js") ?>"></script>
<script src="<?= base_url("assets/frontend/libraries/xzoom/dist/xzoom.min.js") ?>"></script>
<script>
	$(document).ready(function() {
		$('.xzoom, .xzoom-gallery').xzoom({
			zoomWidth: 500,
			title: false,
			tint: '#333',
			Xoffset: 15
		});
	});
</script>
