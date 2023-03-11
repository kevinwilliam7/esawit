<div class="modal" tabindex="-1" id="modal-kontribusi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="form-kontribusi" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="jenis_izin" class="form-label">Jenis File atau Nama Izin</label>
                        <input type="text" name="jenis_izin" id="jenis_izin" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">File (pdf)</label>
                        <input type="file" name="file" id="file" class="form-control" accept="application/pdf" required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" form="form-kontribusi">Simpan</button>
            </div>
        </div>
    </div>
</div>
