<div class="modal" tabindex="-1" id="modal-produksi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="form-produksi">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="tahun-produksi" class="form-label">Tahun Produksi</label>
                        <input type="number" name="tahun_produksi" id="tahun-produksi" min="1900" max="{{ date('Y') }}" step="1"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="hasil-pabrik" class="form-label">Nama Hasil Pabrik</label>
                        <input type="text" name="hasil_pabrik" id="hasil-pabrik" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah-produksi" class="form-label">Jumlah Produksi (Ton)</label>
                        <input type="number" name="jumlah_produksi" id="jumlah-produksi" min="0" step="0.01"
                            class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" form="form-produksi">Simpan</button>
            </div>
        </div>
    </div>
</div>
