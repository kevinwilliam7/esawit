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
                </div>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.pabrik.create') }}"
                    class="btn btn-sm btn-success btn-bordered waves-effect w-md waves-light mb-3 rounded-2">
                    <i class="fa fa-plus"></i> Tambah Data
                </a>
                <table id="pabriks" class="table table-bordered table-striped w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pabrik</th>
                            <th>NPWP</th>
                            <th>Grup Perusahaan</th>
                            <th>Kapasitas Produksi (Ton TBS / Jam)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
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
            const table = $('table#pabriks').DataTable({
                'scrollX': true,
                'processing': true,
                'serverSide': true,
                'ajax': '{{ route("admin.pabrik.index") }}',
                'columns': [
                  { 'data': 'DT_RowIndex', 'name': 'DT_RowIndex', 'orderable': false, 'searchable': false },
                  { 'data': 'nama', 'name': 'nama' },
                  { 'data': 'npwp', 'name': 'npwp' },
                  { 'data': 'nama_grup', 'name': 'nama_grup' },
                  { 'data': 'kapasitas_produksi', 'name': 'kapasitas_produksi' },
                  { 
                    'data': 'nama', 
                    'name': 'nama', 
                    'render': function(data) {
                      return `
                        <a href="{{ route('admin.pabrik.index') }}/${data}" 
                          class="btn btn-sm btn-primary btn-bordered waves-effect waves-light me-1 mb-1 rounded-2">
                          <i class="fa fa-eye"></i> Lihat
                        </a>
                        <a href="{{ route('admin.pabrik.index') }}/${data}/edit"
                          class="btn btn-sm btn-warning btn-bordered waves-effect waves-light me-1 mb-1 rounded-2">
                          <i class="fa fa-pencil"></i> Ubah Data
                        </a>
                        <button type="button"
                          class="btn btn-sm btn-danger btn-bordered waves-effect waves-light me-1 mb-1 rounded-2">
                          <i class="fa fa-trash-o"></i> Hapus Data
                        </button>
                      `;
                    }
                  },
                ],
                'columnDefs': [{
                        'target': '_all',
                        'className': 'dt-head-center',
                        'defaultContent': ''
                    },
                    {
                        'target': -1,
                        'orderable': false,
                        'searchable': false,
                        'width': 520
                    },
                    { 'target': [0], 'className': 'dt-center' },
                ],
            });

            $('table').on('click', 'button.btn-danger', async function() {
                var tr = $(this).closest('tr');
                var row = table.row(tr);
                var nama = row.data().nama;
                if (await confirmation()) {
                    $.ajax({
                        'url': `{{ url('admin/pabrik') }}/${nama}`,
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
                            table.ajax.reload();
                        };
                    }).catch((error) => {
                        // console.log(error);
                        swal('Gagal menghapus data', 'error');
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
