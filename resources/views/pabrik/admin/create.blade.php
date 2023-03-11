@extends('layouts.admin.master')

@section('content-title', 'Pabrik')

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
                <form action="{{ route('admin.pabrik.store') }}" method="post" enctype="multipart/form-data" id="store">
                    @csrf
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-informasi-umum-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-informasi-umum" type="button" role="tab"
                                aria-controls="nav-informasi-umum" aria-selected="true">Informasi Umum Pabrik</button>
                            <button class="nav-link" id="nav-legalitas-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-legalitas" type="button" role="tab" aria-controls="nav-legalitas"
                                aria-selected="false">Legalitas
                                Pabrik</button>
                            <button class="nav-link" id="nav-sertifikasi-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-sertifikasi" type="button" role="tab"
                                aria-controls="nav-sertifikasi" aria-selected="false">Sertifikasi Pabrik</button>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-informasi-umum" role="tabpanel"
                            aria-labelledby="nav-informasi-umum-tab" tabindex="0">
                            @include('pabrik.admin.tabs.create.informasi-umum')
                        </div>
                        <div class="tab-pane fade" id="nav-legalitas" role="tabpanel" aria-labelledby="nav-legalitas-tab"
                            tabindex="0">
                            @include('pabrik.admin.tabs.create.legalitas')
                        </div>
                        <div class="tab-pane fade" id="nav-sertifikasi" role="tabpanel"
                            aria-labelledby="nav-sertifikasi-tab" tabindex="0">
                            @include('pabrik.admin.tabs.create.sertifikasi')
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <div class="d-flex w-100 justify-content-between">
                    <a href="{{ route('admin.pabrik.index') }}" class="btn btn-default btn-bordered w-md waves-light">
                        <i class="fa fa-chevron-left"></i>
                        Kembali</a>
                    <button type="submit" class="btn btn-primary btn-bordered w-md waves-light" form="store">
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
            $('#store button[type=submit]').on('click', async function(e) {
                e.preventDefault();
                var flag = true;
                var name = '';

                $('form#store [required]').each(function(index, input) {
                    if ($(input).val() === '') {
                        name = $(input).attr('name').replace('_', ' ');
                        name = name.charAt(0).toUpperCase() + name.slice(1);
                        flag = false;
                        return false;
                    }
                });
                if (flag) {
                    var confirm = await confirmation();
                    if (confirm) {
                        $('form#store [required]').submit();
                    }
                    return;
                }

                swal(`${name} wajib diisi`, 'error');
            });
        });
    </script>
@endsection
