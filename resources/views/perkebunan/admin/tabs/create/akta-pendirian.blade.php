<div class="row">
    <div class="col-12 col-lg-4 mb-3">
        <label class="form-label">Nomor Akta</label>
        <input type="text" name="nomor_akta_pendirian" class="form-control"
            value="{{ old('nomor_akta_pendirian') }}">
        @error('nomor_akta_pendirian')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-4 mb-3">
        <label class="form-label">Tanggal Akta</label>
        <input type="date" name="tanggal_akta_pendirian" class="form-control"
            value="{{ old('tanggal_akta_pendirian') }}">
        @error('tanggal_akta_pendirian')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-4 mb-3">
        <label class="form-label">Notaris</label>
        <input type="text" name="notaris_akta_pendirian" class="form-control"
            value="{{ old('notaris_akta_pendirian') }}">
        @error('notaris_akta_pendirian')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-6 mb-3">
        <label class="form-label">Komisaris</label>
        <input type="text" name="komisaris_akta_pendirian" class="form-control"
            value="{{ old('komisaris_akta_pendirian') }}">
        @error('komisaris_akta_pendirian')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-6 mb-3">
        <label class="form-label">Direktur</label>
        <input type="text" name="direktur_akta_pendirian" class="form-control"
            value="{{ old('direktur_akta_pendirian') }}">
        @error('direktur_akta_pendirian')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>