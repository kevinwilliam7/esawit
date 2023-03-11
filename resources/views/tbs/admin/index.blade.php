@php
    $listTbs = [3,4,5,6,7,8,9,10,21,22,23,24,25];
@endphp

@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
    <style>
        table th, table td {
            vertical-align: middle;
        }
    </style>
@endsection

@section('content-title', 'Statistik Harga TBS')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title h6"><b>Data Harga TBS</b></div>
                <a href='{{ route("admin.tbs.create") }}' class="btn btn-success btn-bordered rounded-2 btn-sm">
                    <i class="fa fa-plus me-1"></i> Tambah Data
                </a>
            </div>
            <div class="card-body">
                <table class="table table-striped w-100" id="tbs">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Bulan</th>
                            <th colspan="13" style="text-align: center;">TBS Tahun Ke-</th>
                            <th rowspan="2">Aksi</th>
                        </tr>
                        <tr>
                            @foreach ($listTbs as $tahun)
                                <th>{{ $tahun }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tbs as $tbs)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tbs->bulan }}</td>
                                @foreach ($listTbs as $tahun)
                                    <td>{{ $tbs->{"tbs_$tahun"} }}</td>
                                @endforeach
                                <td>
                                    {{-- <button class="btn btn-primary btn-bordered rounded-2 btn-sm">
                                        <i class="fa fa-eye me-1"></i> Lihat Data
                                    </button> --}}
                                    <a href="{{ route('admin.tbs.edit', ['tb' => $tbs->id]) }}" class="btn btn-warning btn-bordered rounded-2 btn-sm">
                                        <i class="fa fa-eye me-1"></i> Ubah
                                    </a>
                                    <button class="btn btn-danger btn-bordered rounded-2 btn-sm" data-id="{{ $tbs->id }}">
                                        <i class="fa fa-eye me-1"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/libs/DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            const tbs = $('table#tbs').DataTable({
                'scrollX': true,
                'columnDefs': [
                    { 'target': 0, 'width': 40, 'className': 'dt-center' },
                    { 'target': '_all', 'className': 'dt-head-center' },
                    { 'target': -1, 'width': 200, 'className': 'dt-center' },
                ],
            });

            $('table').on('click', '.btn-danger', async function(){
                var id = $(this).data('id');
                var tr = $(this).closest('tr');
                var row = tbs.row(tr);
                if (!await confirmation()) {
                    return;
                }

                $.ajax({
                    'url': `{{ route('admin.tbs.index') }}/${id}`,
                    'method': 'POST',
                    'data': {
                        '_method': 'DELETE',
                        '_token': '{{ csrf_token() }}'
                    }
                }).then((req, res, xhr) => {
                    if (xhr.status === 204) {
                        let i = 1;
                        tbs.row(row).remove().cells(null, 0, {
                            search: 'applied',
                            order: 'applied'
                        }).every(function(cell) {
                            this.data(i++);
                        }).draw();

                        swal('Berhasil menghapus data harga TBS');
                    } else {
                        swal('error', 'Gagal menghapus data harga TBS');
                    }
                });
            });
        });
    </script>
@endsection
