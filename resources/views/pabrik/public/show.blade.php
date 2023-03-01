@extends('layouts.public.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
    <style>
        .pagination div.dataTables_paginate {
            color: #198754;
        }
        .pagination .page-item.active .page-link { 
            background-color: #198754;  
            border: 1px solid #198754;
            color: white;
        }
        div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.active .page-link:focus {
            background-color: #198754;
            border: 1px solid #198754;
            color: white;
        }
        .pagination .page-item.active .page-link:hover {
            background-color: #198754;
            border: 1px solid #198754;
            color: white;
        }

        .paginate_button.page-item a {
            color: #198754;
        }
    </style>
@endsection
@section('content')
<main id="main">
    <section id="location" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Pabrik Kelapa Sawit</h2>
                <p>Informasi Daftar Pabrik Perkebunan Kelapa Sawit di Kabupaten Sanggau</p>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="info">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Umum</button>
                                <button class="nav-link" id="nav-location-tab" data-bs-toggle="tab" data-bs-target="#nav-location" type="button" role="tab" aria-controls="nav-location aria-selected="false">Lokasi</button>
                                <button class="nav-link" id="nav-legal-tab" data-bs-toggle="tab" data-bs-target="#nav-legal" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Legalitas</button>
                                <button class="nav-link" id="nav-produksi-tab" data-bs-toggle="tab" data-bs-target="#nav-produksi" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Produksi</button>
                                <button class="nav-link" id="nav-supply-tab" data-bs-toggle="tab" data-bs-target="#nav-supply" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Supply</button>
                                <button class="nav-link" id="nav-csr-tab" data-bs-toggle="tab" data-bs-target="#nav-csr" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">CSR</button>
                                <button class="nav-link" id="nav-sertifikat-tab" data-bs-toggle="tab" data-bs-target="#nav-sertifikat" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Sertifikat</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                <div class="container p-2">
                                    <div class="row p-2">
                                        <div class="col-4"><strong>Nama Pabrik</strong></div>
                                        <div class="col-8">{{ $pabriks->nama}}</div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-4"><strong>NPWP</strong></div>
                                        <div class="col-8">{{ $pabriks->npwp}}</div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-4"><strong>Pimpinan Perusahaan</strong></div>
                                        <div class="col-8">{{ $pabriks->npwp}}</div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-4"><strong>Alamat Kantor Pusat</strong></div>
                                        <div class="col-8">{{ $pabriks->alamat_kantor}}</div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-4"><strong>Telepon</strong></div>
                                        <div class="col-8">{{ $pabriks->telp}}</div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-4"><strong>Email</strong></div>
                                        <div class="col-8">{{ $pabriks->email}}</div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-4"><strong>Tahun Mulai Beroperasi</strong></div>
                                        <div class="col-8">{{ $pabriks->tahun_operasi}}</div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-4"><strong>Luas Lokasi Pabrik (Ha)</strong></div>
                                        <div class="col-8">{{ $pabriks->npwp}}</div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-4"><strong>Nama Grup Perusahaan</strong></div>
                                        <div class="col-8">{{ $pabriks->nama_grup}}</div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-4"><strong>Status Perusahaan</strong></div>
                                        <div class="col-8">{{ $pabriks->status_perusahaan}}</div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-4"><strong>Bursa Efek</strong></div>
                                        <div class="col-8">{{ $pabriks->bursa_efek}}</div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-4"><strong>Jumlah Tenaga Kerja</strong></div>
                                        <div class="col-2"><strong>WNI {{ number_format($pabriks->tenaga_kerjawni) }}</strong></div>
                                        <div class="col-2"><strong>ASING {{ number_format($pabriks->tenaga_kerjaasing) }}</strong></div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-4"><strong>Kapasitas Produksi (Ton TBS/Jam)</strong></div>
                                        <div class="col-8">{{ $pabriks->kapasitas_produksi}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-location" role="tabpanel" aria-labelledby="nav-location-tab">
                                <div class="container">
                                    <div class="row p-4">
                                        <table id="tableLokasi" class="table table-bordered w-100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Lokasi Desa</th>
                                                    <th>Lokasi Kecamatan</th>
                                                    <th>Lokasi Kabupaten</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-legal" role="tabpanel" aria-labelledby="nav-legal-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="row p-2">
                                            <div class="col"></div>
                                            <div class="col"><strong>Nama Legalitas</strong></div>
                                            <div class="col"><strong>Penjabat</strong></div>
                                            <div class="col"><strong>Ditetapkan</strong></div>
                                            <div class="col"><strong>Berakhir</strong></div>
                                            <div class="col"><strong>Keterangan</strong></div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col"><strong>UKL-UPL/RKL-RPL/AMDAL</strong></div>
                                            <div class="col">{{ $pabriks->nomor_amdal }}</div>
                                            <div class="col">{{ $pabriks->penjabat_amdal }}</div>
                                            <div class="col">{{ $pabriks->ditetapkan_amdal }}</div>
                                            <div class="col">{{ $pabriks->berakhir_amdal }}</div>
                                            <div class="col">{{ $pabriks->keterangan_amdal }}</div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col"><strong>SIUP</strong></div>
                                            <div class="col">{{ $pabriks->nomor_siupp }}</div>
                                            <div class="col">{{ $pabriks->penjabat_siupp }}</div>
                                            <div class="col">{{ $pabriks->ditetapkan_siupp }}</div>
                                            <div class="col">{{ $pabriks->berakhir_siupp }}</div>
                                            <div class="col">{{ $pabriks->keterangan_siupp }}</div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col"><strong>SITU</strong></div>
                                            <div class="col">{{ $pabriks->nomor_situ }}</div>
                                            <div class="col">{{ $pabriks->penjabat_situ }}</div>
                                            <div class="col">{{ $pabriks->ditetapkan_situ }}</div>
                                            <div class="col">{{ $pabriks->berakhir_situ }}</div>
                                            <div class="col">{{ $pabriks->keterangan_situ }}</div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col"><strong>HGB</strong></div>
                                            <div class="col">{{ $pabriks->nomor_hgb }}</div>
                                            <div class="col">{{ $pabriks->penjabat_hgb }}</div>
                                            <div class="col">{{ $pabriks->ditetapkan_hgb }}</div>
                                            <div class="col">{{ $pabriks->berakhir_hgb }}</div>
                                            <div class="col">{{ $pabriks->keterangan_hgb }}</div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col"><strong>IMB Pabrik</strong></div>
                                            <div class="col">{{ $pabriks->nomor_imbpabrik }}</div>
                                            <div class="col">{{ $pabriks->penjabat_imbpabrik }}</div>
                                            <div class="col">{{ $pabriks->ditetapkan_imbpabrik }}</div>
                                            <div class="col">{{ $pabriks->berakhir_imbpabrik }}</div>
                                            <div class="col">{{ $pabriks->keterangan_imbpabrik }}</div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col"><strong>IMB Perumahan</strong></div>
                                            <div class="col">{{ $pabriks->nomor_imbperumahan }}</div>
                                            <div class="col">{{ $pabriks->penjabat_imbperumahan }}</div>
                                            <div class="col">{{ $pabriks->ditetapkan_imbperumahan }}</div>
                                            <div class="col">{{ $pabriks->berakhir_imbperumahan }}</div>
                                            <div class="col">{{ $pabriks->keterangan_imbperumahan }}</div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col"><strong>Izin Gangguan HO</strong></div>
                                            <div class="col">{{ $pabriks->nomor_ijingangguan }}</div>
                                            <div class="col">{{ $pabriks->penjabat_ijingangguan }}</div>
                                            <div class="col">{{ $pabriks->ditetapkan_ijingangguan }}</div>
                                            <div class="col">{{ $pabriks->berakhir_ijingangguan }}</div>
                                            <div class="col">{{ $pabriks->keterangan_ijingangguan }}</div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col"><strong>IMB Pembuangan Air Limbah</strong></div>
                                            <div class="col">{{ $pabriks->nomor_ijinlimbahcair }}</div>
                                            <div class="col">{{ $pabriks->penjabat_ijinlimbahcair }}</div>
                                            <div class="col">{{ $pabriks->ditetapkan_ijinlimbahcair }}</div>
                                            <div class="col">{{ $pabriks->berakhir_ijinlimbahcair }}</div>
                                            <div class="col">{{ $pabriks->keterangan_ijinlimbahcair }}</div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col"><strong>Izin Radio</strong></div>
                                            <div class="col">{{ $pabriks->nomor_ijinradio }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->penjabat_ijinradio }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->ditetapkan_ijinradio}}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->berakhir_ijinradio }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->keterangan_ijinradio }}</strong></div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col"><strong>Land Aplikasi</strong></div>
                                            <div class="col"><strong>{{ $pabriks->nomor_landaplikasi }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->penjabat_landaplikasi }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->ditetapkan_landaplikasi }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->berakhir_landaplikasi }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->keterangan_landaplikasi }}</strong></div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col"><strong>Izin Mesing - Mesin Pabrik</strong></div>
                                            <div class="col"><strong>{{ $pabriks->nomor_mesinpabrik }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->penjabat_mesinpabrik }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->ditetapkan_mesinpabrik }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->berakhir_mesinpabrik }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->keterangan_mesinpabrik }}</strong></div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col"><strong>Izin Tambang</strong></div>
                                            <div class="col"><strong>{{ $pabriks->nomor_ijintimbang }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->penjabat_ijintimbang }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->ditetapkan_ijintimbang}}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->berakhir_ijintimbang }}</strong></div>
                                            <div class="col"><strong>{{ $pabriks->keterangan_ijintimbang }}</strong></div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-produksi" role="tabpanel" aria-labelledby="nav-produksi-tab">
                                <div class="container">
                                    <div class="row p-4">
                                        <table id="tableProduksi" class="table table-bordered w-100">
                                            <thead>
                                                <tr>
                                                    <th><b>No</b></th>
                                                    <th><b>Kebun Hasil Pabrik</b></th>
                                                    <th><b>Jumlah Produksi Sekarang (Ton)</b></th>
                                                    <th><b>Jumlah Produksi Tahun Lalu (Ton)</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-supply" role="tabpanel" aria-labelledby="nav-supply-tab">
                                <div class="container">
                                    <div class="row p-4">
                                        <table id="tableSupply" class="table table-bordered w-100">
                                            <thead>
                                                <tr>
                                                    <th><b>No</b></th>
                                                    <th><b>Kebun Supplier</b></th>
                                                    <th><b>Jumlah Supply (Ton)</b></th>
                                                    <th><b>Jangka Waktu Supply</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-csr" role="tabpanel" aria-labelledby="nav-csr-tab">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                CSR Realisasi
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableRealisasi" class="table table-bordered w-100">
                                                        <thead>
                                                            <tr>
                                                                <th><b>No</b></th>
                                                                <th><b>Tahun</b></th>
                                                                <th><b>Jenis Kegiatan</b></th>
                                                                <th><b>Tanggal</b></th>
                                                                <th><b>Nilai Setara</b></th>
                                                                <th><b>Lokasi Desa</b></th>
                                                                <th><b>Lokasi Kecamatan</b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                CSR Rencana
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableRencana" class="table table-bordered w-100">
                                                        <thead>
                                                            <tr>
                                                                <th><b>No</b></th>
                                                                <th><b>Tahun</b></th>
                                                                <th><b>Jenis Kegiatan</b></th>
                                                                <th><b>Tanggal</b></th>
                                                                <th><b>Nilai Setara</b></th>
                                                                <th><b>Lokasi Desa</b></th>
                                                                <th><b>Lokasi Kecamatan</b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-sertifikat" role="tabpanel" aria-labelledby="nav-sertifikat-tab">
                                <div class="container">
                                    <div class="row p-4">
                                        <table id="tableSertifikat" class="table table-bordered w-100">
                                            <thead>
                                                <tr>
                                                    <th><b>No</b></th>
                                                    <th><b>Jenis Sertifikat</b></th>
                                                    <th><b>Nama Sertifikat</b></th>
                                                    <th><b>Nomor Surat</b></th>
                                                    <th><b>Tanggal Diterbitkan</b></th>
                                                    <th><b>Penjabat Penerbit</b></th>
                                                    <th><b>Kategori</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('js')
