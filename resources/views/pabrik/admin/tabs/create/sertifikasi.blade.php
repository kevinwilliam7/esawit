<div class="row">
    <div class="col-12 col-lg-6 mb-3">
        <label for="nomor-sertifikat" class="form-label">Sertifikasi Nasional / Internasional</label>
        <input type="text" id="nomor-sertifikat" value="{{ old('nomor_dokumen_sertifikat') }}" class="form-control">
    </div>
    <div class="col-12 col-lg-6">
        <label for="sertifikat" class="form-label">Berkas Sertifikat (pdf)</label>
        <input type="file" name="dokumen_sertifikat" id="sertifikat" class="form-control" accept="application/pdf">
    </div>
</div>