@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
    <style>
        table td {
            vertical-align: middle;
        }
    </style>
@endsection

@section('content-title', 'Perundangan')

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
            <div class="card-body">
                <button class="btn btn-success btn-bordered mb-3 rounded-2">
                    <i class="fa fa-plus me-1"></i>
                    Tambah Data Perundangan
                </button>
                <table class="table table-striped w-100" id="perundangans">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perundangans as $perundangan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $perundangan->nama }}</td>
                                <td>
                                    <a href="{{ asset('storage/' . $perundangan->file) }}"
                                        class="btn btn-bordered btn-primary btn-sm rounded-2" download>
                                        <i class="fa fa-download me-1"></i>
                                        Download
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.perundangan.update', ['perundangan' => $perundangan->id, 'nama' => $perundangan->nama]) }}"
                                        class="btn btn-warning btn-bordered rounded-2 me-1"><i class="fa fa-edit me-1"></i>
                                        Ubah Data</a>
                                    <a href="{{ route('admin.perundangan.destroy', ['perundangan' => $perundangan->id, 'nama' => $perundangan->nama]) }}"
                                        class="btn btn-danger btn-bordered rounded-2"><i class="fa fa-trash me-1"></i> Hapus
                                        Data</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('perundangan.admin.modal')
@endsection

@section('js')
    <script src="{{ asset('assets/libs/DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            const perundangans = $('table#perundangans').DataTable({
                'scrollX': true,
                'columnDefs': [{
                        'target': 0,
                        'width': 35,
                        'className': 'dt-center'
                    },
                    {
                        'target': [2],
                        'width': 150,
                        'className': 'dt-center'
                    },
                    {
                        'target': [3],
                        'width': 250,
                        'className': 'dt-center'
                    },
                ]
            });

            $('button.btn-success').on('click', function() {
                $('.modal-title').text('Tambah Data Perundangan');
                $('.content form').trigger('reset');
                $('.content [name=_method]').val('POST');
                $('.content [name=file]').attr('required', 'required');
                $('.content form').attr('action', `{{ route('admin.perundangan.store') }}`);
                $('.modal').modal('show');
            });

            $('table#perundangans').on('click', 'a.btn-warning', function(e) {
                e.preventDefault();
                var tr = $(this).closest('tr');
                var row = perundangans.row(tr);
                var nama = row.data()[1];
                $('.modal-title').text('Ubah Data Perundangan');
                $('.content [name=nama]').val(nama);
                $('.content [name=_method]').val('PATCH');
                $('.content [name=file]').removeAttr('required');
                $('.content form').attr('action', $(this).attr('href'));
                $('.modal').modal('show');
            });

            $('table#perundangans').on('click', 'a.btn-danger', async function(e) {
                e.preventDefault();
                if (!await confirmation()) {
                    return
                }
                var tr = $(this).closest('tr');
                var row = perundangans.row(tr);

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
                        perundangans.row(row).remove().cells(null, 0, {
                            search: 'applied',
                            order: 'applied'
                        }).every(function(cell) {
                            this.data(i++);
                        }).draw();

                        swal('Berhasil menghapus data perundangan');
                    }
                });
            });
        });
    </script>
@endsection
