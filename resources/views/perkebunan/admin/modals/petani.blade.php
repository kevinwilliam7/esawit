<div class="modal" tabindex="-1" id="modal-petani">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="form-petani">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="" class="form-label">Tahap</label>
                        <input type="text" class="form-control" name="tahap" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Koperasi</label>
                        <input type="text" class="form-control" name="koperasi" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah (KK)</label>
                        <input type="text" class="form-control" name="jumlah_kk" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Luas</label>
                        <input type="number" min="0" step="0.01" class="form-control" name="luas" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" form="form-petani">Submit</button>
            </div>
        </div>
    </div>
</div>
