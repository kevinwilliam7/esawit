<div class="modal" tabindex="-1" id="modal-koperasi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="form-koperasi">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_koperasi" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Anggota</label>
                        <input type="number" class="form-control" name="jumlah_anggota" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Luas (Ha)</label>
                        <input type="text" class="form-control" name="luas" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Bank</label>
                        <input type="text" class="form-control" name="bank" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Akad</label>
                        <input type="date" class="form-control" name="akad" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nilai Kredit</label>
                        <input type="number" min="0" step="1" class="form-control" name="nilai_kredit" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Perkiraan Lunas</label>
                        <input type="number" min="1900" step="1" class="form-control" name="tahun_lunas" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Standar Biaya</label>
                        <input type="number" min="1" step="1" class="form-control" name="standar_biaya" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" form="form-koperasi">Submit</button>
            </div>
        </div>
    </div>
</div>
