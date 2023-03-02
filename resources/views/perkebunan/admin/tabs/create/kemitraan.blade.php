<div class="row">
    <div class="col-12 col-lg-6 mb-3">
        <label class="form-label">Target Petani Plasma (KK)</label>
        <input type="number" name="kk_target_plasma" class="form-control" value="{{ old('kk_target_plasma') }}">
        @error('kk_target_plasma')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12 col-lg-6 mb-3">
        <label class="form-label">Target Petani Plasma (Ha)</label>
        <input type="number" step="0.01" name="ha_target_plasma" class="form-control"
            value="{{ old('ha_target_plasma') }}">
        @error('ha_target_plasma')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12 col-lg-6 mb-3">
        <label class="form-label">Realisasi Petani Plasma (KK)</label>
        <input type="number" name="kk_realisasi_plasma" class="form-control" value="{{ old('kk_realisasi_plasma') }}">
        @error('kk_realisasi_plasma')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12 col-lg-6 mb-3">
        <label class="form-label">Realisasi Petani Plasma (Ha)</label>
        <input type="number" step="0.01" name="ha_realisasi_plasma" class="form-control"
            value="{{ old('ha_realisasi_plasma') }}">
        @error('ha_realisasi_plasma')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12">
        <label class="form-label">Pola Kemitraan</label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="pola_kemitraan" id="kemitraan-mandiri"
                value="kemitraan mandiri" {{ old('pola_kemitraan') === 'kemitraan mandiri' ? 'checked' : '' }}>
            <label class="form-check-label" for="kemitraan-mandiri">Kemitraan
                Mandiri</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pola_kemitraan" id="kemitraan-satu-manajemen"
                value="kemitraan satu manajemen"
                {{ old('pola_kemitraan') === 'kemitraan satu manajemen' ? 'checked' : '' }}>
            <label class="form-check-label" for="kemitraan-satu-manajemen">Kemitraan
                Satu Manajemen</label>
        </div>
        @error('pola_kemitraan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
