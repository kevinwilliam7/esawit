<div class="modal" tabindex="-1" id="modal-kontribusi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="form-kontribusi">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="tahun-kontribusi" class="form-label">Pelaksanaan</label>
                        <div>
                            <input type="radio" name="pelaksanaan" value="realisasi" class="form-check-inline me-1"> <span class="text-black">Sudah Realisasi</span>
                        </div>
                        <div>
                            <input type="radio" name="pelaksanaan" value="rencana" class="form-check-inline me-1"> <span class="text-black">Masih Rencana</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tahun-kontribusi" class="form-label">Tahun Kegiatan</label>
                        <input type="number" name="tahun" id="tahun-kontribusi" min="1900"
                            max="{{ date('Y') }}" step="1" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jenis-kegiatan" class="form-label">Jenis Kegiatan</label>
                        <input type="text" name="jenis_kegiatan" id="jenis-kegiatan" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal-kegiatan" class="form-label">Tanggal Kegiatan</label>
                        <input type="date" name="tanggal" id="tanggal-kegiatan" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nilai-setara" class="form-label">Nilai Setara (Rp)</label>
                        <input type="number" name="nilai_setara" id="nilai-setara" min="0" step="1"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kabupaten</label>
                        <select id="kabupaten-kontribusi" class="form-select" required>
                            <option value="">Pilih Kabupaten</option>
                            @foreach ($kabupatens as $kabupaten)
                                <option value="{{ $kabupaten->id }}">{{ $kabupaten->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kecamatan</label>
                        <select id="kecamatan-kontribusi" class="form-select" required>
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Desa</label>
                        <select name="desa_id" id="desa-kontribusi" class="form-select" required>
                            <option value="">Pilih Desa</option>
                        </select>
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
