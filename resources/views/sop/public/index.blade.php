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
                    <h2>SOP Perizinan</h2>
                    <p>Informasi Daftar Standart Operating Procedure (SOP) Perizinan Persawitan</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="info">
                            <table id="tableSop" class="table table-bordered table-striped w-100">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Keterangan</th>
                                    <th>Jenis Izin</th>
                                    <th>Download</th>
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
        $('#tableSop').DataTable({  
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: '{{ url()->current() }}',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'keterangan', name: 'keterangan'},
                {data: 'jenis_izin', name: 'jenis_izin'},
                {
                    data: 'download', name: 'download', 
                    orderable: false,
                    searchable: false
                },
            ],
            columnDefs: [
                {
                    targets: [0, 2, 3],
                    className: 'dt-center'
                }
            ]
        });
    });
</script>
@endsection