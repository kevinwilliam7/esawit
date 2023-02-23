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
                <div class="card-title py-0 h5">Tambah Data Perusahaan Pabrik</div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.perkebunan.store') }}" id="store-perkebunan">
                    @csrf

                    <div class="accordion" id="data-perkebunan">
                        {{-- Informasi Umum Pabrik --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header m-0" id="header-informasi-umum">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#informasi-umum" aria-controls="informasi-umum">
                                    Informasi Umum Pabrik
                                </button>
                            </h2>
                            <div id="informasi-umum" class="accordion-collapse collapse show"
                                aria-labelledby="header-informasi-umum" data-bs-parent="#data-perkebunan">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Nama Pabrik</label>
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

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Pimpinan Perusahaan</label>
                                            <input type="text" name="pimpinan" class="form-control"
                                                value="{{ old('pimpinan') }}">
                                            @error('pimpinan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Jabatan Pimpinan</label>
                                            <input type="text" name="pimpinan" class="form-control"
                                                value="{{ old('pimpinan') }}">
                                            @error('pimpinan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Alamat Kantor Pusat</label>
                                            <textarea type="text" name="alamat" class="form-control" row=5 required>{{ old('alamat') }}</textarea>
                                            @error('alamat')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">No. Telp</label>
                                            <input type="tel" name="telp" class="form-control"
                                                value="{{ old('telp') }}">
                                            @error('telp')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-4 mb-3">
                                            <label class="form-label">Luas Lokasi Pabrik (Ha)</label>
                                            <input type="number" name="kadiv_legal" class="form-control" step="0.01"
                                                value="{{ old('kadiv_legal') }}">
                                            @error('kadiv_legal')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Tahun Mulai Beroperasi</label>
                                            <input type="text" name="direktur" class="form-control"
                                                value="{{ old('direktur') }}">
                                            @error('direktur')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-lg-6 mb-3">
                                            <label class="form-label">Nama Grup Perusahaan</label>
                                            <input type="text" name="gm" class="form-control"
                                                value="{{ old('gm') }}">
                                            @error('gm')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Status Perusahaan</label>
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Go Public</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Tidak Go
                                                        Public</label>
                                                </div>
                                            </div>
                                            @error('manager_mill')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Bursa Efek</label>
                                            <input type="number" name="gm" class="form-control"
                                                value="{{ old('gm') }}">
                                            @error('gm')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Jumlah Tenaga Kerja</label>
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <label class="form-label">WNI</label>
                                                    <input type="number" name="" id=""
                                                        class="form-control">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label class="form-label">Asing</label>
                                                    <input type="number" name="" id=""
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Kapasitas Produksi (Ton TBS/Jam)</label>
                                            <input type="number" name="gm" class="form-control"
                                                value="{{ old('gm') }}">
                                            @error('gm')
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
                                    @error('luas_iup')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
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
