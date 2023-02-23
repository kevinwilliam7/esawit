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
                ajax: '{{ url()->current() }}',
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'jenisKegiatan', name: 'jenisKegiatan'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'nilaisetara', name: 'nilaisetara'},
                    {data: 'lokasidesa', name: 'lokasidesa'},
                    {data: 'lokasikecamatan', name: 'lokasikecamatan'},
                ],
            });
           
            $('#pabrikRealisasi').DataTable({
                columnDefs: [

                ],
            });
            $('#perkebunanRencana').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: '{{ url()->current() }}',
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'nama_perkebunan', name: 'nama_perkebunan'},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'jenisKegiatan', name: 'jenisKegiatan'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'lokasidesa', name: 'lokasidesa'},
                    {data: 'lokasikecamatan', name: 'lokasikecamatan'},
                ]
            });
            $('#perkebunanRealisasi').DataTable({
                columnDefs: [

                ],
            });
        });
    </script>
@endsection