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
                <form method="POST"
                    action="{{ route('admin.perkebunan.update', ['perkebunan' => $perkebunan->id, 'nama' => $perkebunan->nama]) }}"
                    id="store-perkebunan">
                    @csrf
                    @method('PATCH')
                    <nav class="">
                        <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-informasi-umum-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-informasi-umum" type="button" role="tab"
                                aria-controls="nav-informasi-umum" aria-selected="true">Informasi Umum</button>
                            <button class="nav-link" id="nav-pendirian-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-pendirian" type="button" role="tab" aria-controls="nav-pendirian"
                                aria-selected="false">Akta Pendirian</button>
                            <button class="nav-link" id="nav-perubahan-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-perubahan" type="button" role="tab" aria-controls="nav-perubahan"
                                aria-selected="false">Akta Perubahan</button>
                            <button class="nav-link" id="nav-penanaman-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-penanaman" type="button" role="tab" aria-controls="nav-penanaman"
                                aria-selected="false">Penanaman</button>
                            <button class="nav-link" id="nav-ketenagakerjaan-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-ketenagakerjaan" type="button" role="tab"
                                aria-controls="nav-ketenagakerjaan" aria-selected="false">Ketenagakerjaan</button>
                            <button class="nav-link" id="nav-kemitraan-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-kemitraan" type="button" role="tab" aria-controls="nav-kemitraan"
                                aria-selected="false">Kemitraan</button>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-informasi-umum" role="tabpanel"
                            aria-labelledby="nav-informasi-umum-tab" tabindex="0">
                            @include('perkebunan.admin.tabs.edit.informasi-umum')
                        </div>
                        <div class="tab-pane fade" id="nav-pendirian" role="tabpanel" aria-labelledby="nav-pendirian-tab"
                            tabindex="0">
                            @include('perkebunan.admin.tabs.edit.akta-pendirian')
                        </div>
                        <div class="tab-pane fade" id="nav-perubahan" role="tabpanel" aria-labelledby="nav-perubahan-tab"
                            tabindex="0">
                            @include('perkebunan.admin.tabs.edit.akta-perubahan')
                        </div>
                        <div class="tab-pane fade" id="nav-penanaman" role="tabpanel" aria-labelledby="nav-penanaman-tab"
                            tabindex="0">
                            @include('perkebunan.admin.tabs.edit.penanaman')
                        </div>
                        <div class="tab-pane fade" id="nav-ketenagakerjaan" role="tabpanel"
                            aria-labelledby="nav-ketenagakerjaan-tab" tabindex="0">
                            @include('perkebunan.admin.tabs.edit.ketenagakerjaan')
                        </div>
                        <div class="tab-pane fade" id="nav-kemitraan" role="tabpanel" aria-labelledby="nav-kemitraan-tab"
                            tabindex="0">
                            @include('perkebunan.admin.tabs.edit.kemitraan')
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <div class="d-flex w-100 justify-content-between">
                    <a href="{{ route('admin.perkebunan.index') }}" class="btn btn-default btn-bordered w-md waves-light">
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
                if (!flag) {
                    return Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: `${name} wajib diisi`,
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
                var confirm = await confirmation();
                if (confirm) {
                    $('form').submit();
                }
                return;
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
