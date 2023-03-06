<div class="modal" tabindex="-1" id="modal-produksi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="form-produksi">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="" class="form-label">Kondisi</label>
                        <div class="form-check">
                            <input type="radio" value="berjalan" name="kondisi" id="" class="form-check-input" required>
                            <label for="" class="form-check-label">Berjalan</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" value="kemarin" name="kondisi" id="" class="form-check-input">
                            <label for="" class="form-check-label">Kemarin</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis Kebun</label>
                        <input type="text" class="form-control" name="jenis_kebun" id="" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Triwulan</label>
                        <input type="text" class="form-control" name="triwulan" id="" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tahun</label>
                        <input type="number" min="1900" step="1" class="form-control" name="tahun" id="" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Produksi / Ton TBS</label>
                        <input type="number" min="0" step="0.01" class="form-control" name="jumlah_produksi" id="" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" form="form-produksi">Submit</button>
            </div>
        </div>
    </div>
</div>
