@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/select2-4.1.0-rc.0/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
    <style>
        table td {
            vertical-align: middle;
        }
    </style>
@endsection

@section('content-title', 'Pabrik')

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
            <div class="card-body rounded-1">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-info-umum-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-info-umum" type="button" role="tab">Info Umum</button>
                        <button class="nav-link" id="nav-lokasi-tab" data-bs-toggle="tab" data-bs-target="#nav-lokasi"
                            type="button" role="tab">Lokasi</button>
                        <button class="nav-link" id="nav-legalitas-tab" data-bs-toggle="tab" data-bs-target="#nav-legalitas"
                            type="button" role="tab">Legalitas</button>
                        <button class="nav-link" id="nav-produksi-tab" data-bs-toggle="tab" data-bs-target="#nav-produksi"
                            type="button" role="tab">Produksi</button>
                        <button class="nav-link" id="nav-supply-tab" data-bs-toggle="tab" data-bs-target="#nav-supply"
                            type="button" role="tab">Supply</button>
                        <button class="nav-link" id="nav-csr-tab" data-bs-toggle="tab" data-bs-target="#nav-csr"
                            type="button" role="tab">CSR</button>
                        <button class="nav-link" id="nav-sertifikasi-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-sertifikasi" type="button" role="tab">Sertifikasi</button>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-info-umum" role="tabpanel" tabindex="0">
                        @include('pabrik.admin.tabs.show.informasi-umum')
                    </div>
                    <div class="tab-pane fade" id="nav-lokasi" role="tabpanel" tabindex="0">
                        @include('pabrik.admin.tabs.show.lokasi')
                    </div>
                    <div class="tab-pane fade" id="nav-legalitas" role="tabpanel" aria-labelledby="nav-legalitas-tab"
                        tabindex="0">
                        @include('pabrik.admin.tabs.show.legalitas')
                    </div>
                    <div class="tab-pane fade" id="nav-produksi" role="tabpanel" aria-labelledby="nav-produksi-tab"
                        tabindex="0">
                        @include('pabrik.admin.tabs.show.produksi')
                    </div>
                    <div class="tab-pane fade" id="nav-supply" role="tabpanel" aria-labelledby="nav-supply-tab"
                        tabindex="0">
                        @include('pabrik.admin.tabs.show.supply')
                    </div>
                    <div class="tab-pane fade" id="nav-csr" role="tabpanel" aria-labelledby="nav-csr-tab" tabindex="0">
                        @include('pabrik.admin.tabs.show.csr')
                    </div>
                    <div class="tab-pane fade" id="nav-sertifikasi" role="tabpanel" aria-labelledby="nav-sertifikasi-tab"
                        tabindex="0">
                        @include('pabrik.admin.tabs.show.sertifikasi')
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="d-flex w-100 justify-content-between">
                    <a href="{{ route('admin.pabrik.index') }}"
                        class="btn btn-default btn-bordered w-md waves-light rounded-2">
                        <i class="fa fa-chevron-left"></i>
                        Kembali</a>
                </div>
            </div>
        </div>
    </div>

    @include('pabrik.admin.modals.lokasi')
    @include('pabrik.admin.modals.produksi')
    @include('pabrik.admin.modals.supplier')
    @include('pabrik.admin.modals.csr')

    <form action="" method="post" id="form-delete">
        @csrf
        @method('DELETE')
    </form>
@endsection

