@extends('layouts.admin.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
    <style>
        th {
            vertical-align: middle;
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <b>
                        <h5>Data Perusahaan Perkebunan</h5>
                    </b>
                    {{-- <a href="{{ route('cetak.muzzaki') }}" target="_blank" style="float: right; margin: 0 5px 10px 0" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> Cetak </a> --}}
                </div>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.perkebunan.create') }}"
                    class="btn btn-sm btn-success btn-bordered waves-effect w-md waves-light mb-3 rounded-2">
                    <i class="fa fa-plus"></i> Tambah Data
                </a>
                <table id="perkebunans" class="table table-bordered table-striped w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan Perkebunan</th>
                            <th>NPWP</th>
                            <th>Alamat Perusahaan</th>
                            <th>Pola Kemitraan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perkebunans as $perkebunan)
                            <tr data-id="{{ $perkebunan->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $perkebunan->nama }}</td>
                                <td>{{ $perkebunan->npwp }}</td>
                                <td>{{ $perkebunan->alamat }}</td>
                                <td>{{ $perkebunan->pola_kemitraan }}</td>
                                <td>
                                    <a href="{{ route('admin.perkebunan.show', ['perkebunan' => $perkebunan->id, 'nama' => $perkebunan->nama]) }}"
                                        class="btn btn-sm btn-primary btn-bordered waves-effect waves-light me-1 mb-1 rounded-2">
                                        <i class="fa fa-eye"></i> <span class="d-none d-lg-inline-block">Lihat Data</span>
                                    </a>
                                    <a href="{{ route('admin.perkebunan.edit', ['perkebunan' =>$perkebunan->id, 'nama' => $perkebunan->nama]) }}"
                                        class="btn btn-sm btn-warning btn-bordered waves-effect waves-light me-1 mb-1 rounded-2">
                                        <i class="fa fa-pencil"></i> <span class="d-none d-lg-inline-block">Ubah Data</span>
                                    </a>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-bordered waves-effect waves-light me-1 mb-1 rounded-2">
                                        <i class="fa fa-trash-o"></i> <span class="d-none d-lg-inline-block">Hapus Data</span>
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
        $(document).ready(function() {
            const table = $('table#perkebunans').DataTable({
                'scrollX': true,
                'columnDefs': [{
                        'target': '_all',
                        'className': 'dt-head-center'
                    },
                    {
                        'target': -1,
                        'orderable': false,
                        'searchable': false,
                        'width': 390,
                        'className': 'dt-center'
                    },
                    { 'target': [0], 'className': 'dt-center' },
                ],
            });

            $('button').on('click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
            });

            $('table').on('click', 'button.btn-danger', async function() {
                var tr = $(this).closest('tr');
                var row = table.row(tr);
                var id = tr.data('id');
                var nama = row.data()[1];
                if (await confirmation()) {
                    $.ajax({
                        'url': `{{ url('admin/perkebunan') }}/${id}/${nama}`,
                        'method': 'POST',
                        'data': {
                            '_token': '{{ csrf_token() }}',
                            '_method': 'DELETE',
                        }
                    }).then((req, res, xhr) => {
                        if (xhr.status === 204) {
                            swal('Berhasil menghapus data');
                            row.remove();
                            let i = 1;
                            table.cells(null, 0, {
                                search: 'applied',
                                order: 'applied'
                            }).every(function(cell) {
                                this.data(i++);
                            });
                            table.draw();
                        };
                    }).catch((error) => {
                        console.log(error);
                    });
                };
            });

            const confirmation = async () => {
                var result = await Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Anda tidak dapat mengembalikan aksi ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya!',
                    cancelButtonText: 'Tidak'
                });
                return result.isConfirmed;
            };
        });
    </script>
@endsection
