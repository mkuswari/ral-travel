<script>
	let saveMethod;
	let table;
	let baseUrl = '<?= base_url() ?>';

	$(document).ready(function() {
		//datatables
		table = $('#tableCategories').DataTable({

			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.
			"order": [], //Initial no order.

			// Load data for the table's content from an Ajax source
			"ajax": {
				"url": "<?= base_url('category/ajaxlist') ?>",
				"type": "POST"
			},

			//Set column definition initialisation properties.
			"columnDefs": [{
					"targets": [-1], //last column
					"orderable": false, //set not orderable
				},
				{
					"targets": [-2], //2 last column (photo)
					"orderable": false, //set not orderable
				},
			],

		});

		//set input/textarea/select event when change value, remove class error and remove text help block 
		$("input").change(function() {
			$(this).removeClass('has-error');
			$(this).next().empty();
		});

	});

	function addCategory() {
		saveMethod = 'add';
		$('#form')[0].reset(); // reset form on modals
		$('.form-control').removeClass('is-invalid'); // clear error class
		$('.invalid-feedback').empty(); // clear error string
		$('#modal_form').modal('show'); // show bootstrap modal
		$('.modal-title').text('Tambah Paket Grooming'); // Set Title to Bootstrap modal title

	}

	function editCategory(id) {
		saveMethod = 'update';
		$('#form')[0].reset(); // reset form on modals
		$('.form-control').removeClass('is-invalid'); // clear error class
		$('.invalid-feedback').empty(); // clear error string

		// load data from ajax
		$.ajax({
			url: "<?= base_url('category/ajaxedit') ?>/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data) {
				$('[name="id"]').val(data.id);
				$('[name="name"]').val(data.name);
				$('[name="slug"]').val(data.slug);
				$('#modal_form').modal('show'); // show bootstrap modal
				$('.modal-title').text('Ubah Paket Grooming'); // Set Title to Bootstrap modal title

			},
			error: function(jqXHR, textStatus, errorThrown) {
				swal({
					title: 'Error',
					text: 'Gagal mendapatkan data dari AJAX',
					icon: 'error'
				});
			}
		});
	}

	function reloadTable() {
		table.ajax.reload(null, false); //reload datatable ajax 
	}

	function save() {
		$('#btnSave').text('Memproses...'); //change button text
		$('#btnSave').attr('disabled', true); //set button disable 
		let url;

		if (saveMethod == 'add') {
			url = "<?= base_url('category/ajaxadd') ?>";
		} else {
			url = "<?= base_url('category/ajaxupdate') ?>";
		}

		// ajax adding data to database

		var formData = new FormData($('#form')[0]);
		$.ajax({
			url: url,
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,
			dataType: "JSON",
			success: function(data) {

				if (data.status) //if success close modal and reload ajax table
				{

					if (saveMethod == 'add') {
						$('#modal_form').modal('hide');
						swal({
							title: 'Berhasil',
							text: 'Kategori berhasil ditambahkan',
							icon: 'success'
						});
					} else {
						$('#modal_form').modal('hide');
						swal({
							title: 'Berhasil',
							text: 'Kategori berhasil diubah',
							icon: 'success'
						});
					}

					reloadTable();
				} else {
					// for (let i = 0; i < data.inputerror.length; i++) {
					// 	$('[form-control="' + data.inputerror[i] + '"]').parent().addClass('is-invalid'); //select parent twice to select div form-group class and add has-error class
					// 	$('[form-control="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
					// }
					swal({
						title: 'Gagal',
						text: 'Lengkapi semua form',
						icon: 'error'
					});
				}
				$('#btnSave').text('Simpan'); //change button text
				$('#btnSave').attr('disabled', false); //set button enable 


			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Gagal menambahkan data');
				// swal({
				// 	title: 'Gagal',
				// 	text: 'Kategori gagal ditambahkan',
				// 	icon: 'error'
				// });
				$('#btnSave').text('Simpan'); //change button text
				$('#btnSave').attr('disabled', false); //set button enable 

			}
		});
	}

	function deleteCategory(id) {
		swal({
			title: "Anda yakin?",
			text: "Data Kategori akan dihapus!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		}).then((result) => {
			if (result) {
				$.ajax({
					url: "<?= base_url('category/ajaxdelete') ?>/" + id,
					type: "POST",
					dataType: "JSON",
					success: function(data) {
						//if success reload ajax table
						$('#modal_form').modal('hide');
						reloadTable();
					},
					error: function(jqXHR, textStatus, errorThrown) {
						swal(
							'Deleted!',
							'Your file has been deleted.',
							'error'
						)
					}
				});
				swal(
					'Deleted!',
					'Your file has been deleted.',
					'success'
				)
			}
		})
	}
</script>
