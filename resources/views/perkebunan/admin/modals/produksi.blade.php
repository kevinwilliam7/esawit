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
                        <input type="radio" name="kondisi" id="" class="form-check"> Berjalan
                        <input type="radio" name="kondisi" id="" class="form-check"> Radio
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis Kebun</label>
                        <input type="text" name="jenis_kebun" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Triwulan</label>
                        <input type="text" name="triwulan" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tahun</label>
                        <input type="number" min="1900" step="1" name="tahun" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Produksi / Ton TBS</label>
                        <input type="number" min="0" step="0.01" name="jumlah_produksi" id="">
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
