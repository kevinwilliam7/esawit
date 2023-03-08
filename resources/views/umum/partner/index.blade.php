@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/RowReorder-1.3.2/css/rowReorder.dataTables.min.css') }}"> --}}
@endsection

@section('content-title', 'Partner')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <button class="btn btn-success btn-bordered rounded-2 me-2">
                        <i class="fa fa-plus me-1"></i> Tambah Data
                    </button>
                    {{-- <button class="btn btn-primary btn-bordered rounded-2">
                        <i class="fa fa-save me-1"></i> Simpan Urutan
                    </button> --}}
                </div>
                <table class="table table-striped w-100" id="partners">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Image</th>
                            <th>Link</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partners as $partner)
                            <tr data-id="{{ $partner->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $partner->name }}</td>
                                <td>
                                    <img src="{{ asset('storage/'.$partner->image) }}" alt="{{ $partner->name }}"
                                        style="max-width: 200px; max-height: 100px">
                                </td>
                                <td>
                                    <a href="{{ $partner->link }}">{{ $partner->link }}</a>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-bordered rounded-2">
                                        <i class="fa fa-edit me-1"></i> Ubah
                                    </button>
                                    <button class="btn btn-danger btn-bordered rounded-2">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Data Partner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.partner.store') }}" method="post" id="form-partner"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Link</label>
                            <input type="text" name="link" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Link</label>
                            <input type="file" name="image" accept="image/*" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" form="form-partner">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.partner.destroy', ['partner' => $partner->id]) }}" class="d-none" method="POST">
        @csrf
        @method('DELETE')
    </form>
@endsection

@section('js')
    <script src="{{ asset('assets/libs/DataTables/datatables.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/libs/DataTables/RowReorder-1.3.2/js/dataTables.rowReorder.min.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            const table = $('table#partners').DataTable({
                'scrollX': true,
                // 'rowReorder': true,
            });

            $('.container .btn-success').on('click', function() {
                $('#form-partner').trigger('reset');
                $('#form-partner input[name=_method]').val('POST');
                $('#form-partner').attr('action', `{{ route('admin.partner.store') }}`);
                $('.modal').modal('show');
            });

            $('table#partners').on('click', '.btn-warning', function() {
                var tr = $(this).closest('tr');
                var row = table.row(tr);

                var id = tr.data('id');
                var name = row.data()[1];
                var link = $(row.data()[3]).text();

                $('#form-partner').trigger('reset');
                $('#form-partner input[name=_method]').val('PATCH');
                $('#form-partner input[name=name]').val(name);
                $('#form-partner input[name=link]').val(link);
                $('#form-partner').attr('action', `{{ route('admin.partner.index') }}/${id}`);
                $('.modal').modal('show');
            });

            $('table#partners').on('click', '.btn-danger', async function() {
                if (await confirmation()) {
                    $('form.d-none').submit();
                }
            });

            table.on('row-reorder', function(e, diff, edit) {
                console.log(e, diff, edit);
            });
        });
    </script>
@endsection
