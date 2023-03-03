@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
@endsection

@section('content-title', 'Data Perusahaan Perkebunan')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Data Perkebunan</div>
            </div>
            <div class="card-body">
                <nav class="">
                    <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-informasi-umum-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-informasi-umum" type="button" role="tab">Umum</button>
                        <button class="nav-link" id="nav-legalitas-tab" data-bs-toggle="tab" data-bs-target="#nav-legalitas"
                            type="button" role="tab">Legalitas
                        </button>
                        <button class="nav-link" id="nav-penanaman-tab" data-bs-toggle="tab" data-bs-target="#nav-penanaman"
                            type="button" role="tab">Penanaman</button>
                        <button class="nav-link" id="nav-produksi-tab" data-bs-toggle="tab" data-bs-target="#nav-produksi"
                            type="button" role="tab">
                            Produksi & Pengolahan
                        </button>
                        <button class="nav-link" id="nav-ketenagakerjaan-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-ketenagakerjaan" type="button" role="tab">Ketenagakerjaan</button>
                        <button class="nav-link" id="nav-kemitraan-tab" data-bs-toggle="tab" data-bs-target="#nav-kemitraan"
                            type="button" role="tab">Kemitraan</button>
                        <button class="nav-link" id="nav-csr-tab" data-bs-toggle="tab" data-bs-target="#nav-csr"
                            type="button" role="tab">CSR</button>
                        <button class="nav-link" id="nav-sertifikat-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-sertifikat" type="button" role="tab">Sertifikat</button>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-informasi-umum" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.informasi-umum')
                    </div>
                    <div class="tab-pane fade" id="nav-legalitas" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.legalitas')
                    </div>
                    <div class="tab-pane fade" id="nav-penanaman" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.penanaman')
                    </div>
                    <div class="tab-pane fade" id="nav-produksi" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.produksi')
                    </div>
                    <div class="tab-pane fade" id="nav-ketenagakerjaan" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.ketenagakerjaan')
                    </div>
                    <div class="tab-pane fade" id="nav-kemitraan" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.kemitraan')
                    </div>
                    <div class="tab-pane fade" id="nav-csr" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.csr')
                    </div>
                    <div class="tab-pane fade" id="nav-sertifikat" role="tabpanel" tabindex="0">
                        @include('perkebunan.admin.tabs.show.sertifikat')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('perkebunan.admin.modals.kontribusi')
    @include('perkebunan.admin.modals.koperasi')
    @include('perkebunan.admin.modals.legalitas.hgu')
    @include('perkebunan.admin.modals.legalitas.iblh')
    @include('perkebunan.admin.modals.legalitas.iup')
    @include('perkebunan.admin.modals.legalitas.izin-lokasi')
    @include('perkebunan.admin.modals.lokasi')
    @include('perkebunan.admin.modals.penanaman')
    @include('perkebunan.admin.modals.pengolahan')
    @include('perkebunan.admin.modals.petani')
    @include('perkebunan.admin.modals.produksi')
    @include('perkebunan.admin.modals.sertifikat')
@endsection

