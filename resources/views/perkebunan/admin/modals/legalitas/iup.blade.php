<div class="modal" tabindex="-1" id="modal-iup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="form-iup">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis IUP</label>
                        <input type="text" name="jenis_iup" class="form-control" placeholder="Jenis IUP" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" placeholder="Kategori" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nomor Surat</label>
                        <input type="text" name="nomor_surat" class="form-control" placeholder="Nomor Surat" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Terbit</label>
                        <input type="date" name="tanggal_terbit" class="form-control" placeholder="Tanggal Terbit" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Luas (Ha)</label>
                        <input type="number" name="luas" min="0" step="0.01" class="form-control" placeholder="Luas" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" placeholder="Lokasi" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" form="form-iup">Submit</button>
            </div>
        </div>
    </div>
</div>
