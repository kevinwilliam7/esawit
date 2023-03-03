<div class="modal" tabindex="-1" id="modal-iblh">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="form-iblh">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis Dokumen</label>
                        <input type="text" name="jenis_dokumen" id="" class="form-control"></div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nomor Surat</label>
                        <input type="text" name="nomor_surat" class="form-control" placeholder="Nomor Surat">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal_terbit" class="form-control" placeholder="Tanggal Terbit">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Luas / Kapasitas (Ha)</label>
                        <input type="number" name="luas" min="0" step="0.01" class="form-control"
                            placeholder="Luas">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Penjabat Penerbit</label>
                        <input type="text" name="penjabat_penerbit" class="form-control"
                            placeholder="Penjabat Penerbit">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" form="form-iblh">Submit</button>
            </div>
        </div>
    </div>
</div>