@section('js')
    <script src="{{ asset('assets/libs/select2-4.1.0-rc.0/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            var kecamatanVal;
            var desaVal;

            $('#modal-lokasi select').select2({
                dropdownParent: $('#modal-lokasi')
            });

            $('#modal-kontribusi select').select2({
                dropdownParent: $('#modal-kontribusi')
            });

            const lokasis = $('table#lokasis').DataTable({
                'scrollX': true,
                'columnDefs': [{
                        'target': [0],
                        'width': 30,
                        'className': 'dt-center'
                    },
                    {
                        'target': [-1],
                        'width': 100,
                        'className': 'dt-center',
                        'searchable': false,
                        'orderable': false
                    
                    },
                    {
                        'target': '_all',
                        'className': 'dt-head-center'
                    },
                ]
            });

            const produksis = $('table#produksis').DataTable({
                'scrollX': true,
                'columnDefs': [{
                        'target': [0],
                        'width': 30,
                        'className': 'dt-body-center'
                    },
                    {
                        'target': [1, -1],
                        'width': 150,
                        'className': 'dt-body-center'
                    },
                    {
                        'target': '_all',
                        'className': 'dt-head-center'
                    },
                    {
                        'target': [3],
                        'className': 'dt-body-center'
                    },
                    { 
                        'target': [-1],
                        'searchable': false,
                        'orderable': false
                    }
                ]
            });

            const suppliers = $('table#suppliers').DataTable({
                'scrollX': true,
                'columnDefs': [{
                        'target': [0],
                        'width': 30,
                        'className': 'dt-body-center'
                    },
                    {
                        'target': [-1],
                        'width': 150,
                        'className': 'dt-body-center',
                        'searchable': false,
                        'orderable': false
                    },
                    {
                        'target': '_all',
                        'className': 'dt-head-center'
                    },
                    {
                        'target': [2, 3],
                        'className': 'dt-body-center'
                    },
                ]
            });

            const realisasis = $('table#realisasis').DataTable({
                'scrollX': true,
                'serverSide': true,
                'processing': true,
                'ajax': `{{ route('api.pabrik.kontribusi.index', ['pabrik' => $pabrik->id, 'nama' => $pabrik->nama, 'pelaksanaan' => 'realisasi']) }}`,
                'columns': [{
                        'data': 'DT_RowIndex',
                        'name': 'DT_RowIndex',
                        'searchable': false,
                        'orderable': false
                    },
                    {
                        'data': 'tahun',
                        'name': 'tahun'
                    },
                    {
                        'data': 'jenis_kegiatan',
                        'name': 'jenis_kegiatan'
                    },
                    {
                        'data': 'nilai_setara',
                        'name': 'nilai_setara',
                        'render': function(data) {
                            return numberFormat(data);
                        }
                    },
                    {
                        'data': 'lokasi',
                        'name': 'lokasi',
                        'searchable': false,
                        'orderable': true
                    },
                    {
                        'data': 'id',
                        'name': 'id',
                        'searchable': false,
                        'orderable': false,
                        'render': function(data) {
                            return `
                                <button class='btn btn-warning btn-bordered rounded-2' data-id='${data}'>
                                    <i class='fa fa-edit'></i>
                                </button>
                            `;
                        }
                    },
                ],
                'columnDefs': [{
                        'target': [0],
                        'width': 30,
                        'className': 'dt-body-center'
                    },
                    {
                        'target': [1, -1],
                        'width': 100,
                        'className': 'dt-body-center'
                    },
                    {
                        'target': '_all',
                        'className': 'dt-head-center'
                    },
                    {
                        'target': [3],
                        'className': 'dt-body-center',
                    },
                ]
            });

            const rencanas = $('table#rencanas').DataTable({
                'scrollX': true,
                'serverSide': true,
                'processing': true,
                'ajax': `{{ route('api.pabrik.kontribusi.index', ['pabrik' => $pabrik->id, 'nama' => $pabrik->nama, 'pelaksanaan' => 'rencana']) }}`,
                'columns': [{
                        'data': 'DT_RowIndex',
                        'name': 'DT_RowIndex',
                        'searchable': false,
                        'orderable': false
                    },
                    {
                        'data': 'tahun',
                        'name': 'tahun'
                    },
                    {
                        'data': 'jenis_kegiatan',
                        'name': 'jenis_kegiatan'
                    },
                    {
                        'data': 'nilai_setara',
                        'name': 'nilai_setara',
                        'render': function(data) {
                            return numberFormat(data);
                        }
                    },
                    {
                        'data': 'lokasi',
                        'name': 'lokasi',
                        'searchable': false,
                        'orderable': true
                    },
                    {
                        'data': 'id',
                        'name': 'id',
                        'searchable': false,
                        'orderable': false,
                        'render': function(data) {
                            return `
                                <button class='btn btn-warning btn-bordered rounded-2' data-id='${data}'>
                                    <i class='fa fa-edit'></i>
                                </button>
                            `;
                        }
                    },
                ],
                'columnDefs': [{
                        'target': [0],
                        'width': 30,
                        'className': 'dt-body-center'
                    },
                    {
                        'target': [1, -1],
                        'width': 100,
                        'className': 'dt-body-center'
                    },
                    {
                        'target': '_all',
                        'className': 'dt-head-center'
                    },
                    {
                        'target': [3],
                        'className': 'dt-body-center',
                    },
                ]
            });

            $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
            });

            $('#accordion-csr').on('shown.bs.collapse', function() {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

            $('#nav-lokasi').on('click', 'button.btn-success', function() {
                kecamatanVal = undefined;
                desaVal = undefined;
                $('#modal-lokasi .modal-title').text('Tambah Data Lokasi');
                $('#modal-lokasi').modal('show');
                $('#form-lokasi').trigger('reset');
                $('#form-lokasi select#kabupaten').val(undefined).trigger('change');
                $('#form-lokasi select#kecamatan').empty();
                $('#form-lokasi select#kecamatan').append('<option value="">Pilih Kecamatan</option>');
                $('#form-lokasi select#desa').empty();
                $('#form-lokasi select#desa').append('<option value="">Pilih Desa</option>');
                $('#form-lokasi input[name=_method]').val('POST');
                $('#form-lokasi').attr('action',
                    `{{ route('admin.pabrik.lokasi.store', ['pabrik' => $pabrik->id, 'nama' => $pabrik->nama]) }}`
                );
            });

            $('table#lokasis').on('click', 'button.btn-warning', function() {
                $('#modal-lokasi .modal-title').text('Ubah Data Lokasi');
                $('#modal-lokasi').modal('show');
                var tr = $(this).closest('tr');
                var id = tr.data('id');
                var row = lokasis.row(tr);
                var kabupaten = row.data()[1];
                kecamatanVal = row.data()[2];
                desaVal = row.data()[3];
                $('#form-lokasi input[name=_method]').val('PATCH');
                $('#form-lokasi select#kabupaten option').filter(function() {
                    return $(this).text().trim() == kabupaten;
                }).prop('selected', true).trigger('change');
                $('#form-lokasi').attr('action',
                    `{{ url('admin/pabrik/') }}/{{ $pabrik->id }}/{{ $pabrik->nama }}/lokasi/${id}`);

            });

            $('table#lokasis').on('click', 'button.btn-danger', async function() {
                if (await confirmation()) {
                    var tr = $(this).closest('tr');
                    var id = tr.data('id');
                    var row = lokasis.row(tr);
                    var action = row.data().action;
                    $('#form-delete').attr('action',
                        `{{ url('admin/pabrik/') }}/{{ $pabrik->id }}/{{ $pabrik->nama }}/lokasi/${id}`
                    );
                    $('#form-delete').submit();
                };

            });

            $('#modal-lokasi').on('change', 'select#kabupaten', async function() {
                var id = $(this).find(':selected').val();
                if (!id) {
                    return;
                }
                $('#modal-lokasi select#kecamatan').empty();
                $('#modal-lokasi select#kecamatan').append(`<option value=''>Pilih Kecamatan</option>`);
                fetch(`{{ route('api.kecamatan.index', '') }}/${id}`)
                    .then(response => response.json())
                    .then(kecamatans => {
                        kecamatans.data.map(kecamatan => {
                            $('#modal-lokasi select#kecamatan').append(
                                `<option value='${kecamatan.id}' ${kecamatan.name == kecamatanVal ? 'selected' : ''}>${kecamatan.name}</option>`
                            )
                            if (kecamatan.name == kecamatanVal) {
                                $('#modal-lokasi select#kecamatan').trigger('change');
                            }
                        });
                    }).catch(() => {
                        ///Exception occured do something
                    })

            });

            $('#modal-lokasi').on('change', 'select#kecamatan', async function() {
                var id = $(this).find(':selected').val();
                if (!id) {
                    return;
                }
                $('#modal-lokasi select#desa').empty();
                $('#modal-lokasi select#desa').append(`<option value=''>Pilih Desa</option>`);
                fetch(`{{ route('api.desa.index', '') }}/${id}`)
                    .then(response => response.json())
                    .then(desas => {
                        desas.data.map(desa => {
                            $('#modal-lokasi select#desa').append(
                                `<option value='${desa.id}' ${desa.name == desaVal ? 'selected' : ''}>${desa.name}</option>`
                            );
                            if (desa.name == desaVal) {
                                $('#modal-lokasi select#desa').trigger('change');
                            }
                        })
                    }).catch(() => {
                        ///Exception occured do something
                    })

            });

            $('#nav-produksi').on('click', 'button.btn-success', function() {
                $('#modal-produksi .modal-title').text('Tambah Data Produksi');
                $('#modal-produksi').modal('show');
                $('#form-produksi input[name=_method]').val('POST');
                $('#form-produksi').trigger('reset');
                $('#form-produksi').attr('action',
                    `{{ route('admin.pabrik.produksi.store', ['pabrik' => $pabrik->id, 'nama' => $pabrik->nama]) }}`
                );
            });

            $('table#produksis').on('click', 'button.btn-warning', function() {
                $('#modal-produksi .modal-title').text('Ubah Data Produksi');
                $('#modal-produksi').modal('show');
                var tr = $(this).closest('tr');
                var id = tr.data('id');
                var row = produksis.row(tr);
                var tahun_produksi = row.data()[1];
                var hasil_pabrik = row.data()[2];
                var jumlah_produksi = row.data()[3];
                $('#form-produksi input[name=_method]').val('PATCH');
                $('#form-produksi input[name=tahun_produksi]').val(tahun_produksi);
                $('#form-produksi input[name=hasil_pabrik]').val(hasil_pabrik);
                $('#form-produksi input[name=jumlah_produksi]').val(jumlah_produksi);
                $('#form-produksi').attr('action',
                    `{{ url('admin/pabrik/') }}/{{ $pabrik->id }}/{{ $pabrik->nama }}/produksi/${id}`
                );

            });

            $('table#produksis').on('click', 'button.btn-danger', async function() {
                if (await confirmation()) {
                    var tr = $(this).closest('tr');
                    var id = tr.data('id');
                    var row = produksis.row(tr);
                    var action = row.data().action;
                    $('#form-delete').attr('action',
                        `{{ url('admin/pabrik/') }}/{{ $pabrik->id }}/{{ $pabrik->nama }}/produksi/${id}`
                    );
                    $('#form-delete').submit();
                };

            });

            $('#nav-supply').on('click', 'button.btn-success', function() {
                $('#modal-supplier .modal-title').text('Tambah Data Supplier');
                $('#modal-supplier').modal('show');
                $('#form-supplier').trigger('reset');
                $('#form-supplier input[name=_method]').val('POST');
                $('#form-supplier').attr('action',
                    `{{ route('admin.pabrik.supplier.store', ['pabrik' => $pabrik->id, 'nama' => $pabrik->nama]) }}`
                );
            });

            $('table#suppliers').on('click', 'button.btn-warning', function() {
                $('#modal-supplier .modal-title').text('Ubah Data Supplier');
                $('#modal-supplier').modal('show');
                var tr = $(this).closest('tr');
                var id = tr.data('id');
                var row = suppliers.row(tr);
                var nama_perkebunan = row.data()[1];
                var jumlah_supply = row.data()[2];
                var jangka_waktu = row.data()[3];
                $('#form-supplier input[name=_method]').val('PATCH');
                $('#form-supplier input[name=nama_perkebunan]').val(nama_perkebunan);
                $('#form-supplier input[name=jumlah_supply]').val(jumlah_supply);
                $('#form-supplier input[name=jangka_waktu]').val(jangka_waktu);
                $('#form-supplier').attr('action',
                    `{{ url('admin/pabrik/') }}/{{ $pabrik->id }}/{{ $pabrik->nama }}/supplier/${id}`
                );

            });

            $('table#suppliers').on('click', 'button.btn-danger', async function() {
                if (await confirmation()) {
                    var tr = $(this).closest('tr');
                    var id = tr.data('id');
                    var row = suppliers.row(tr);
                    $('#form-delete').attr('action',
                        `{{ url('admin/pabrik/') }}/{{ $pabrik->id }}/{{ $pabrik->nama }}/supplier/${id}`
                    );
                    $('#form-delete').submit();
                };

            });

            $('#nav-csr').on('click', 'button.btn-success', function() {
                $('#modal-kontribusi .modal-title').text('Tambah Data Kontribusi');
                $('#modal-kontribusi').modal('show');
                $('#form-kontribusi').trigger('reset');
                $('#form-kontribusi select#kabupaten-kontribusi').val(undefined).trigger('change');
                $('#form-kontribusi select#kecamatan-kontribusi').empty();
                $('#form-kontribusi select#kecamatan-kontribusi').append(
                    '<option value="">Pilih Kecamatan</option>');
                $('#form-kontribusi select#desa-kontribusi').empty();
                $('#form-kontribusi select#desa-kontribusi').append('<option value="">Pilih Desa</option>');
                $('#form-kontribusi input[name=_method]').val('POST');
                $('#form-kontribusi').attr('action',
                    `{{ route('admin.pabrik.kontribusi.store', ['pabrik' => $pabrik->id, 'nama' => $pabrik->nama]) }}`
                );
            });

            $('table#rencanas, table#realisasis').on('click', 'button.btn-warning', function() {
                $('#modal-kontribusi .modal-title').text('Ubah Data Kontribusi');
                $('#modal-kontribusi').modal('show');
                var tr = $(this).closest('tr');
                var id = $(this).data('id');
                if ($(this).closest('table').attr('id') === 'rencanas') {
                    var row = rencanas.row(tr);
                    $('#form-kontribusi input[name=pelaksanaan][value="rencana"]').prop('checked', true);
                } else {
                    var row = realisasis.row(tr);
                    $('#form-kontribusi input[name=pelaksanaan][value="realisasi"]').prop('checked', true);
                }
                var tahun = row.data()['tahun'];
                var jenis_kegiatan = row.data()['jenis_kegiatan'];
                var tanggal = row.data()['tanggal'];
                var nilai_setara = row.data()['nilai_setara'];
                kecamatanVal = row.data()['lokasi'].split(', ')[1];
                desaVal = row.data()['lokasi'].split(', ')[0];
                $('#form-kontribusi input[name=_method]').val('PATCH');
                $('#form-kontribusi input[name=tahun]').val(tahun);
                $('#form-kontribusi input[name=jenis_kegiatan]').val(jenis_kegiatan);
                $('#form-kontribusi input[name=tanggal]').val(tanggal);
                $('#form-kontribusi input[name=nilai_setara]').val(nilai_setara);
                $('#form-kontribusi select#kabupaten-kontribusi option').filter(function() {
                    return $(this).text().trim() == "Sanggau";
                }).prop('selected', true).trigger('change');
                $('#form-kontribusi').attr('action',
                    `{{ url('admin/pabrik/') }}/{{ $pabrik->id }}/{{ $pabrik->nama }}/kontribusi/${id}`
                );

            });

            $('table#rencanas, table#realisasis').on('click', 'button.btn-danger', async function() {
                if (await confirmation()) {
                    var id = $(this).data('id');
                    $('#form-delete').attr('action',
                        `{{ url('admin/pabrik/') }}/{{ $pabrik->id }}/{{ $pabrik->nama }}/kontribusi/${id}`
                    );
                    $('#form-delete').submit();
                };
            });

            $('#modal-kontribusi').on('change', 'select#kabupaten-kontribusi', async function() {
                var id = $(this).find(':selected').val();
                if (!id) return;
                $('#modal-kontribusi select#kecamatan-kontribusi').empty();
                $('#modal-kontribusi select#kecamatan-kontribusi').append(
                    `<option value=''>Pilih Kecamatan</option>`);
                fetch(`{{ route('api.kecamatan.index', '') }}/${id}`)
                    .then(response => response.json())
                    .then(kecamatans => {
                        kecamatans.data.map(kecamatan => {
                            $('#modal-kontribusi select#kecamatan-kontribusi').append(
                                `<option value='${kecamatan.id}' ${kecamatan.name == kecamatanVal ? 'selected' : ''}>${kecamatan.name}</option>`
                            );
                            if (kecamatan.name == kecamatanVal) {
                                $('#modal-kontribusi select#kecamatan-kontribusi').trigger(
                                    'change');
                            }
                        })
                    }).catch(() => {
                        ///Exception occured do something
                    })

            });

            $('#modal-kontribusi').on('change', 'select#kecamatan-kontribusi', async function() {
                var id = $(this).find(':selected').val();
                if (!id) return;
                $('#modal-kontribusi select#desa-kontribusi').empty();
                $('#modal-kontribusi select#desa-kontribusi').append(
                    `<option value=''>Pilih Desa</option>`);
                fetch(`{{ route('api.desa.index', '') }}/${id}`)
                    .then(response => response.json())
                    .then(desas => {
                        desas.data.map(desa => {
                            $('#modal-kontribusi select#desa-kontribusi').append(
                                `<option value='${desa.id}' ${desa.name == desaVal ? 'selected' : ''}>${desa.name}</option>`
                            );
                            if (desa.name == desaVal) {
                                $('#modal-kontribusi select#desa-kontribusi').trigger(
                                    'change');
                            }
                        })
                    }).catch(() => {
                        ///Exception occured do something
                    })

            });

            function numberFormat(nStr) {
                nStr += '';
                x = nStr.split(',');
                x1 = x[0];
                x2 = x.length > 1 ? ',' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + '.' + '$2');
                }
                return x1 + x2;
            }
        });
    </script>
@endsection
