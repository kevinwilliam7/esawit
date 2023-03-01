<div class="modal" id="modal-lokasi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="form-lokasi">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="" class="form-label">Kabupaten</label>
                        <select id="kabupaten" class="form-select" required>
                            <option value="">Pilih Kabupaten</option>
							@foreach ($kabupatens as $kabupaten)
								<option value="{{ $kabupaten->id }}">{{ $kabupaten->name }}</option>
							@endforeach
                        </select>
                    </div>
					<div class="mb-3">
                        <label for="" class="form-label">Kecamatan</label>
                        <select id="kecamatan" class="form-select" required>
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>
					<div class="mb-3">
                        <label for="" class="form-label">Desa</label>
                        <select name="desa_id" id="desa" class="form-select" required>
                            <option value="">Pilih Desa</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" form="form-lokasi">Simpan</button>
            </div>
        </div>
    </div>
</div>
