{{-- Informasi Umum Pabrik --}}
<div id="informasi-umum" class="accordion-collapse collapse show" aria-labelledby="header-informasi-umum"
    data-bs-parent="#data-perkebunan">
    <div class="accordion-body">
        <div class="row">
            <div class="col-12 col-lg-6 mb-3">
                <label class="form-label">Nama Pabrik</label>
                <input type="text" name="nama" class="form-control" value="{{ $pabrik->nama }}" required>
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 col-lg-6 mb-3">
                <label class="form-label">NPWP</label>
                <input type="text" name="npwp" class="form-control" value="{{ $pabrik->npwp }}" minlength="10"
                    required>
                @error('npwp')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 col-lg-6 mb-3">
                <label class="form-label">Pimpinan Perusahaan</label>
                <input type="text" name="pimpinan" class="form-control" value="{{ $pabrik->pimpinan }}">
                @error('pimpinan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 col-lg-6 mb-3">
                <label class="form-label">Jabatan Pimpinan</label>
                <input type="text" name="jabatan_pimpinan" class="form-control"
                    value="{{ $pabrik->jabatan_pimpinan }}">
                @error('jabatan_pimpinan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 mb-3">
                <label class="form-label">Alamat Kantor Pusat</label>
                <textarea type="text" name="alamat_kantor" class="form-control" row=5 required>{{ $pabrik->alamat_kantor }}</textarea>
                @error('alamat_kantor')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 col-lg-4 mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $pabrik->email }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 col-lg-4 mb-3">
                <label class="form-label">No. Telp</label>
                <input type="tel" name="telp" class="form-control" value="{{ $pabrik->telp }}">
                @error('telp')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 col-lg-4 mb-3">
                <label class="form-label">Luas Lokasi Pabrik (Ha)</label>
                <input type="number" name="luas_lokasi_pabrik" class="form-control" step="0.01"
                    value="{{ $pabrik->luas_lokasi_pabrik }}">
                @error('luas_lokasi_pabrik')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 col-lg-6 mb-3">
                <label class="form-label">Tahun Mulai Beroperasi</label>
                <input type="number" min="1900" max="{{ date('Y') }}" name="tahun_operasi"
                    class="form-control" value="{{ $pabrik->tahun_operasi }}">
                @error('tahun_operasi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 col-lg-6 mb-3">
                <label class="form-label">Nama Grup Perusahaan</label>
                <input type="text" name="nama_grup" class="form-control" value="{{ $pabrik->nama_grup }}">
                @error('nama_grup')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 mb-3">
                <label class="form-label">Status Perusahaan</label>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_perusahaan" id="go-public"
                            value="go public">
                        <label class="form-check-label" for="go-public">Go Public</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_perusahaan" id="tidak-go-public"
                            value="tidak go public">
                        <label class="form-check-label" for="tidak-go-public">Tidak Go
                            Public</label>
                    </div>
                </div>
                @error('manager_mill')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 mb-3">
                <label class="form-label">Bursa Efek</label>
                <input type="number" name="bursa_efek" class="form-control" value="{{ $pabrik->bursa_efek }}">
                @error('bursa_efek')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 mb-3">
                <label class="form-label">Jumlah Tenaga Kerja</label>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <label class="form-label">WNI</label>
                        <input type="number" name="tenaga_kerja_wni" min="0" id="wni"
                            value="{{ $pabrik->tenaga_kerja_wni }}" class="form-control">
                        @error('tenaga_kerja_wni')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6">
                        <label class="form-label">Asing</label>
                        <input type="number" name="tenaga_kerja_asing" min="0" id="wna"
                            value="{{ $pabrik->tenaga_kerja_asing }}" class="form-control">
                        @error('tenaga_kerja_asing')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label class="form-label">Kapasitas Produksi (Ton TBS/Jam)</label>
                <input type="number" name="kapasitas_produksi" class="form-control"
                    value="{{ $pabrik->kapasitas_produksi }}">
                @error('kapasitas_produksi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>