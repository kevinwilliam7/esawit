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
                    <p>Informasi Daftar Perusahaan Perkebunan Kelapa Sawit di Kabupaten Sanggau</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="info">
                            <table id="tablePabrik" class="table table-bordered table-striped w-100">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pabrik</th>
                                    <th>NPWP</th>
                                    <th>Grup Perusahaan</th>
                                    <th>Kapasitas Produksi (Ton TBS/Jam)</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
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
            $('#tablePabrik').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: '{{ url()->current() }}',
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'nama', name: 'nama'},
                    {data: 'npwp', name: 'npwp'},
                    {data: 'nama_grup', name: 'nama_grup'},
                    {data: 'kapasitas_produksi', name: 'kapasitas_produksi'},
                    {
                        data: 'aksi', name: 'aksi', 
                        orderable: false,
                        searchable: false
                    },
                ],
                columnDefs: [
                    {
                        targets: [0, 1, 2, 3, 4, 5],
                        className: 'dt-center'
                    }
                ]
            });
        });
    </script>
@endsection