<div class="modal" tabindex="-1" id="modal-penanaman">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="form-penanaman">
                    @csrf
                    @method('POST')
                    <div class="mb-3" id="kategori-penanaman">
                        <label for="" class="form-label">Kategori</label>
                        <div class="form-check">
                            <input type="radio" name="kategori" value="penanaman" id="" class="form-check-input" required>
                            <label for="" class="form-check-label">Penanaman</label> 
                        </div>
                        <div class="form-check">
                            <input type="radio" name="kategori" value="perolehan" id="" class="form-check-input">
                            <label for="" class="form-check-label">Perolehan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis Kebun</label>
                        <div class="form-check">
                            <input type="radio" name="jenis_kebun" value="inti" id="" class="form-check-input" required>
                            <label for="" class="form-check-label">Inti</label>
                        </div><div class="form-check">
                            <input type="radio" name="jenis_kebun" value="plasma" id="" class="form-check-input">
                            <label for="" class="form-check-label">Plasma</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tahun</label>
                        <input type="text" name="tahun" class="form-control" placeholder="Tahun" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Luas (Ha)</label>
                        <input type="number" name="luas" min="0" step="0.01" class="form-control"
                            placeholder="Luas" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" form="form-penanaman">Submit</button>
            </div>
        </div>
    </div>
</div>
