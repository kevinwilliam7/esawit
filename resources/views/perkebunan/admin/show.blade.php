@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
@endsection

@section('content-title', 'Data Perusahaan Perkebunan')

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
            var kecamatanDefaultValue = desaDefaultValue = undefined;

            $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
            });

            $('.accordion').on('shown.bs.collapse', function() {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

            $(document).on('change', 'select.kabupaten', async function() {
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
                            $(modal).find('select.kecamatan').append(
                                `<option value='${kecamatan.id}' ${kecamatan.name == kecamatanDefaultValue ? 'selected' : ''}>${kecamatan.name}</option>`
                            )
                            if (kecamatan.name == kecamatanDefaultValue) {
                                $(modal).find('select.kecamatan').trigger('change');
                            }
                        });
                    }).catch(() => {
                        ///Exception occured do something
                    })

            });

            $(document).on('change', 'select.kecamatan', async function() {
                var id = $(this).find(':selected').val();
                var modal = $(this).closest('.modal');
                if (!id) {
                    return;
                }
                $(modal).find('select.desa').empty();
                $(modal).find('select.desa').append(`<option value=''>Pilih Desa</option>`);
                fetch(`{{ route('api.desa.index', '') }}/${id}`)
                    .then(response => response.json())
                    .then(desas => {
                        desas.data.map(desa => {
                            $(modal).find('select.desa').append(
                                `<option value='${desa.id}' ${desa.name == desaDefaultValue ? 'selected' : ''}>${desa.name}</option>`
                            );
                            if (desa.name == desaDefaultValue) {
                                $(modal).find('select.desa').trigger('change');
                            }
                        })
                    }).catch(() => {
                        ///Exception occured do something
                    })

            });

            function resetSelectLokasi(element) {
                $(element).find('select.kecamatan').empty();
                $(element).find('select.kecamatan').append('<option value="">Pilih Kecamatan</option>');
                $(element).find('select.desa').empty();
                $(element).find('select.desa').append('<option value="">Pilih Desa</option>');
            }

            // Lokasi
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


            // Izin Lokasi
            const izinLokasis = $('table#izinLokasis').DataTable({
                'scrollX': true,
                'dom': 'Btrip',
            });

            $('div#izin-lokasi').on('click', 'button.btn-success', function(){
                $('#form-izin-lokasi').trigger('reset');
                $('#form-izin-lokasi').attr('action', '{{ route("admin.perkebunan.legalitas.izin-lokasi.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}');
                $('#form-izin-lokasi input[name=_method]').val('POST');
                $('#modal-izin-lokasi .modal-title').text('Tambah Data Izin Lokasi');
                $('#modal-izin-lokasi').modal('show');
            });

            $('table#izinLokasis').on('click', 'button.btn-warning', function(){
                var tr = $(this).closest('tr');
                var row = izinLokasis.row(tr);

                var id = tr.data('id');

                $('#form-izin-lokasi input[name=kategori]').val(row.data()[1]);
                $('#form-izin-lokasi input[name=nomor_surat]').val(row.data()[2]);
                $('#form-izin-lokasi input[name=tanggal_terbit]').val(row.data()[3]);
                $('#form-izin-lokasi input[name=luas]').val(row.data()[4]);
                $('#form-izin-lokasi input[name=lokasi]').val(row.data()[5]);
                $('#form-izin-lokasi input[name=penjabat_penerbit]').val(row.data()[6]);
                $('#form-izin-lokasi textarea[name=keterangan]').val(row.data()[7]);

                $('#form-izin-lokasi').attr('action', `{{ route("admin.perkebunan.legalitas.izin-lokasi.update", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama, "id" => 0]) }}${id}`);
                $('#form-izin-lokasi input[name=_method]').val('PATCH');
                $('#modal-izin-lokasi .modal-title').text('Ubah Data Izin Lokasi');
                $('#modal-izin-lokasi').modal('show');
            });

            const iups = $('table#iups').DataTable({
                'scrollX': true,
                'dom': 'Btrip'
            });

            $('div#iup').on('click', 'button.btn-success', function() {
                $('form#form-iup').trigger('reset');
                $('form#form-iup input[name=_method]').val('POST');
                $('form#form-iup').attr('action', `{{ route('admin.perkebunan.legalitas.iup.store', ['perkebunan' => $perkebunan->id, 'nama' => $perkebunan->nama]) }}`);
                $('#modal-iup .modal-title').text('Tambah Data IUP');
                $('#modal-iup').modal('show');
            });

            $('table#iups').on('click', 'button.btn-warning', function() {
                var tr = $(this).closest('tr');
                var row = iups.row(tr);
                var id = tr.data('id');

                $('form#form-iup input[name=_method]').val('PATCH');
                $('form#form-iup input[name=jenis_iup]').val(row.data()[1]);
                $('form#form-iup input[name=kategori]').val(row.data()[2]);
                $('form#form-iup input[name=nomor_surat]').val(row.data()[3]);
                $('form#form-iup input[name=tanggal_terbit]').val(row.data()[4]);
                $('form#form-iup input[name=luas]').val(row.data()[5]);
                $('form#form-iup input[name=lokasi]').val(row.data()[6]);
                

                $('form#form-iup').attr('action', `{{ route('admin.perkebunan.legalitas.iup.update', ['perkebunan' => $perkebunan->id, 'nama' => $perkebunan->nama, 'id' => 0]) }}${id}`);
                $('#modal-iup .modal-title').text('Ubah Data IUP');
                $('#modal-iup').modal('show');
            });

            // HGU
            const hgus = $('table#hgus').DataTable({
                'scrollX': true,
                'dom': 'Btrip',
            });

            $('div#hgu').on('click', 'button.btn-success', function() {
                $('#form-hgu input[name=_method]').val('POST');
                $('#form-hgu').trigger('reset');
                $('#form-hgu').attr('action', '{{ route("admin.perkebunan.legalitas.hgu.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}');
                
                $('#modal-iblh .modal-title').text('Tambah Data HGU');
                $('#modal-hgu').modal('show');
            });

            $('table#hgus').on('click', 'button.btn-warning', function(){
                var tr = $(this).closest('tr');
                var row = hgus.row(tr);
                var id = tr.data('id');

                $('#form-hgu').attr('action', `{{ route("admin.perkebunan.legalitas.hgu.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}/${id}`);
                $('#form-hgu input[name=_method]').val('PATCH');

                $('#form-hgu input[name=nomor_surat]').val(row.data()[1]);
                $('#form-hgu input[name=tanggal_terbit]').val(row.data()[2]);
                $('#form-hgu input[name=luas]').val(row.data()[3]);

                $('#modal-iblh .modal-title').text('Ubah Data HGU');
                $('#modal-hgu').modal('show');
            });

            // IBLH
            const iblhs = $('table#iblhs').DataTable({
                'scrollX': true,
                'dom': 'Btrip',
            });

            $('div#iblh').on('click', 'button.btn-success', function() {
                $('#form-iblh input[name=_method]').val('POST');
                $('#form-iblh').trigger('reset');
                $('#form-iblh').attr('action', '{{ route("admin.perkebunan.legalitas.iblh.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}');
                $('#modal-iblh .modal-title').text('Tambah Data IBLH');
                $('#modal-iblh').modal('show');
            });

            $('table#iblhs').on('click', 'button.btn-warning', function(){
                var tr = $(this).closest('tr');
                var row = iblhs.row(tr);
                var id = tr.data('id');

                $('#form-iblh').attr('action', `{{ route("admin.perkebunan.legalitas.iblh.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}/${id}`);
                $('#form-iblh input[name=_method]').val('PATCH');

                $('#form-iblh input[name=jenis_dokumen]').val(row.data()[1]);
                $('#form-iblh input[name=nomor_surat]').val(row.data()[2]);
                $('#form-iblh input[name=tanggal]').val(row.data()[3]);
                $('#form-iblh input[name=luas]').val(row.data()[4]);
                $('#form-iblh input[name=penjabat_penerbit]').val(row.data()[5]);
                $('#form-iblh textarea[name=keterangan]').val(row.data()[6]);

                $('#modal-iblh .modal-title').text('Ubah Data IBLH');
                $('#modal-iblh').modal('show');
            });

            // Perolehan
            const perolehanOpt = {
                'scrollX': true,
                'dom': 'Btrip',
            }

            const perolehanIntis = $('table#perolehanIntis').DataTable(perolehanOpt);
            const perolehanPlasmas = $('table#perolehanPlasmas').DataTable(perolehanOpt);
            const penanamanIntis = $('table#penanamanIntis').DataTable(perolehanOpt);
            const penanamanPlasmas = $('table#penanamanPlasmas').DataTable(perolehanOpt);

            $('#form-penanaman input[name=kategori]').on('change', function(){
                var selected = $(this).val();
                if (selected === 'penanaman') {
                    return $('#form-penanaman').attr('action', '{{ route("admin.perkebunan.penanaman.penanaman.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}');
                }
                return $('#form-penanaman').attr('action', '{{ route("admin.perkebunan.penanaman.perolehan-lahan.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}');
            });

            $('#nav-penanaman').on('click', 'button.btn-success', function() {
                $('#modal-penanaman #kategori-penanaman').show();
                $('#form-penanaman input[name=_method]').val('POST');
                $('#form-penanaman').trigger('reset');
                $('#modal-penanaman .modal-title').text('Tambah Data Penanaman & Perolehan');
                $('#modal-penanaman').modal('show');
            });

            $('table#perolehanIntis, table#perolehanPlasmas, table#penanamanIntis, table#penanamanPlasmas').on('click', 'button.btn-warning', function(){
                var tr = $(this).closest('tr');
                var id = tr.data('id');
                var tableId = $(this).closest('table').attr('id');

                $('#modal-penanaman #kategori-penanaman').hide();
                
                if (tableId === 'penanamanIntis') {
                    $('#form-penanaman').attr('action', `{{ route("admin.perkebunan.penanaman.penanaman.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}/${id}`);
                    $('#form-penanaman input[value=inti]').prop('checked', true);
                    var row = penanamanIntis.row(tr);
                } else if(tableId === 'penanamanPlasmas') {
                    $('#form-penanaman').attr('action', `{{ route("admin.perkebunan.penanaman.penanaman.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}/${id}`);
                    $('#form-penanaman input[value=plasma]').prop('checked', true);
                    var row = penanamanPlasmas.row(tr);
                } else if(tableId === 'perolehanIntis') {
                    $('#form-penanaman').attr('action', `{{ route("admin.perkebunan.penanaman.perolehan-lahan.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}/${id}`);
                    $('#form-penanaman input[value=inti]').prop('checked', true);
                    var row = perolehanIntis.row(tr);
                } else {
                    $('#form-penanaman').attr('action', `{{ route("admin.perkebunan.penanaman.perolehan-lahan.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}/${id}`);
                    $('#form-penanaman input[value=plasma]').prop('checked', true);
                    var row = perolehanPlasmas.row(tr);
                }
                
                $('#form-penanaman input[name=_method]').val('PATCH');

                $('#form-penanaman input[name=tahun]').val(row.data()[1]);
                $('#form-penanaman input[name=luas]').val(row.data()[2]);

                $('#modal-penanaman .modal-title').text('Ubah Data Penanaman');
                $('#modal-penanaman').modal('show');
            });
            
            // Produksi
            const produksiKebuns = $('table#produksi-kebuns').DataTable({
                'scrollX': true,
                'dom': 'Btrip',
            });

            $('div#produksi').on('click', 'button.btn-success', function() {
                $('#form-produksi input[name=_method]').val('POST');
                $('#form-produksi').trigger('reset');
                $('#form-produksi').attr('action', '{{ route("admin.perkebunan.produksi.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}');
                $('#modal-produksi .modal-title').text('Tambah Data Produksi');
                $('#modal-produksi').modal('show');
            });

            $('table#produksi-kebuns').on('click', 'button.btn-warning', function(){
                var tr = $(this).closest('tr');
                var row = produksiKebuns.row(tr);
                var id = tr.data('id');

                $('#form-produksi').attr('action', `{{ route("admin.perkebunan.produksi.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}/${id}`);
                $('#form-produksi input[name=_method]').val('PATCH');

                $(`#form-produksi input[name=kondisi][value=${row.data()[1]}]`).prop('checked', true);
                $('#form-produksi input[name=jenis_kebun]').val(row.data()[2]);
                $('#form-produksi input[name=triwulan]').val(row.data()[3]);
                $('#form-produksi input[name=tahun]').val(row.data()[4]);
                $('#form-produksi input[name=jumlah_produksi]').val(row.data()[5]);

                $('#modal-produksi .modal-title').text('Ubah Data Produksi');
                $('#modal-produksi').modal('show');
            });

            // Pengolahan
            const pengolahans = $('table#pengolahans').DataTable({
                'scrollX': true,
                'dom': 'Btrip',
            });

            $('div#pengolahan').on('click', 'button.btn-success', function() {
                $('#form-pengolahan input[name=_method]').val('POST');
                $('#form-pengolahan').trigger('reset');
                $('#form-pengolahan').attr('action', '{{ route("admin.perkebunan.pengolahan.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}');
                $('#modal-pengolahan .modal-title').text('Tambah Data Pengolahan');
                $('#modal-pengolahan').modal('show');
            });

            $('table#pengolahans').on('click', 'button.btn-warning', function(){
                var tr = $(this).closest('tr');
                var row = pengolahans.row(tr);
                var id = tr.data('id');

                $('#form-pengolahan').attr('action', `{{ route("admin.perkebunan.pengolahan.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}/${id}`);
                $('#form-pengolahan input[name=_method]').val('PATCH');

                $('#form-pengolahan input[name=nama_pabrik]').val(row.data()[1]);
                $('#form-pengolahan input[name=jumlah_distribusi]').val(row.data()[2]);

                $('#modal-pengolahan .modal-title').text('Ubah Data Pengolahan');
                $('#modal-pengolahan').modal('show');
            });

            // Petani
            const petanis = $('table#petanis').DataTable({
                'scrollX': true,
                'dom': 'Btrip',
            });

            $('div#petani').on('click', 'button.btn-success', function() {
                $('#form-petani input[name=_method]').val('POST');
                $('#form-petani').trigger('reset');
                $('#form-petani').attr('action', '{{ route("admin.perkebunan.kemitraan.petani.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}');
                $('#modal-petani .modal-title').text('Tambah Data petani');
                $('#modal-petani').modal('show');
            });

            $('table#petanis').on('click', 'button.btn-warning', function(){
                var tr = $(this).closest('tr');
                var row = petanis.row(tr);
                var id = tr.data('id');

                $('#form-petani').attr('action', `{{ route("admin.perkebunan.kemitraan.petani.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}/${id}`);
                $('#form-petani input[name=_method]').val('PATCH');

                $('#form-petani input[name=tahap]').val(row.data()[1]);
                $('#form-petani input[name=koperasi]').val(row.data()[2]);
                $('#form-petani input[name=jumlah_kk]').val(row.data()[3]);
                $('#form-petani input[name=luas]').val(row.data()[4]);

                $('#modal-petani .modal-title').text('Ubah Data petani');
                $('#modal-petani').modal('show');
            });

            // Koperasi
            const koperasis = $('table#koperasis').DataTable({
                'scrollX': true,
                'dom': 'Btrip',
            });

            $('div#koperasi').on('click', 'button.btn-success', function() {
                $('#form-koperasi input[name=_method]').val('POST');
                $('#form-koperasi').trigger('reset');
                $('#form-koperasi').attr('action', '{{ route("admin.perkebunan.kemitraan.koperasi.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}');
                $('#modal-koperasi .modal-title').text('Tambah Data koperasi');
                $('#modal-koperasi').modal('show');
            });

            $('table#koperasis').on('click', 'button.btn-warning', function(){
                var tr = $(this).closest('tr');
                var row = koperasis.row(tr);
                var id = tr.data('id');

                $('#form-koperasi').attr('action', `{{ route("admin.perkebunan.kemitraan.koperasi.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}/${id}`);
                $('#form-koperasi input[name=_method]').val('PATCH');

                $('#form-koperasi input[name=nama_koperasi]').val(row.data()[1]);
                $('#form-koperasi input[name=jumlah_anggota]').val(row.data()[2]);
                $('#form-koperasi input[name=luas]').val(row.data()[3]);
                $('#form-koperasi input[name=bank]').val(row.data()[4]);
                $('#form-koperasi input[name=akad]').val(row.data()[5]);
                $('#form-koperasi input[name=nilai_kredit]').val(row.data()[6]);
                $('#form-koperasi input[name=tahun_lunas]').val(row.data()[7]);
                $('#form-koperasi input[name=standar_biaya]').val(row.data()[8]);

                $('#modal-koperasi .modal-title').text('Ubah Data koperasi');
                $('#modal-koperasi').modal('show');
            });

            const csrOpt = {
                'scrollX': true,
                'dom': 'Btrip',
                'serverSide': true,
                'processing': true,
                'columns': [
                    { 'data': 'DT_RowIndex', 'name': 'DT_RowIndex', 'orderable': false, 'searchable': false },
                    { 'data': 'tahun', 'name': 'tahun' },
                    { 'data': 'jenis_kegiatan', 'name': 'jenis_kegiatan' },
                    { 'data': 'tanggal', 'name': 'tanggal' },
                    { 'data': 'nilai_setara', 'name': 'nilai_setara' },
                    { 
                        'data': 'desa', 
                        'name': 'desa',
                        'render': function(desa){
                            return `${desa.name}, ${desa.kecamatan.name}`
                        }
                    },
                    {
                        'data': 'id',
                        'name': 'id',
                        'render': function(id){
                            return `
                                <button class='btn btn-warning rounded-2' data-id='${id}'>
                                    <i class='fa fa-edit me-1'></i> Ubah
                                </button>
                            `
                        }
                    }
                ]
            }

            const csrRealisasis = $('table#realisasis').DataTable({
                ...csrOpt,
                'ajax': `{{ route('api.perkebunan.kontribusi.index', ['perkebunan' => $perkebunan->id, 'nama' => $perkebunan->nama, 'pelaksanaan' => 'realisasi']) }}`
            });  
            
            const csrRencanas = $('table#rencanas').DataTable({
                ...csrOpt,
                'ajax': `{{ route('api.perkebunan.kontribusi.index', ['perkebunan' => $perkebunan->id, 'nama' => $perkebunan->nama, 'pelaksanaan' => 'rencana']) }}`
            });  

            $('#nav-csr .btn-success').on('click', function(){
                kecamatanDefaultValue = desaDefaultValue = undefined;
                resetSelectLokasi($('#modal-kontribusi'));
                $('#form-kontribusi').trigger('reset');
                $('#form-kontribusi input[name=_method]').val('POST');
                $('#form-kontribusi').attr('action', `{{ route('admin.perkebunan.kontribusi.store', ['perkebunan' => $perkebunan->id, 'nama' => $perkebunan->nama]) }}`);
                $('#modal-kontribusi .modal-title').text('Tambah Data Kontribusi');
                $('#modal-kontribusi').modal('show');
            });

            $('table#realisasis, table#rencanas').on('click', '.btn-warning', function(){
                var tr = $(this).closest('tr');
                var id = $(this).data('id');
                var kategori = $(this).closest('table').attr('id');
                if (kategori === 'realisasis') {
                    var row = csrRealisasis.row(tr);
                    $('#form-kontribusi input[value=realisasi]').prop('checked', true);
                } else {
                    var row = csrRencanas.row(tr);
                    $('#form-kontribusi input[value=rencana]').prop('checked', true);
                }

                kecamatanDefaultValue = row.data()['desa'].kecamatan.name;
                desaDefaultValue = row.data()['desa'].name;

                $('#form-kontribusi input[name=_method]').val('PATCH');
                $('#form-kontribusi input[name=tahun]').val(row.data()['tahun']);
                $('#form-kontribusi input[name=jenis_kegiatan]').val(row.data()['jenis_kegiatan']);
                $('#form-kontribusi input[name=tanggal]').val(row.data()['tanggal']);
                $('#form-kontribusi input[name=nilai_setara]').val(row.data()['nilai_setara']);
                $('#form-kontribusi select.kabupaten').val(1).trigger('change');
                $('#form-kontribusi').attr('action', `{{ route('admin.perkebunan.kontribusi.update', ['perkebunan' => $perkebunan->id, 'nama' => $perkebunan->nama, 'id' => 0]) }}${id}`);
                $('#modal-kontribusi .modal-title').text('Tambah Data Kontribusi');
                $('#modal-kontribusi').modal('show');
            });

            // Sertifikat
            const sertifikats = $('table#sertifikats').DataTable({
                'scrollX': true,
                'dom': 'Btrip',
            });

            $('#nav-sertifikat').on('click', 'button.btn-success', function() {
                $('#form-sertifikat input[name=_method]').val('POST');
                $('#form-sertifikat').trigger('reset');
                $('#form-sertifikat').attr('action', '{{ route("admin.perkebunan.sertifikat.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}');
                $('#modal-sertifikat .modal-title').text('Tambah Data Sertifikat');
                $('#modal-sertifikat').modal('show');
            });

            $('table#sertifikats').on('click', 'button.btn-warning', function(){
                var tr = $(this).closest('tr');
                var row = sertifikats.row(tr);
                var id = tr.data('id');

                $('#form-sertifikat').attr('action', `{{ route("admin.perkebunan.sertifikat.store", ["perkebunan" => $perkebunan->id, "nama" => $perkebunan->nama]) }}/${id}`);
                $('#form-sertifikat input[name=_method]').val('PATCH');

                $('#form-sertifikat input[name=jenis]').val(row.data()[1]);
                $('#form-sertifikat input[name=nama_sertifikat]').val(row.data()[2]);
                $('#form-sertifikat input[name=nomor_surat]').val(row.data()[3]);
                $('#form-sertifikat input[name=tanggal_terbit]').val(row.data()[4]);
                $('#form-sertifikat input[name=penjabat]').val(row.data()[5]);
                $('#form-sertifikat input[name=kategori]').val(row.data()[6]);

                $('#modal-sertifikat .modal-title').text('Ubah Data Sertifikat');
                $('#modal-sertifikat').modal('show');
            });
        });

    </script>
@endsection