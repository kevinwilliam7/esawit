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
                    <h2>Perusahaan Perkebunan Kelapa Sawit</h2>
                    <p>Informasi Daftar Perusahaan Perkebunan Kelapa Sawit di Kabupaten Sanggau</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="info">
                            <table id="tablePerkebunan" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nama Perkebunan</th>
                                    <th>NPWP</th>
                                    <th>Pola Kemitraan</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($kontribusis as $kontribusi)
                                    <tr>
                                        <td>{{ $perkebunan->nama_perkebunan }}</td>
                                        <td>{{ $perkebunan->npwp }}</td>
                                        <td>{{ $perkebunan->pola_kemitraan }}</td>
                                        <td style="width: 70px"><a href="" class="btn btn-outline-success"><span class="bi-eye"></span> Lihat </a></td>
                                    </tr>
                                @endforeach
                                </tbody>
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
            $('#tablePerkebunan').DataTable({
                columnDefs: [

                ],
            });
        });
    </script>
@endsection