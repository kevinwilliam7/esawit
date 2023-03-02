@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
@endsection

@section('content-title', 'SOP Perizinan')

@section('content')
    <div class="container">
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
                                    <a href="{{ asset('storage/' . $sop->file) }}" download>Download</a>
                                </td>
                                <td>{{ $sop->keterangan }}</td>
                                <td>
                                    <a href="{{ route('admin.sop.update', ['sop' => $sop->id, 'jenis' => $sop->jenis_izin]) }}"
                                        class="btn btn-warning rounded-2"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('admin.sop.destroy', ['sop' => $sop->id, 'jenis' => $sop->jenis_izin]) }}"
                                        class="btn btn-danger rounded-2"><i class="fa fa-trash"></i></a>
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
            const sops = $('table#sops').DataTable();

            $('button.btn-success').on('click', function() {
                $('.modal-title').text('Tambah Data SOP Perizinan');
                $('[name=_method]').val('POST');
                $('form').attr('action', `{{ route('admin.sop.store') }}`);
                $('.modal').modal('show');
            });

            $('table#sops').on('click', 'a.btn-warning', function(e) {
                e.preventDefault();
                $('.modal-title').text('Ubah Data SOP Perizinan');
                $('[name=_method]').val('PATCH');
                $('form').attr('action', $(this).attr('href'));
                $('.modal').modal('show');
            });

            $('table#sops').on('click', 'a.btn-danger', async function(e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                var response = await $.ajax({
                    'url': $(this).attr('href'),
                    'method': 'DELETE',
                });
            });
        });
    </script>
@endsection
