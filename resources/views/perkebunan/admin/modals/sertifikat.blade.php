<div class="modal" tabindex="-1" id="modal-sertifikat">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="form-sertifikat">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis Sertifikat</label>
                        <input type="text" class="form-control" name="jenis" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Sertifikat</label>
                        <input type="text" class="form-control" name="nama_sertifikat" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nomor Surat</label>
                        <input type="text" class="form-control" name="nomor_surat" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Diterbitkan</label>
                        <input type="date" class="form-control" name="tanggal_terbit" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Penjabat Penerbit</label>
                        <input type="text" class="form-control" name="penjabat" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kategori</label>
                        <input type="text" class="form-control" name="kategori" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" form="form-sertifikat">Submit</button>
            </div>
        </div>
    </div>
</div>