<script src="{{ asset('assets/libs/jquery-3.6.3/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('assets/libs/DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#tableRencana').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: `{{ url("api/pabrik-datatable-rencana/$id") }}`,
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'jeniskegiatan', name: 'jeniskegiatan'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'nilaisetara', name: 'nilaisetara'},
                    {data: 'lokasidesa', name: 'lokasidesa'},
                    {data: 'lokasikecamatan', name: 'lokasikecamatan'},
                ],
                columnDefs: [
                    {
                        targets: [0, 1, 2, 3, 4],
                        className: 'dt-center'
                    }
                ]
            });
        });
        $(document).ready(function(){
            $('#tableRealisasi').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: `{{ url("api/pabrik-datatable-realisasi/$id") }}`,
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'jeniskegiatan', name: 'jeniskegiatan'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'nilaisetara', name: 'nilaisetara'},
                    {data: 'lokasidesa', name: 'lokasidesa'},
                    {data: 'lokasikecamatan', name: 'lokasikecamatan'},
                ],
                columnDefs: [
                    {
                        targets: [0, 1, 2, 3, 4],
                        className: 'dt-center'
                    }
                ]
            });
        });
        $(document).ready(function(){
            $('#tableSertifikat').DataTable({
            });
        });
        $(document).ready(function(){
            $('#tableProduksi').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: `{{ url("api/pabrik-datatable-produksi/$id") }}`,
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'hasil_pabrik', name: 'hasil_pabrik'},
                    {data: 'jumlah_produksi', name: 'jumlah_produksi'},
                    {data: 'jumlah_produksi_lalu', name: 'jumlah_produksi_lalu'},
                ],
                columnDefs: [
                    {
                        targets: [0, 1, 2, 3],
                        className: 'dt-center'
                    }
                ]
            });
        });
        $(document).ready(function(){
            $('#tableSupply').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: `{{ url("api/pabrik-datatable-supply/$id") }}`,
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'nama_perkebunan', name: 'nama_perkebunan'},
                    {data: 'jumlah_supply', name: 'jumlah_supply'},
                    {data: 'jangka_waktu', name: 'jangka_waktu'},
                ],
                columnDefs: [
                    {
                        targets: [0, 1, 2, 3],
                        className: 'dt-center'
                    }
                ]
            });
        });
        $(document).ready(function(){
            $('#tableLokasi').DataTable({
            });
        });
    </script>
@endsection