@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
@endsection

@section('content-title', 'Data Perusahaan Perkebunan')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Data Perkebunan</div>
            </div>
            <div class="card-body">
                <nav class="">
                    <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-informasi-umum-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-informasi-umum" type="button" role="tab">Umum</button>
                        <button class="nav-link" id="nav-legalitas-tab" data-bs-toggle="tab" data-bs-target="#nav-legalitas"
                            type="button" role="tab">Legalitas
                        </button>
                        <button class="nav-link" id="nav-penanaman-tab" data-bs-toggle="tab" data-bs-target="#nav-penanaman"
                            type="button" role="tab">Penanaman</button>
                        <button class="nav-link" id="nav-produksi-tab" data-bs-toggle="tab" data-bs-target="#nav-produksi"
                            type="button" role="tab">
                            Produksi & Pengolahan
                        </button>
                        <button class="nav-link" id="nav-ketenagakerjaan-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-ketenagakerjaan" type="button" role="tab">Ketenagakerjaan</button>
                        <button class="nav-link" id="nav-kemitraan-tab" data-bs-toggle="tab" data-bs-target="#nav-kemitraan"
                            type="button" role="tab">Kemitraan</button>
                        <button class="nav-link" id="nav-csr-tab" data-bs-toggle="tab" data-bs-target="#nav-csr"
                            type="button" role="tab">CSR</button>
                        <button class="nav-link" id="nav-sertifikat-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-sertifikat" type="button" role="tab">Sertifikat</button>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-informasi-umum" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.informasi-umum')
                    </div>
                    <div class="tab-pane fade" id="nav-legalitas" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.legalitas')
                    </div>
                    <div class="tab-pane fade" id="nav-penanaman" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.penanaman')
                    </div>
                    <div class="tab-pane fade" id="nav-produksi" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.produksi')
                    </div>
                    <div class="tab-pane fade" id="nav-ketenagakerjaan" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.ketenagakerjaan')
                    </div>
                    <div class="tab-pane fade" id="nav-kemitraan" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.kemitraan')
                    </div>
                    <div class="tab-pane fade" id="nav-csr" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.csr')
                    </div>
                    <div class="tab-pane fade" id="nav-sertifikat" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.sertifikat')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/libs/DataTables/datatables.min.js') }}"></script>
@endsection
