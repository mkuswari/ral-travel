<div class="modal fade" id="modal_form" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="#" id="form">
				<input type="hidden" value="" name="id">
				<div class="modal-header">
					<h5 class="modal-title" id="modalLabel">Tambah Paket Grooming</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Nama Paket</label>
						<input type="text" class="form-control" id="name" name="name">
					</div>
					<div class="form-group">
						<label for="name">Slug</label>
						<input type="text" class="form-control" id="slug" name="slug" placeholder="Slug akan digenerate otomatis" disabled>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-primary" id="btnSave" onclick="save()">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
