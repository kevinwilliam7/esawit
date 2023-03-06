<div class="modal" tabindex="-1" id="modal-pengolahan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="form-pengolahan">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" name="nama_pabrik" class="form-control" placeholder="Nama Pabrik" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Distribusi</label>
                        <input type="number" name="jumlah_distribusi" min="0" step="0.01" class="form-control" required
                            placeholder="Jumlah Distribusi">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" form="form-pengolahan">Submit</button>
            </div>
        </div>
    </div>
</div>
