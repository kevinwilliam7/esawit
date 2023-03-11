@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
    <style>
        table td {
            vertical-align: middle;
        }
    </style>
@endsection

@section('content-title', 'SOP Perizinan')

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
            <div class="card_header"></div>
            <div class="card-body">
                <button class="btn btn-success btn-bordered mb-3 rounded-2">
                    <i class="fa fa-plus me-1"></i>
                    Tambah Data SOP Perizinan
                </button>
                <table class="table table-striped w-100" id="sops">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Izin</th>
                            <th>File</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sops as $sop)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $sop->jenis_izin }}</td>
                                <td>
                                    <a href="{{ asset('storage/' . $sop->file) }}" class="btn btn-bordered btn-primary btn-sm rounded-2" download>
                                        <i class="fa fa-download me-1"></i>
                                        Download
                                    </a>
                                </td>
                                <td>{{ $sop->keterangan }}</td>
                                <td>
                                    <a href="{{ route('admin.sop.update', ['sop' => $sop->id, 'jenis' => $sop->jenis_izin]) }}"
                                        class="btn btn-warning btn-bordered rounded-2 me-1"><i class="fa fa-edit me-1"></i> Ubah Data</a>
                                    <a href="{{ route('admin.sop.destroy', ['sop' => $sop->id, 'jenis' => $sop->jenis_izin]) }}"
                                        class="btn btn-danger btn-bordered rounded-2"><i class="fa fa-trash me-1"></i> Hapus Data</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('sop.admin.modal')
@endsection

@section('js')
    <script src="{{ asset('assets/libs/DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            const sops = $('table#sops').DataTable({
                'scrollX': true,
                'columnDefs': [
                    { 'target': 0, 'width': 35, 'className': 'dt-center' },
                    { 'target': [-1], 'width': 250, 'className': 'dt-center' },
                    { 'target': [2], 'width': 100, 'className': 'dt-center' },
                    { 'target': [1, 3], 'className': 'dt-head-center' },
                ]
            });

            $('button.btn-success').on('click', function() {
                $('.modal-title').text('Tambah Data SOP Perizinan');
                $('.container form').trigger('reset');
                $('.container [name=_method]').val('POST');
                $('.content [name=file]').removeAttr('required');
                $('.container form').attr('action', `{{ route('admin.sop.store') }}`);
                $('.modal').modal('show');
            });

            $('table#sops').on('click', 'a.btn-warning', function(e) {
                e.preventDefault();
                var tr = $(this).closest('tr');
                var row = sops.row(tr);
                var jenis = row.data()[1];
                var keterangan = row.data()[3];
                $('.modal-title').text('Ubah Data SOP Perizinan');
                $('.container [name=jenis_izin]').val(jenis);
                $('.container [name=keterangan]').val(keterangan);
                $('.container [name=_method]').val('PATCH');
                $('.content [name=file]').attr('required', 'required');
                $('.container form').attr('action', $(this).attr('href'));
                $('.modal').modal('show');
            });

            $('table#sops').on('click', 'a.btn-danger', async function(e) {
                e.preventDefault();
                if (!await confirmation()) {
                    return
                }
                var tr = $(this).closest('tr');
                var row = sops.row(tr);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                $.ajax({
                    'url': $(this).attr('href'),
                    'method': 'DELETE',
                }).then((req, res, xhr) => {
                    if (xhr.status === 204) {
                        let i = 1;
                        sops.row(row).remove().cells(null, 0, {
                            search: 'applied',
                            order: 'applied'
                        }).every(function(cell) {
                            this.data(i++);
                        }).draw();

                        swal('Berhasil menghapus data SOP');
                    }
                });
            });
        });
    </script>
@endsection
