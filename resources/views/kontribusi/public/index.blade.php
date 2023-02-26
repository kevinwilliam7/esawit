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
                    <h2>CSR Perusahaan</h2>
                    <p>Informasi Daftar Perusahaan Perkebunan Kelapa Sawit di Kabupaten Sanggau</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="info">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            CSR Pabrik yang sudah terealisasi
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <table id="pabrikRencana" class="table table-bordered table-striped w-100">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Pabrik</th>
                                                    <th>Tahun</th>
                                                    <th>Jenis Kegiatan</th>
                                                    <th>Tanggal</th>
                                                    <th>Nilai Setara</th>
                                                    <th>Lokasi Desa</th>
                                                    <th>Lokasi Kecamatan</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            CSR Pabrik yang belum terealisasi
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <table id="pabrikRealisasi" class="table table-bordered table-striped w-100">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Pabrik</th>
                                                    <th>Tahun</th>
                                                    <th>Jenis Kegiatan</th>
                                                    <th>Tanggal</th>
                                                    <th>Nilai Setara</th>
                                                    <th>Lokasi Desa</th>
                                                    <th>Lokasi Kecamatan</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            CSR Perkebunan yang sudah terealisasi
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <table id="perkebunanRealisasi" class="table table-bordered table-striped w-100">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Perkebunan</th>
                                                    <th>Tahun</th>
                                                    <th>Jenis Kegiatan</th>
                                                    <th>Tanggal</th>
                                                    <th>Nilai Setara</th>
                                                    <th>Lokasi Desa</th>
                                                    <th>Lokasi Kecamatan</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            CSR Perkebunan yang belum terealisasi
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <table id="perkebunanRencana" class="table table-bordered table-striped w-100">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Perkebunan</th>
                                                    <th>Tahun</th>
                                                    <th>Jenis Kegiatan</th>
                                                    <th>Tanggal</th>
                                                    <th>Nilai Setara</th>
                                                    <th>Lokasi Desa</th>
                                                    <th>Lokasi Kecamatan</th>
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
        $(document).ready(function(){
            $('#pabrikRencana').DataTable({  
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: '{{ url('api/datatable-pabrik-rencana') }}',
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'jeniskegiatan', name: 'jeniskegiatan'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'nilaisetara', name: 'nilaisetara'},
                    {data: 'lokasidesa', name: 'lokasidesa'},
                    {data: 'lokasikecamatan', name: 'lokasikecamatan'},
                ],
                columnDefs: [
                    {
                        targets: [0, 1, 2, 3, 4, 5, 6, 7],
                        className: 'dt-center'
                    }
                ]
            });

            $('#pabrikRealisasi').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: '{{ url('api/datatable-pabrik-realisasi') }}',
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'jeniskegiatan', name: 'jeniskegiatan'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'nilaisetara', name: 'nilaisetara'},
                    {data: 'lokasidesa', name: 'lokasidesa'},
                    {data: 'lokasikecamatan', name: 'lokasikecamatan'},
                ],
                columnDefs: [
                    {
                        targets: [0, 1, 2, 3, 4, 5, 6, 7],
                        className: 'dt-center'
                    }
                ]
            });

            $('#perkebunanRencana').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: '{{ url('api/datatable-perkebunan-rencana') }}',
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'jeniskegiatan', name: 'jeniskegiatan'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'nilaisetara', name: 'nilaisetara'},
                    {data: 'lokasidesa', name: 'lokasidesa'},
                    {data: 'lokasikecamatan', name: 'lokasikecamatan'},
                ],
                columnDefs: [
                    {
                        targets: [0, 1, 2, 3, 4, 5, 6, 7],
                        className: 'dt-center'
                    }
                ]
            });

            $('#perkebunanRealisasi').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: '{{ url('api/datatable-perkebunan-realisasi') }}',
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'jeniskegiatan', name: 'jeniskegiatan'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'nilaisetara', name: 'nilaisetara'},
                    {data: 'lokasidesa', name: 'lokasidesa'},
                    {data: 'lokasikecamatan', name: 'lokasikecamatan'},
                ],
                columnDefs: [
                    {
                        targets: [0, 1, 2, 3, 5, 6, 7],
                        className: 'dt-center'
                    }
                ]
            });
        });
    </script>
@endsection