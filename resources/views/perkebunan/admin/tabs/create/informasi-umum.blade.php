<div class="row">
    <div class="col-12 col-lg-6 mb-3">
        <label class="form-label">Nama Perusahaan Perkebunan</label>
        <input type="text" name="nama" class="form-control"
            value="{{ old('nama') }}" required>
        @error('nama')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-6 mb-3">
        <label class="form-label">NPWP</label>
        <input type="text" name="npwp" class="form-control"
            value="{{ old('npwp') }}" minlength="10" required>
        @error('npwp')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 mb-3">
        <label class="form-label">Alamat Perusahaan</label>
        <textarea type="text" name="alamat" class="form-control" row=5 required>{{ old('alamat') }}</textarea>
        @error('alamat')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-6 mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control"
            value="{{ old('email') }}">
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-6 mb-3">
        <label class="form-label">Direktur Utama</label>
        <input type="text" name="direktur" class="form-control"
            value="{{ old('direktur') }}">
        @error('direktur')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-4 mb-3">
        <label class="form-label">General Manager Oprasional</label>
        <input type="text" name="gm" class="form-control"
            value="{{ old('gm') }}">
        @error('gm')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-4 mb-3">
        <label class="form-label">Kadiv Legal</label>
        <input type="text" name="kadiv_legal" class="form-control"
            value="{{ old('kadiv_legal') }}">
        @error('kadiv_legal')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 col-lg-4">
        <label class="form-label">Manager Mill Project</label>
        <input type="text" name="manager_mill" class="form-control"
            value="{{ old('manager_mill') }}">
        @error('manager_mill')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>