@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title py-0 h5">Tambah Data Perusahaan Perusahaan Perkebunan</div>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route('perkebunan.store') }}">
                    @csrf

                    <div class="accordion" id="data-perkebunan">
                        {{-- Informasi Umum Perusahaan Perkebunan --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header m-0" id="header-informasi-umum">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#informasi-umum" aria-controls="informasi-umum">
                                    Informasi Umum Perusahaan Perkebunan
                                </button>
                            </h2>
                            <div id="informasi-umum" class="accordion-collapse collapse show"
                                aria-labelledby="header-informasi-umum" data-bs-parent="#data-perkebunan">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Nama Perusahaan Perkebunan</label>
                                            <input type="text" name="nama_perkebunan" class="form-control"
                                                value="{{ old('nama_perkebunan') }}" required>
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">NPWP</label>
                                            <input type="text" name="npwp" class="form-control"
                                                value="{{ old('npwp') }}" minlength="10" required>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Alamat Perusahaan</label>
                                            <textarea type="text" name="alamat_perusahaan" class="form-control" row=5 required>
                                                {{ old('alamat_perusahaan') }}
                                            </textarea>
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email') }}">
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Direktur Utama</label>
                                            <input type="text" name="direktur" class="form-control"
                                                value="{{ old('direktur') }}">
                                        </div>

                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">General Manager Oprasional</label>
                                            <input type="text" name="gm" class="form-control"
                                                value="{{ old('gm') }}">
                                        </div>

                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">Kadiv Legal</label>
                                            <input type="text" name="kadiv_legal" class="form-control"
                                                value="{{ old('kadiv_legal') }}">
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Manager Mill Project</label>
                                            <input type="text" name="manager_mill" class="form-control"
                                                value="{{ old('manager_mill') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Akta Pendirian Perusahaan --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header m-0" id="header-akta-pendirian">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#akta-pendirian" aria-controls="akta-pendirian">
                                    Akta Pendirian Perusahaan
                                </button>
                            </h2>
                            <div id="akta-pendirian" class="accordion-collapse collapse"
                                aria-labelledby="header-akta-pendirian" data-bs-parent="#data-perkebunan">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">Nomor Akta</label>
                                            <input type="text" name="nomor_akta_pendirian" class="form-control"
                                                value="{{ old('nomor_akta_pendirian') }}">
                                        </div>

                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">Tanggal Akta</label>
                                            <input type="date" name="tanggal_akta_pendirian" class="form-control"
                                                value="{{ old('tanggal_akta_pendirian') }}">
                                        </div>

                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">Notaris</label>
                                            <input type="text" name="notaris_akta_pendirian" class="form-control"
                                                value="{{ old('notaris_akta_pendirian') }}">
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Komisaris</label>
                                            <input type="text" name="komisaris_akta_pendirian" class="form-control"
                                                value="{{ old('komisaris_akta_pendirian') }}">
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Direktur</label>
                                            <input type="text" name="direktur_akta_pendirian" class="form-control"
                                                value="{{ old('direktur_akta_pendirian') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Akta Perubahan --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header m-0" id="header-akta-perubahan">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#akta-perubahan" aria-controls="akta-perubahan">
                                    Akta Perubahan Perusahaan
                                </button>
                            </h2>
                            <div id="akta-perubahan" class="accordion-collapse collapse"
                                aria-labelledby="header-akta-perubahan" data-bs-parent="#data-perkebunan">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">Nomor Akta</label>
                                            <input type="text" name="nomor_akta_perubahan" class="form-control"
                                                value="{{ old('nomor_akta_perubahan') }}">
                                        </div>

                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">Tanggal Akta</label>
                                            <input type="date" name="tanggal_akta_perubahan" class="form-control"
                                                value="{{ old('tanggal_akta_perubahan') }}">
                                        </div>

                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">Notaris</label>
                                            <input type="text" name="notaris_akta_perubahan" class="form-control"
                                                value="{{ old('notaris_akta_perubahan') }}">
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Komisaris</label>
                                            <input type="text" name="komisaris_akta_perubahan" class="form-control"
                                                value="{{ old('komisaris_akta_perubahan') }}">
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Direktur</label>
                                            <input type="text" name="direktur_akta_perubahan" class="form-control"
                                                value="{{ old('direktur_akta_perubahan') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Penanaman --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header m-0" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-controls="collapseFour">
                                    Penanaman
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#data-perkebunan">
                                <div class="accordion-body">
                                    <label class="form-label">Luas Izin Usaha Perkebunan (Ha)</label>
                                    <input type="number" step="0.01" name="luas_iup" class="form-control"
                                        value="{{ old('luas_iup') }}">
                                </div>
                            </div>
                        </div>

                        {{-- Ketengakerjaan --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header m-0" id="header-ketenagakerjaan">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#ketenagakerjaan" aria-controls="ketenagakerjaan">
                                    Ketenagakerjaan
                                </button>
                            </h2>
                            <div id="ketenagakerjaan" class="accordion-collapse collapse"
                                aria-labelledby="header-ketenagakerjaan" data-bs-parent="#data-perkebunan">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <div>Tenaga Kerja Kebun</div>
                                            <div class="mb-3">
                                                <label class="form-label">Pekerja Bulanan</label>
                                                <input type="number" name="bulanan_kebun" class="form-control"
                                                    value="{{ old('bulanan_kebun') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Pekerja Tetap</label>
                                                <input type="number" name="tetap_kebun" class="form-control"
                                                    value="{{ old('tetap_kebun') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Pekerja Harian Lepas</label>
                                                <input type="number" name="lepas_kebun" class="form-control"
                                                    value="{{ old('lepas_kebun') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Pekerja Musiman</label>
                                                <input type="number" name="musiman_kebun" class="form-control"
                                                    value="{{ old('musiman_kebun') }}">
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <div>Tenaga Kerja Pabrik</div>
                                            <div class="mb-3">
                                                <label class="form-label">Pekerja Bulanan</label>
                                                <input type="number" name="bulanan_pabrik" class="form-control"
                                                    value="{{ old('bulanan_pabrik') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Pekerja Tetap</label>
                                                <input type="number" name="tetap_pabrik" class="form-control"
                                                    value="{{ old('tetap_pabrik') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Pekerja Harian Lepas</label>
                                                <input type="number" name="lepas_pabrik" class="form-control"
                                                    value="{{ old('lepas_pabrik') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Pekerja Musiman</label>
                                                <input type="number" name="musiman_pabrik" class="form-control"
                                                    value="{{ old('musiman_pabrik') }}">
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <div>Tenaga Kerja Asing</div>
                                            <div class="mb-3">
                                                <label class="form-label">Jumlah Tenaga Kerja Asing</label>
                                                <input type="number" name="tka" class="form-control"
                                                    value="{{ old('tka') }}">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Jabatan TKA</label>
                                                <input type="text" name="jabatantka" class="form-control"
                                                    value="{{ old('jabatantka') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Kemitraan --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header m-0" id="header-kemitraan">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#kemitraan" aria-controls="kemitraan">
                                    Kemitraan
                                </button>
                            </h2>
                            <div id="kemitraan" class="accordion-collapse collapse" aria-labelledby="header-kemitraan"
                                data-bs-parent="#data-perkebunan">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Target Petani Plasma (KK)</label>
                                            <input type="number" name="kk_target_plasma" class="form-control"
                                                value="{{ old('kk_target_plasma') }}">
                                        </div>
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Target Petani Plasma (Ha)</label>
                                            <input type="number" step="0.01" name="ha_target_plasma"
                                                class="form-control" value="{{ old('ha_target_plasma') }}">
                                        </div>
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Realisasi Petani Plasma (KK)</label>
                                            <input type="number" name="kk_realisasi_plasma" class="form-control"
                                                value="{{ old('kk_realisasi_plasma') }}">
                                        </div>
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Realisasi Petani Plasma (Ha)</label>
                                            <input type="number" step="0.01" name="ha_realisasi_plasma"
                                                class="form-control" value="{{ old('ha_realisasi_plasma') }}">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Pola Kemitraan</label>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pola_kemitraan"
                                                    id="kemitraan-mandiri" value="kemitraan mandiri">
                                                <label class="form-check-label" for="kemitraan-mandiri">Kemitraan
                                                    Mandiri</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pola_kemitraan"
                                                    id="kemitraan-satu-manajemen" value="kemitraan satu manajemen">
                                                <label class="form-check-label" for="kemitraan-satu-manajemen">Kemitraan
                                                    Satu Manajemen</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex w-100 justify-content-between mt-3">
                        <a href="{{ route('perkebunan.index') }}" class="btn btn-default btn-bordered w-md waves-light">
                            <i class="fa fa-chevron-left"></i>
                            Kembali</a>
                        <button type="submit" class="btn btn-primary btn-bordered w-md waves-light">
                            <i class="fa fa-save"></i> Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('button[type=submit]').on('click', function(e) {
                var flag = true;
                e.preventDefault();
                $('input[required]').each(function(index, input) {
                    if ($(input).val() === '') {
                        flag = false;
                        return false;
                    }
                });
                if (flag) return $('form').submit();
                // Swal.fire()
            });
        });
    </script>
@endsection
