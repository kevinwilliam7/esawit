<div class="row">
    <div class="col-12 col-lg-4 mb-3">
        <label class="form-label">Nomor Akta</label>
        <input type="text" name="nomor_akta_perubahan" class="form-control"
            value="{{ $perkebunan->nomor_akta_perubahan }}">
        @error('nomor_akta_perubahan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-4 mb-3">
        <label class="form-label">Tanggal Akta</label>
        <input type="date" name="tanggal_akta_perubahan" class="form-control"
            value="{{ $perkebunan->tanggal_akta_perubahan }}">
        @error('tanggal_akta_perubahan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-4 mb-3">
        <label class="form-label">Notaris</label>
        <input type="text" name="notaris_akta_perubahan" class="form-control"
            value="{{ $perkebunan->notaris_akta_perubahan }}">
        @error('notaris_akta_perubahan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-6 mb-3">
        <label class="form-label">Komisaris</label>
        <input type="text" name="komisaris_akta_perubahan" class="form-control"
            value="{{ $perkebunan->komisaris_akta_perubahan }}">
        @error('komisaris_akta_perubahan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-6 mb-3">
        <label class="form-label">Direktur</label>
        <input type="text" name="direktur_akta_perubahan" class="form-control"
            value="{{ $perkebunan->direktur_akta_perubahan }}">
        @error('direktur_akta_perubahan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>