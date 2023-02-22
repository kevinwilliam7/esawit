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
                <a href="{{ route('perkebunan.create') }}"
                    class="btn btn-sm btn-success btn-bordered waves-effect w-md waves-light mb-3 rounded-2">
                    <i class="fa fa-plus"></i> Tambah Data
                </a>
                <table id="perkebunans" class="table table-bordered table-striped">
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
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $perkebunan->nama }}</td>
                                <td>{{ $perkebunan->npwp }}</td>
                                <td>{{ $perkebunan->alamat }}</td>
                                <td>{{ $perkebunan->pola_kemitraan }}</td>
                                <td>
                                    <a href="#"
                                        class="btn btn-sm btn-primary btn-bordered waves-effect waves-light me-1 mb-1 rounded-2">
                                        <i class="fa fa-eye"></i> Lihat Data
                                    </a>
                                    <a href="#"
                                        class="btn btn-sm btn-warning btn-bordered waves-effect waves-light me-1 mb-1 rounded-2">
                                        <i class="fa fa-pencil"></i> Ubah Data
                                    </a>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-bordered waves-effect waves-light me-1 mb-1 rounded-2">
                                        <i class="fa fa-trash-o"></i> Hapus Data
                                    </button>
                                    <div class="btn-group">
                                        <button type="button"
                                            class="btn btn-sm btn-success dropdown-toggle btn-bordered waves-effect waves-light me-1 mb-1 rounded-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-map-marker"></i> Lokasi <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item p-0 w-100">
                                                <a href="#" class="text-decoration-none text-black w-100 d-block">
                                                    <i class="fa fa-tree"></i> Lokasi Kebun
                                                </a>
                                            </li>
                                            <li class="dropdown-item p-0 w-100">
                                                <a href="#" class="text-decoration-none text-black w-100 d-block">
                                                    <i class="fa fa-industry"></i> Lokasi Pabrik
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button"
                                            class="btn btn-sm btn-secondary dropdown-toggle btn-bordered waves-effect waves-light text-black-50 me-1 mb-1 rounded-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-file"></i> Legalitas <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item p-0 w-100">
                                                <a href="#" class="text-decoration-none text-black w-100 d-block">
                                                    <i class="fa fa-building-o"></i> HGU
                                                </a>
                                            </li>
                                            <li class="dropdown-item p-0 w-100">
                                                <a href="#" class="text-decoration-none text-black w-100">
                                                    <i class="fa fa-location-arrow"></i> Izin Lokasi
                                                </a>
                                            </li>
                                            <li class="dropdown-item p-0 w-100">
                                                <a href="#" class="text-decoration-none text-black w-100 d-block">
                                                    <i class="fa fa-gavel"></i> IUP
                                                </a>
                                            </li>
                                            <li class="dropdown-item p-0 w-100">
                                                <a href="#" class="text-decoration-none text-black w-100 d-block">
                                                    <i class="fa fa-leaf"></i> IBLH
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button"
                                            class="btn btn-sm btn-dark dropdown-toggle btn-bordered waves-effect waves-light text-black me-1 mb-1 rounded-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-map-pin"></i> Penanaman <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item p-0 w-100">
                                                <a href="#" class="text-decoration-none text-black w-100 d-block">
                                                    <i class="fa fa-square-o"></i> Perolehan Lahan
                                                </a>
                                            </li>
                                            <li class="dropdown-item p-0 w-100">
                                                <a href="#" class="text-decoration-none text-black w-100 d-block">
                                                    <i class="fa fa-pagelines"></i> Penanaman
                                                </a>
                                            </li>
                                            <li class="dropdown-item p-0 w-100">
                                                <a href="#" class="text-decoration-none text-black w-100 d-block">
                                                    <i class="fa fa-industry"></i> Produksi TBS
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button"
                                            class="btn btn-sm btn-warning dropdown-toggle btn-bordered waves-effect waves-light me-1 mb-1 rounded-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            {{-- <i class="fa fa-handshake-o"></i> TBS  --}}
                                            <i class="fa fa-handshake-o"></i> Produksi & Pengolahan
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item p-0 w-100">
                                                <a href="#" class="text-decoration-none text-black w-100 d-block">
                                                    <i class="fa fa-industry"></i> Produksi TBS
                                                </a>
                                            </li>
                                            <li class="dropdown-item p-0 w-100">
                                                <a href="#" class="text-decoration-none text-black w-100 d-block">
                                                    <i class="fa fa-product-hunt"></i> Pengolahan TBS
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button"
                                            class="btn btn-sm btn-default dropdown-toggle btn-bordered waves-effect waves-light me-1 mb-1 rounded-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-handshake-o"></i> Kemitraan <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item p-0 w-100">
                                                <a href="#" class="text-decoration-none text-black w-100 d-block">
                                                    <i class="fa fa-users"></i> Penetapan Petani
                                                </a>
                                            </li>
                                            <li class="dropdown-item p-0 w-100">
                                                <a href="#" class="text-decoration-none text-black w-100 d-block">
                                                    <i class="fa fa-shopping-basket"></i> Koperasi Mitra
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#"
                                        class="btn btn-sm btn-info btn-bordered waves-effect waves-light me-1 rounded-2">
                                        <i class="fa fa-leaf"></i> CSR</a>
                                    <a href="#"
                                        class="btn btn-sm btn-purple btn-bordered waves-effect waves-light rounded-2">
                                        <i class="fa fa-star"></i> Sertifikat</a>
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
                        'width': 500
                    },
                ],
            });

            $('table').on('click', 'button.btn-danger', async function() {
                var tr = $(this).closest('tr');
                var row = table.row(tr);
                var nama = row.data()[1];
                if (await confirmation()) {
                    $.ajax({
                        'url': `{{ url('perkebunan') }}/${nama}`,
                        'method': 'POST',
                        'data': {
                            '_token': '{{ csrf_token() }}',
                            '_method': 'DELETE',
                        }
                    }).then((req, res, xhr) => {
                        if (xhr.status === 204) {
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
