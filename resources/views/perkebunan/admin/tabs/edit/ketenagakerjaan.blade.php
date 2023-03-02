<div class="row">
    <div class="col-12 col-lg-4">
        <div class="h6">Tenaga Kerja Kebun</div>
        <div class="mb-3">
            <label class="form-label">Pekerja Bulanan</label>
            <input type="number" name="bulanan_kebun" class="form-control"
                value="{{ $perkebunan->bulanan_kebun }}">
            @error('bulanan_kebun')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Pekerja Tetap</label>
            <input type="number" name="tetap_kebun" class="form-control"
                value="{{ $perkebunan->tetap_kebun }}">
            @error('tetap_kebun')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Pekerja Harian Lepas</label>
            <input type="number" name="lepas_kebun" class="form-control"
                value="{{ $perkebunan->lepas_kebun }}">
            @error('lepas_kebun')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Pekerja Musiman</label>
            <input type="number" name="musiman_kebun" class="form-control"
                value="{{ $perkebunan->musiman_kebun }}">
            @error('musiman_kebun')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-12 col-lg-4">
        <div class="h6">Tenaga Kerja Pabrik</div>
        <div class="mb-3">
            <label class="form-label">Pekerja Bulanan</label>
            <input type="number" name="bulanan_pabrik" class="form-control"
                value="{{ $perkebunan->bulanan_pabrik }}">
            @error('bulanan_pabrik')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Pekerja Tetap</label>
            <input type="number" name="tetap_pabrik" class="form-control"
                value="{{ $perkebunan->tetap_pabrik }}">
            @error('tetap_pabrik')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Pekerja Harian Lepas</label>
            <input type="number" name="lepas_pabrik" class="form-control"
                value="{{ $perkebunan->lepas_pabrik }}">
            @error('lepas_pabrik')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Pekerja Musiman</label>
            <input type="number" name="musiman_pabrik" class="form-control"
                value="{{ $perkebunan->musiman_pabrik }}">
            @error('musiman_pabrik')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-12 col-lg-4">
        <div class="h6">Tenaga Kerja Asing</div>
        <div class="mb-3">
            <label class="form-label">Jumlah Tenaga Kerja Asing</label>
            <input type="number" name="tka" class="form-control"
                value="{{ $perkebunan->tka }}">
            @error('tka')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Jabatan TKA</label>
            <input type="text" name="jabatan_tka" class="form-control"
                value="{{ $perkebunan->jabatan_tka }}">
            @error('jabatan_tka')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>