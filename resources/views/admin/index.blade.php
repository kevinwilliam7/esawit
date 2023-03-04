@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
    <style>
        table td {
            vertical-align: middle;
        }
    </style>
@endsection

@section('content-title', 'Admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card_header"></div>
            <div class="card-body">
                <button class="btn btn-success btn-bordered mb-3 rounded-2">
                    <i class="fa fa-plus me-1"></i>
                    Tambah Data Admin
                </button>
                <table id="tableAdmin" class="table table-striped w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td>{{ $admin->name  }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group mr-2" role="group" aria-label="Third group">
                                            <form action="/admin/admin/destroy/{{ $admin->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="rounded-2 btn btn-outline-danger delete_confirm"><i class="fa fa-trash-o"></i> Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.modal')
@endsection

@section('js')
    <script src="{{ asset('assets/libs/DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#tableAdmin').DataTable({  
            });
        });

        $('button.btn-success').on('click', function() {
            $('.modal-title').text('Tambah Data Admin');
            $('form').trigger('reset');
            $('[name=_method]').val('POST');
            $('form').attr('action', `{{ route('admin.admin.store') }}`);
            $('.modal-create').modal('show');
        });

        $('.delete_confirm').click(async function(event) {
          var form =  $(this).closest("form");
          event.preventDefault();
          if(!await confirmation()) return false;
          return form.submit();
      })
    </script>
@endsection
