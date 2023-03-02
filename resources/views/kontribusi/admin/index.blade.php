@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
@endsection

@section('content-title', 'Data Kontribusi')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-perkebunan-tab" data-bs-toggle="tab" data-bs-target="#nav-perkebunan" type="button"
                            role="tab" aria-controls="nav-perkebunan" aria-selected="true">Perkebunan</button>
                        <button class="nav-link" id="nav-pabrik-tab" data-bs-toggle="tab" data-bs-target="#nav-pabrik"
                            type="button" role="tab" aria-controls="nav-pabrik" aria-selected="false">Pabrik</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-perkebunan" role="tabpanel" aria-labelledby="nav-perkebunan-tab">
                        @include('kontribusi.admin.tabs.perkebunan')
                    </div>
                    <div class="tab-pane fade" id="nav-pabrik" role="tabpanel" aria-labelledby="nav-pabrik-tab">
                        @include('kontribusi.admin.tabs.pabrik')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('kontribusi.admin.modal')
@endsection

@section('js')
    <script src="{{ asset('assets/libs/DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            var desaDefaultValue = undefined
            $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
            });

            $('.accordion').on('shown.bs.collapse', function() {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

            const perkebunanRealisasi = $('#perkebunan-realisasi').DataTable({
                'scrollX': true,
                'serverSide': true,
                'processing': true,
                'ajax': '{{ route("api.dt-perkebunan-realisasi") }}',
                'columns': [
                    { 'data': 'DT_RowIndex', 'name': 'DT_RowIndex', 'orderable': false, 'searchable': false },
                    { 
                        'data': 'parent', 
                        'name': 'parent.nama',
                        'orderable': false,
                        'render': function(parent) {
                            return parent.nama    
                        }
                    },
                    { 'data': 'tahun', 'name': 'tahun' },
                    { 'data': 'jenis_kegiatan', 'name': 'jenis_kegiatan' },
                    { 'data': 'tanggal', 'name': 'tanggal' },
                    { 
                        'data': 'nilai_setara', 
                        'name': 'nilai_setara' ,
                        'render': function(nilai_setara){
                            return numberFormat(nilai_setara)
                        }
                    },
                    { 
                        'data': 'desa', 
                        'name': 'desa.name',
                        'render': function(desa) {
                            return `${desa.name}, ${desa.kecamatan.name}`
                        }
                    },
                    { 
                        'data': 'id',
                        'name': 'id',
                        'render': function(id) {
                            return `
                                <button data-id='${id}' class='btn btn-warning btn-sm'>
                                    <i class='fa fa-edit'></i>
                                </button>`
                        }
                    }
                ]
            });

            const perkebunanRencana = $('#perkebunan-rencana').DataTable({
                'scrollX': true,
                'serverSide': true,
                'processing': true,
                'ajax': '{{ route("api.dt-perkebunan-rencana") }}',
                'columns': [
                    { 'data': 'DT_RowIndex', 'name': 'DT_RowIndex', 'orderable': false, 'searchable': false },
                    { 
                        'data': 'parent', 
                        'name': 'parent.nama',
                        'orderable': false,
                        'render': function(parent) {
                            return parent.nama    
                        }
                    },
                    { 'data': 'tahun', 'name': 'tahun' },
                    { 'data': 'jenis_kegiatan', 'name': 'jenis_kegiatan' },
                    { 'data': 'tanggal', 'name': 'tanggal' },
                    { 
                        'data': 'nilai_setara', 
                        'name': 'nilai_setara' ,
                        'render': function(nilai_setara){
                            return numberFormat(nilai_setara)
                        }
                    },
                    { 
                        'data': 'desa', 
                        'name': 'desa.name',
                        'render': function(desa) {
                            return `${desa.name}, ${desa.kecamatan.name}`
                        }
                    },
                    { 
                        'data': 'id',
                        'name': 'id',
                        'render': function(id) {
                            return `
                                <button data-id='${id}' class='btn btn-warning btn-sm'>
                                    <i class='fa fa-edit'></i>
                                </button>`
                        }
                    }
                ]
            });

            const pabrikRealisasi = $('#pabrik-realisasi').DataTable({
                'scrollX': true,
                'serverSide': true,
                'processing': true,
                'ajax': '{{ route("api.dt-pabrik-realisasi") }}',
                'columns': [
                    { 'data': 'DT_RowIndex', 'name': 'DT_RowIndex', 'orderable': false, 'searchable': false },
                    { 
                        'data': 'parent', 
                        'name': 'parent.nama',
                        'orderable': false,
                        'render': function(parent) {
                            return parent.nama
                        }
                    },
                    { 'data': 'tahun', 'name': 'tahun' },
                    { 'data': 'jenis_kegiatan', 'name': 'jenis_kegiatan' },
                    { 'data': 'tanggal', 'name': 'tanggal' },
                    { 
                        'data': 'nilai_setara', 
                        'name': 'nilai_setara' ,
                        'render': function(nilai_setara){
                        return numberFormat(nilai_setara)}
                    },
                    { 
                        'data': 'desa', 
                        'name': 'desa.name',
                        'render': function(desa) {
                            return `${desa.name}, ${desa.kecamatan.name}`
                        }
                    },
                    { 
                        'data': 'id',
                        'name': 'id',
                        'render': function(id) {
                            return `
                                <button data-id='${id}' class='btn btn-warning btn-sm'>
                                    <i class='fa fa-edit'></i>
                                </button>`
                        }
                    }
                ]
            });

            const pabrikRencana = $('#pabrik-rencana').DataTable({
                'scrollX': true,
                'serverSide': true,
                'processing': true,
                'ajax': '{{ route("api.dt-pabrik-rencana") }}',
                'columns': [
                    { 'data': 'DT_RowIndex', 'name': 'DT_RowIndex', 'orderable': false, 'searchable': false },
                    { 
                        'data': 'parent',
                        'name': 'parent.nama', 
                        'orderable': false,
                        'render': function(parent) {
                            return parent.nama
                        }
                    },
                    { 'data': 'tahun', 'name': 'tahun' },
                    { 'data': 'jenis_kegiatan', 'name': 'jenis_kegiatan' },
                    { 'data': 'tanggal', 'name': 'tanggal' },
                    { 
                        'data': 'nilai_setara', 
                        'name': 'nilai_setara' ,
                        'render': function(nilai_setara){
                        return numberFormat(nilai_setara)}
                    },
                    { 
                        'data': 'desa', 
                        'name': 'desa.name',
                        'render': function(desa) {
                            return `${desa.name}, ${desa.kecamatan.name}`
                        }
                    },
                    { 
                        'data': 'id',
                        'name': 'id',
                        'render': function(id) {
                            return `
                                <button data-id='${id}' class='btn btn-warning btn-sm'>
                                    <i class='fa fa-edit'></i>
                                </button>`
                        }
                    }
                ]
            });

            $('table#perkebunan-realisasi').on('click', '.btn-warning', function(){
                var tr = $(this).closest('tr');
                var row = perkebunanRealisasi.row(tr);
                $('form').attr('action', `{{ url('admin/perkebunan') }}/${row.data()['parent'].id}/${row.data()['parent'].nama}/kontribusi/${row.data()['id']}`)
                showModal(row, 'realisasi');
            });

            $('table#perkebunan-rencana').on('click', '.btn-warning', function(){
                var tr = $(this).closest('tr');
                var row = perkebunanRencana.row(tr);
                $('form').attr('action', `{{ url('admin/perkebunan') }}/${row.data()['parent'].id}/${row.data()['parent'].nama}/kontribusi/${row.data()['id']}`)
                showModal(row, 'rencana');
            });

            $('table#pabrik-realisasi').on('click', '.btn-warning', function(){
                var tr = $(this).closest('tr');
                var row = pabrikRealisasi.row(tr);
                $('form').attr('action', `{{ url('admin/pabrik') }}/${row.data()['parent'].id}/${row.data()['parent'].nama}/kontribusi/${row.data()['id']}`)
                showModal(row, 'realisasi');
            });

            $('table#pabrik-rencana').on('click', '.btn-warning', function(){
                var tr = $(this).closest('tr');
                var row = pabrikRencana.row(tr);
                $('form').attr('action', `{{ url('admin/pabrik') }}/${row.data()['parent'].id}/${row.data()['parent'].nama}/kontribusi/${row.data()['id']}`)
                showModal(row, 'rencana');
            });

            function showModal(row, pelaksanaan) {
                $(`#form-kontribusi input[name=pelaksanaan][value=${pelaksanaan}]`).prop('checked', true);
                $('.modal input[name=tahun]').val(row.data()['tahun']);
                $('.modal input[name=jenis_kegiatan]').val(row.data()['jenis_kegiatan']);
                $('.modal input[name=tanggal]').val(row.data()['tanggal']);
                $('.modal input[name=nilai_setara]').val(row.data()['nilai_setara']);
                desaDefaultValue = row.data()['desa'].name;
                $(`.modal select#kecamatan option:contains("${row.data()['desa'].kecamatan.name}")`).prop('selected', true);
                $('.modal select#kecamatan').trigger('change');
                $('.modal').modal('show');
            }

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

            $('.modal').on('change', 'select#kecamatan', async function() {
                var id = $(this).find(':selected').val();
                if (!id) return;
                
                $('.modal select#desa').empty();
                $('.modal select#desa').append(
                    `<option value=''>Pilih Desa</option>`);
                fetch(`{{ route('api.desa.index', '') }}/${id}`)
                    .then(response => response.json())
                    .then(desas => {
                        desas.data.map(desa => {
                            $('.modal select#desa').append(
                                `<option value='${desa.id}' ${desa.name == desaDefaultValue ? 'selected' : ''}>${desa.name}</option>`
                            );
                            if (desa.name == desaDefaultValue) {
                                $('.modal select#desa').trigger('change');
                                desaDefaultValue = undefined
                            }
                        })
                    }).catch(() => {
                        ///Exception occured do something
                    })

            });
        });
    </script>
@endsection
