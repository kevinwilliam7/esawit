@extends('layouts.public.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
    <style>
        .pagination div.dataTables_paginate {
            color: #198754;
        }
        .pagination .page-item.active .page-link { 
            background-color: #198754;  
            border: 1px solid #198754;
            color: white;
        }
        div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.active .page-link:focus {
            background-color: #198754;
            border: 1px solid #198754;
            color: white;
        }
        .pagination .page-item.active .page-link:hover {
            background-color: #198754;
            border: 1px solid #198754;
            color: white;
        }

        .paginate_button.page-item a {
            color: #198754;
        }
    </style>
@endsection
@section('content')
<main id="main">
    <section id="location" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Pabrik Kelapa Sawit</h2>
                <p>Informasi Daftar Pabrik Perkebunan Kelapa Sawit di Kabupaten Sanggau</p>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="info">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Umum</button>
                                <button class="nav-link" id="nav-legal-tab" data-bs-toggle="tab" data-bs-target="#nav-legal" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Legalitas</button>
                                <button class="nav-link" id="nav-produksi-tab" data-bs-toggle="tab" data-bs-target="#nav-produksi" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Produksi</button>
                                <button class="nav-link" id="nav-supply-tab" data-bs-toggle="tab" data-bs-target="#nav-supply" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Supply</button>
                                <button class="nav-link" id="nav-csr-tab" data-bs-toggle="tab" data-bs-target="#nav-csr" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">CSR</button>
                                <button class="nav-link" id="nav-sertifikat-tab" data-bs-toggle="tab" data-bs-target="#nav-sertifikat" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Sertifikat</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                asdasdsa
                            </div>
                            <div class="tab-pane fade" id="nav-legal" role="tabpanel" aria-labelledby="nav-legal-tab">
                                asdasd
                            </div>
                            <div class="tab-pane fade" id="nav-produksi" role="tabpanel" aria-labelledby="nav-produksi-tab">
                                <div class="container">
                                    <div class="row p-4">
                                        <table id="tableProduksi" class="table table-bordered w-100">
                                            <thead>
                                                <tr>
                                                    <th><b>No</b></th>
                                                    <th><b>Kebun Hasil Pabrik</b></th>
                                                    <th><b>Jumlah Produksi Sekarang (Ton)</b></th>
                                                    <th><b>Jumlah Produksi Tahun Lalu (Ton)</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-supply" role="tabpanel" aria-labelledby="nav-supply-tab">
                                <div class="container">
                                    <div class="row p-4">
                                        <table id="tableSupply" class="table table-bordered w-100">
                                            <thead>
                                                <tr>
                                                    <th><b>No</b></th>
                                                    <th><b>Kebun Supplier</b></th>
                                                    <th><b>Jumlah Supply (Ton)</b></th>
                                                    <th><b>Jangka Waktu Supply</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-csr" role="tabpanel" aria-labelledby="nav-csr-tab">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                CSR Realisasi
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableRealisasi" class="table table-bordered w-100">
                                                        <thead>
                                                            <tr>
                                                                <th><b>No</b></th>
                                                                <th><b>Tahun</b></th>
                                                                <th><b>Jenis Kegiatan</b></th>
                                                                <th><b>Tanggal</b></th>
                                                                <th><b>Nilai Setara</b></th>
                                                                <th><b>Lokasi Desa</b></th>
                                                                <th><b>Lokasi Kecamatan</b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                CSR Rencana
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableRencana" class="table table-bordered w-100">
                                                        <thead>
                                                            <tr>
                                                                <th><b>No</b></th>
                                                                <th><b>Tahun</b></th>
                                                                <th><b>Jenis Kegiatan</b></th>
                                                                <th><b>Tanggal</b></th>
                                                                <th><b>Nilai Setara</b></th>
                                                                <th><b>Lokasi Desa</b></th>
                                                                <th><b>Lokasi Kecamatan</b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-sertifikat" role="tabpanel" aria-labelledby="nav-sertifikat-tab">
                                <div class="container">
                                    <div class="row p-4">
                                        <table id="tableSertifikat" class="table table-bordered w-100">
                                            <thead>
                                                <tr>
                                                    <th><b>No</b></th>
                                                    <th><b>Jenis Sertifikat</b></th>
                                                    <th><b>Nama Sertifikat</b></th>
                                                    <th><b>Nomor Surat</b></th>
                                                    <th><b>Tanggal Diterbitkan</b></th>
                                                    <th><b>Penjabat Penerbit</b></th>
                                                    <th><b>Kategori</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('js')
<script src="{{ asset('assets/libs/jquery-3.6.3/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('assets/libs/DataTables/datatables.min.js') }}"></script>
    <script>
        var id = {{ $id }}
        $(document).ready(function(){
            $('#tableRencana').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: `{{ url('api/pabrik-datatable-rencana/${id}') }}`,
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'jeniskegiatan', name: 'jeniskegiatan'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'nilaisetara', name: 'nilaisetara'},
                    {data: 'lokasidesa', name: 'lokasidesa'},
                    {data: 'lokasikecamatan', name: 'lokasikecamatan'},
                ],
                columnDefs: [
                    {
                        targets: [0, 1, 2, 3, 4],
                        className: 'dt-center'
                    }
                ]
            });
        });
        $(document).ready(function(){
            $('#tableRealisasi').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: `{{ url('api/pabrik-datatable-realisasi/${id}') }}`,
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'jeniskegiatan', name: 'jeniskegiatan'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'nilaisetara', name: 'nilaisetara'},
                    {data: 'lokasidesa', name: 'lokasidesa'},
                    {data: 'lokasikecamatan', name: 'lokasikecamatan'},
                ],
                columnDefs: [
                    {
                        targets: [0, 1, 2, 3, 4],
                        className: 'dt-center'
                    }
                ]
            });
        });
        $(document).ready(function(){
            $('#tableSertifikat').DataTable({
            });
        });
        $(document).ready(function(){
            $('#tableProduksi').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: `{{ url('api/pabrik-datatable-produksi/${id}') }}`,
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'hasil_pabrik', name: 'hasil_pabrik'},
                    {data: 'jumlah_produksi', name: 'jumlah_produksi'},
                    {data: 'jumlah_produksi_lalu', name: 'jumlah_produksi_lalu'},
                ],
                columnDefs: [
                    {
                        targets: [0, 1, 2, 3],
                        className: 'dt-center'
                    }
                ]
            });
        });
        $(document).ready(function(){
            $('#tableSupply').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: `{{ url('api/pabrik-datatable-supply/${id}') }}`,
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'nama_perkebunan', name: 'nama_perkebunan'},
                    {data: 'jumlah_supply', name: 'jumlah_supply'},
                    {data: 'jangka_waktu', name: 'jangka_waktu'},
                ],
                columnDefs: [
                    {
                        targets: [0, 1, 2, 3],
                        className: 'dt-center'
                    }
                ]
            });
        });
    </script>
@endsection