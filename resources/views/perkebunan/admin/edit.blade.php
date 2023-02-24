@extends('layouts.admin.master')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="card-title py-0 h5">Tambah Data Perusahaan Perusahaan Perkebunan</div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.perkebunan.update', ['perkebunan' => $perkebunan->id, 'nama' => $perkebunan->nama]) }}"
                    id="store-perkebunan">
                    @csrf
                    @method('PATCH')
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
                                            <input type="text" name="nama" class="form-control"
                                                value="{{ $perkebunan->nama }}" required>
                                            @error('nama')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">NPWP</label>
                                            <input type="text" name="npwp" class="form-control"
                                                value="{{ $perkebunan->npwp }}" minlength="10" required>
                                            @error('npwp')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Alamat Perusahaan</label>
                                            <textarea type="text" name="alamat" class="form-control" row=5 required>{{ $perkebunan->alamat }}</textarea>
                                            @error('alamat')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ $perkebunan->email }}">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Direktur Utama</label>
                                            <input type="text" name="direktur" class="form-control"
                                                value="{{ $perkebunan->direktur }}">
                                            @error('direktur')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">General Manager Oprasional</label>
                                            <input type="text" name="gm" class="form-control"
                                                value="{{ $perkebunan->gm }}">
                                            @error('gm')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">Kadiv Legal</label>
                                            <input type="text" name="kadiv_legal" class="form-control"
                                                value="{{ $perkebunan->kadiv_legal }}">
                                            @error('kadiv_legal')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <label class="form-label">Manager Mill Project</label>
                                            <input type="text" name="manager_mill" class="form-control"
                                                value="{{ $perkebunan->manager_mill }}">
                                            @error('manager_mill')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
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
                                                value="{{ $perkebunan->nomor_akta_pendirian }}">
                                            @error('nomor_akta_pendirian')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">Tanggal Akta</label>
                                            <input type="date" name="tanggal_akta_pendirian" class="form-control"
                                                value="{{ $perkebunan->tanggal_akta_pendirian }}">
                                            @error('tanggal_akta_pendirian')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">Notaris</label>
                                            <input type="text" name="notaris_akta_pendirian" class="form-control"
                                                value="{{ $perkebunan->notaris_akta_pendirian }}">
                                            @error('notaris_akta_pendirian')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Komisaris</label>
                                            <input type="text" name="komisaris_akta_pendirian" class="form-control"
                                                value="{{ $perkebunan->komisaris_akta_pendirian }}">
                                            @error('komisaris_akta_pendirian')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Direktur</label>
                                            <input type="text" name="direktur_akta_pendirian" class="form-control"
                                                value="{{ $perkebunan->direktur_akta_pendirian }}">
                                            @error('direktur_akta_pendirian')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
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
                                        value="{{ $perkebunan->luas_iup }}">
                                    @error('luas_iup')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
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
                                                value="{{ $perkebunan->kk_target_plasma }}">
                                            @error('kk_target_plasma')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Target Petani Plasma (Ha)</label>
                                            <input type="number" step="0.01" name="ha_target_plasma"
                                                class="form-control" value="{{ $perkebunan->ha_target_plasma }}">
                                            @error('ha_target_plasma')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Realisasi Petani Plasma (KK)</label>
                                            <input type="number" name="kk_realisasi_plasma" class="form-control"
                                                value="{{ $perkebunan->kk_realisasi_plasma }}">
                                            @error('kk_realisasi_plasma')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Realisasi Petani Plasma (Ha)</label>
                                            <input type="number" step="0.01" name="ha_realisasi_plasma"
                                                class="form-control" value="{{ $perkebunan->ha_realisasi_plasma }}">
                                            @error('ha_realisasi_plasma')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Pola Kemitraan</label>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pola_kemitraan"
                                                    id="kemitraan-mandiri" value="kemitraan mandiri"
                                                    {{ $perkebunan->pola_kemitraan === 'kemitraan mandiri' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="kemitraan-mandiri">Kemitraan
                                                    Mandiri</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pola_kemitraan"
                                                    id="kemitraan-satu-manajemen" value="kemitraan satu manajemen"
                                                    {{ $perkebunan->pola_kemitraan === 'kemitraan satu manajemen' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="kemitraan-satu-manajemen">Kemitraan
                                                    Satu Manajemen</label>
                                            </div>
                                            @error('pola_kemitraan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <div class="d-flex w-100 justify-content-between">
                    <a href="{{ route('admin.perkebunan.index') }}"
                        class="btn btn-default btn-bordered w-md waves-light">
                        <i class="fa fa-chevron-left"></i>
                        Kembali</a>
                    <button type="submit" class="btn btn-primary btn-bordered w-md waves-light">
                        <i class="fa fa-save"></i> Simpan Data
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('button[type=submit]').on('click', async function(e) {
                var flag = true;
                var name = '';
                e.preventDefault();
                $('[required]').each(function(index, input) {
                    if ($(input).val() === '') {
                        name = $(input).attr('name').replace('-', ' ');
                        name = name.charAt(0).toUpperCase() + name.slice(1);
                        flag = false;
                        return false;
                    }
                });
                if (flag) {
                    var confirm = await confirmation();
                    if (confirm) {
                        $('form').submit();
                    }
                    return;
                }
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: `${name} wajib diisi`,
                    showConfirmButton: false,
                    timer: 1500
                });
            });

            const confirmation = async () => {
                var result = await Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Anda tidak dapat mengembalikan aksi ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya!',
                    cancelButtonText: 'Tidak'
                });
                return result.isConfirmed;
            }
        });
    </script>
@endsection