@section('js')
    <script src="{{ asset('assets/libs/DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            var kecamatanDefaultValue, desaDefaultValue = undefined;

            $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
            });

            $('.accordion').on('shown.bs.collapse', function() {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

            const lokasiOpt = {
                'scrollX': true,
                'dom': 'Btrip',
                'columnDefs': [{
                    'target': [0],
                    'width': 30,
                    'className': 'dt-center'
                }]
            }
            const lokasiKebun = $('table#lokasi-kebun').DataTable(lokasiOpt);
            const lokasiPabrik = $('table#lokasi-pabrik').DataTable(lokasiOpt);

            $('#lokasi-kebun button.btn-success, #lokasi-pabrik button.btn-success').on('click', function() {
                var jenis = $($(this).closest('div.lokasi')).attr('id');
                kecamatanDefaultValue = undefined;
                desaDefaultValue = undefined;
                $('#form-lokasi').trigger('reset');
                $('#modal-lokasi .modal-title').text('Tambah Data Lokasi Kebun');
                resetSelectLokasi($('#modal-lokasi'));
                $('#form-lokasi select#kabupaten').val(undefined).trigger('change');
                $('#form-lokasi input[name=_method]').val('POST');
                $('#form-lokasi').attr('action',
                    `{{ route('admin.perkebunan.lokasi.kebun.store', ['perkebunan' => $perkebunan->id, 'nama' => $perkebunan->nama]) }}`
                );

                if (jenis === 'lokasi-pabrik') {
                    $('#modal-lokasi .modal-title').text('Tambah Data Lokasi Pabrik');
                    $('#form-lokasi').attr('action',
                        `{{ route('admin.perkebunan.lokasi.pabrik.store', ['perkebunan' => $perkebunan->id, 'nama' => $perkebunan->nama]) }}`
                    );
                }

                $('#modal-lokasi').modal('show');
            });

            $('table#lokasi-kebun, table#lokasi-pabrik').on('click', 'button.btn-warning', function() {
                var jenis = $($(this).closest('table')).attr('id');
                var tr = $(this).closest('tr');
                if (jenis === 'lokasi-pabrik') {
                    var row = lokasiPabrik.row(tr);
                } else {
                    var row = lokasiKebun.row(tr);
                }
                var kabupaten = row.data()[3]
                var id = tr.data('id')
                kecamatanDefaultValue = row.data()[2];
                desaDefaultValue = row.data()[1];
                resetSelectLokasi($('#modal-lokasi'));
                $('#modal-lokasi .modal-title').text('Ubah Data Lokasi Kebun');
                $(`#form-lokasi select#kabupaten option:contains(${kabupaten})`).prop('selected', true);
                $(`#form-lokasi select#kabupaten`).trigger('change');
                $('#form-lokasi input[name=_method]').val('PATCH');
                $('#form-lokasi').attr('action',
                    `{{ route('admin.perkebunan.lokasi.kebun.update', ['perkebunan' => $perkebunan->id, 'nama' => $perkebunan->nama, 'id' => '0']) }}${id}`
                );

                if (jenis === 'lokasi-pabrik') {
                    $('#modal-lokasi .modal-title').text('Ubah Data Lokasi Pabrik');
                    $('#form-lokasi').attr('action',
                        `{{ route('admin.perkebunan.lokasi.pabrik.update', ['perkebunan' => $perkebunan->id, 'nama' => $perkebunan->nama, 'id' => '0']) }}${id}`
                    );
                }
                $('#modal-lokasi').modal('show');
            });

            $(document).on('change', 'select#kabupaten', async function() {
                var id = $(this).find(':selected').val();
                var modal = $(this).closest('.modal');
                if (!id) {
                    return;
                }
                $(modal).find('select#kecamatan').empty();
                $(modal).find('select#kecamatan').append(`<option value=''>Pilih Kecamatan</option>`);
                fetch(`{{ route('api.kecamatan.index', '') }}/${id}`)
                    .then(response => response.json())
                    .then(kecamatans => {
                        kecamatans.data.map(kecamatan => {
                            $(modal).find('select#kecamatan').append(
                                `<option value='${kecamatan.id}' ${kecamatan.name == kecamatanDefaultValue ? 'selected' : ''}>${kecamatan.name}</option>`
                            )
                            if (kecamatan.name == kecamatanDefaultValue) {
                                $(modal).find('select#kecamatan').trigger('change');
                            }
                        });
                    }).catch(() => {
                        ///Exception occured do something
                    })

            });

            $(document).on('change', 'select#kecamatan', async function() {
                var id = $(this).find(':selected').val();
                var modal = $(this).closest('.modal');
                if (!id) {
                    return;
                }
                $(modal).find('select#desa').empty();
                $(modal).find('select#desa').append(`<option value=''>Pilih Desa</option>`);
                fetch(`{{ route('api.desa.index', '') }}/${id}`)
                    .then(response => response.json())
                    .then(desas => {
                        desas.data.map(desa => {
                            $(modal).find('select#desa').append(
                                `<option value='${desa.id}' ${desa.name == desaDefaultValue ? 'selected' : ''}>${desa.name}</option>`
                            );
                            if (desa.name == desaDefaultValue) {
                                $(modal).find('select#desa').trigger('change');
                            }
                        })
                    }).catch(() => {
                        ///Exception occured do something
                    })

            });

            function resetSelectLokasi(element) {
                $(element).find('select#kecamatan').empty();
                $(element).find('select#kecamatan').append('<option value="">Pilih Kecamatan</option>');
                $(element).find('select#desa').empty();
                $(element).find('select#desa').append('<option value="">Pilih Desa</option>');
            }
        });
    </script>
@endsection
