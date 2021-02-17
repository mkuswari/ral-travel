<script>
	const flashData = $('.flash-data').data('flashdata');
	if (flashData) {
		Swal.fire({
			title: 'Berhasil',
			text: 'Data User berhasil ' + flashData,
			icon: 'success'
		});
	}

	// tombol hapus
	$('.btn-delete').on('click', function(e) {

		e.preventDefault();
		const href = $(this).attr('href');

		Swal.fire({
			title: 'Kamu yakin?',
			text: "Data user akan dihapus dari sistem!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ya, hapus'
		}).then((result) => {
			if (result.isConfirmed) {
				document.location.href = href;
			}
		})

	})
</script>
