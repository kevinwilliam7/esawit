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
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Anggota</label>
                        <input type="number" class="form-control" name="jumlah_anggota">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Luas (Ha)</label>
                        <input type="text" class="form-control" name="luas">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Bank</label>
                        <input type="text" class="form-control" name="bank">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Akad</label>
                        <input type="date" class="form-control" name="akad">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nilai Kredit</label>
                        <input type="number" min="0" step="1" class="form-control" name="nilai_kredit">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Perkiraan Lunas</label>
                        <input type="number" min="1900" step="1" class="form-control" name="tahun_lunas">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Standar Biaya</label>
                        <input type="number" min="1" step="1" class="form-control" name="standar_biaya">
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
