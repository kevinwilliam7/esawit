@extends('layouts.public.master')
@section('content')
<main id="main">
    <section id="location" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Perusahaan Perkebunan Kelapa Sawit</h2>
                <p>Informasi Daftar Perusahaan Perkebunan Kelapa Sawit di Kabupaten Sanggau</p>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="info">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Umum</button>
                                <button class="nav-link" id="nav-legal-tab" data-bs-toggle="tab" data-bs-target="#nav-legal" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Legalitas</button>
                                <button class="nav-link" id="nav-penanaman-tab" data-bs-toggle="tab" data-bs-target="#nav-penanaman" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Penanaman</button>
                                <button class="nav-link" id="nav-produksi-tab" data-bs-toggle="tab" data-bs-target="#nav-produksi" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Produksi & Pengolahan</button>
                                <button class="nav-link" id="nav-ketenagakerjaan-tab" data-bs-toggle="tab" data-bs-target="#nav-ketenagakerjaan" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Ketenagakerjaan</button>
                                <button class="nav-link" id="nav-kemitraan-tab" data-bs-toggle="tab" data-bs-target="#nav-kemitraan" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Kemitraan</button>
                                <button class="nav-link" id="nav-csr-tab" data-bs-toggle="tab" data-bs-target="#nav-csr" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">CSR</button>
                                <button class="nav-link" id="nav-sertifikat-tab" data-bs-toggle="tab" data-bs-target="#nav-sertifikat" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Sertifikat</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            Informasi Perusahaan
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            @foreach($perkebunans as $key => $perkebunan)
                                                <div class="container">
                                                    <div class="row p-2">
                                                        <div class="col-4"><strong>Nama Perusahaan Perkebunan</strong></div>
                                                        <div class="col-8">{{ $perkebunan->nama_perkebunan }}</div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-4"><strong>NPWP</strong></div>
                                                        <div class="col-8">{{ $perkebunan->npwp }}</div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-4"><strong>Alamat Perusahaan</strong></div>
                                                        <div class="col-8">{{ $perkebunan->alamat_perusahaan }}</div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-4"><strong>Email</strong></div>
                                                        <div class="col-8">b{{ $perkebunan->email }}</div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-4"><strong>Pimpinan Perusahaan</strong></div>
                                                        <div class="col-8">
                                                            <table id="tableProduksi" class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th><b>Direktur Utama</b></th>
                                                                    <th><b>General Manager</b></th>
                                                                    <th><b>Kadiv Legal</b></th>
                                                                    <th><b>Manager Mill Project</b></th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>{{ $perkebunan->direktur }}</td>
                                                                        <td>{{ $perkebunan->gm }}</td>
                                                                        <td>{{ $perkebunan->kadivlegal }}</td>
                                                                        <td>{{ $perkebunan->managermill }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            Lokasi
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                            <div class="container">
                                                <div class="row p-2">
                                                    <div class="col-4"><strong>Lokasi Kebun</strong></div>
                                                    <div class="col-8">
                                                        <table id="tableProduksi" class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th><b>No</b></th>
                                                                <th><b>Lokasi Desa</b></th>
                                                                <th><b>Lokasi Kecamatan</b></th>
                                                                <th><b>Lokasi Kabupaten</b></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Malenggang</td>
                                                                    <td>Sekayam</td>
                                                                    <td>Kabupaten Sanggau</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row p-2">
                                                    <div class="col-4"><strong>Lokasi Pabrik</strong></div>
                                                    <div class="col-8">
                                                        <table id="tableProduksi" class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th><b>No</b></th>
                                                                <th><b>Lokasi Desa</b></th>
                                                                <th><b>Lokasi Kecamatan</b></th>
                                                                <th><b>Lokasi Kabupaten</b></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Malenggang</td>
                                                                    <td>Sekayam</td>
                                                                    <td>Kabupaten Sanggau</td>
                                                                </tr>
                                                                Akta Perusahaan       </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            Akta Perusahaan
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                        <div class="accordion-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-4"><strong>Akta Pendirian Perusahaan</strong></div>
                                                    <div class="col-8">
                                                        <table id="tableProduksi" class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th><b>Nomor Akta</b></th>
                                                                <th><b>Tanggal</b></th>
                                                                <th><b>Notaris</b></th>
                                                                <th><b>Komisaris</b></th>
                                                                <th><b>Direktur</b></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{ $perkebunan->nomor_akta_pendirian }}</td>
                                                                    <td>{{ $perkebunan->tanggal_akta_pendirian }}</td>
                                                                    <td>{{ $perkebunan->notaris_akta_pendirian }}</td>
                                                                    <td>{{ $perkebunan->komisaris_akta_pendirian }}</td>
                                                                    <td>{{ $perkebunan->direktur_akta_pendirian }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4"><strong>Akta Perubahan</strong></div>
                                                    <div class="col-8">
                                                        <table id="tableProduksi" class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th><b>Nomor Akta</b></th>
                                                                <th><b>Tanggal</b></th>
                                                                <th><b>Notaris</b></th>
                                                                <th><b>Komisaris</b></th>
                                                                <th><b>Direktur</b></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{ $perkebunan->nomor_akta_perubahan }}</td>
                                                                    <td>{{ $perkebunan->tanggal_akta_perubahan }}</td>
                                                                    <td>{{ $perkebunan->notaris_akta_perubahan }}</td>
                                                                    <td>{{ $perkebunan->komisaris_akta_perubahan }}</td>
                                                                    <td>{{ $perkebunan->direktur_akta_perubahan }}</td>
                                                                </tr>
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
                            <div class="tab-pane fade" id="nav-legal" role="tabpanel" aria-labelledby="nav-legal-tab">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            Izin Lokasi
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th><b>Kategori</b></th>
                                                            <th><b>Nomor Surat</b></th>
                                                            <th><b>Tanggal</b></th>
                                                            <th><b>Luas (Ha)</b></th>
                                                            <th><b>Lokasi</b></th>
                                                            <th><b>Penjabat Penerbit</b></th>
                                                            <th><b>Keterangan</b></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                                <td>kadivlegal</td>
                                                                <td>managermill</td>
                                                                <td>kadivlegal</td>
                                                                <td>managermill</td>
                                                                <td>managermill</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Izin Usaha Perkebunan
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th><b>Jenis IUP</b></th>
                                                            <th><b>Kategori</b></th>
                                                            <th><b>Nomor Surat</b></th>
                                                            <th><b>Tanggal</b></th>
                                                            <th><b>Luas (Ha)</b></th>
                                                            <th><b>Lokasi</b></th>
                                                            <th><b>Pejabat Penerbit</b></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                                <td>kadivlegal</td>
                                                                <td>managermill</td>
                                                                <td>kadivlegal</td>
                                                                <td>managermill</td>
                                                                <td>managermill</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Hak Guna Usaha
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th><b>Nomor Sertifikat</b></th>
                                                            <th><b>Tanggal</b></th>
                                                            <th><b>Luas (Ha)</b></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                                <td>kadivlegal</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSeven">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            Izin Bidang Lingkungan Hidup
                                            </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th><b>Jenis Dokumen</b></th>
                                                            <th><b>Nomor Surat</b></th>
                                                            <th><b>Tanggal</b></th>
                                                            <th><b>Luas / Kapasitas (HA)</b></th>
                                                            <th><b>Penjabat Penerbit</b></th>
                                                            <th><b>keterangan</b></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                                <td>kadivlegal</td>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                                <td>kadivlegal</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-penanaman" role="tabpanel" aria-labelledby="nav-penanaman-tab">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEight">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                            Perolehan Lahan Inti
                                            </button>
                                        </h2>
                                        <div id="collapseEight" class="accordion-collapse collapse show" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th><b>Tahun Perolehan</b></th>
                                                            <th><b>Luas Perolehan (Ha)</b></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingNine">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                Perolehan Lahan Plasma
                                            </button>
                                        </h2>
                                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th><b>Tahun Perolehan</b></th>
                                                            <th><b>Luas Perolehan (Ha)</b></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                Penanaman Inti
                                            </button>
                                        </h2>
                                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th><b>Tahun Tanam</b></th>
                                                            <th><b>Luas Tanam (Ha)</b></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEleven">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                Penanaman Plasma
                                            </button>
                                        </h2>
                                        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th><b>Tahun Tanam</b></th>
                                                            <th><b>Luas Tanam (Ha)</b></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-produksi" role="tabpanel" aria-labelledby="nav-produksi-tab">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwelve">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                                            Produksi Tahun Kemarin
                                            </button>
                                        </h2>
                                        <div id="collapseTwelve" class="accordion-collapse collapse show" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th><b>Jenis Kebun</b></th>
                                                            <th><b>Triwulan</b></th>
                                                            <th><b>Tahun</b></th>
                                                            <th><b>Jumlah Produksi/Ton TBS</b></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThirteen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                Produksi Tahun Berjalan
                                            </button>
                                        </h2>
                                        <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th><b>Jenis Kebun</b></th>
                                                            <th><b>Triwulan</b></th>
                                                            <th><b>Tahun</b></th>
                                                            <th><b>Jumlah Produksi/Ton TBS</b></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFourteen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                                Pengolahan
                                            </button>
                                        </h2>
                                        <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th><b>Nama Pabrik</b></th>
                                                            <th><b>Jumlah Distribusi(Ton)</b></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-ketenagakerjaan" role="tabpanel" aria-labelledby="nav-ketenagakerjaan-tab">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFiveteen">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveteen" aria-expanded="true" aria-controls="collapseFiveteen">
                                            Tenaga Kerja Kebun
                                            </button>
                                        </h2>
                                        <div id="collapseFiveteen" class="accordion-collapse collapse show" aria-labelledby="headingFiveteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><b>Bulanan</b></th>
                                                                <th><b>Harian Tetap</b></th>
                                                                <th><b>Harian Lepas</b></th>
                                                                <th><b>Musiman/Borongan</b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSixteen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                                Tenaga Kerja Pabrik
                                            </button>
                                        </h2>
                                        <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><b>Bulanan</b></th>
                                                                <th><b>Harian Tetap</b></th>
                                                                <th><b>Harian Lepas</b></th>
                                                                <th><b>Musiman/Borongan</b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-kemitraan" role="tabpanel" aria-labelledby="nav-kemitraan-tab">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSeventeen">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen">
                                            Informasi Kemitraan
                                            </button>
                                        </h2>
                                        <div id="collapseSeventeen" class="accordion-collapse collapse show" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-4"><strong>Pola Kemitraan</strong></div>
                                                        <div class="col-8">Bumi Kejati</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4"><strong>Petani Plasma</strong></div>
                                                        <div class="col-8">02.287.927.4-705.000</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4"><strong>Penetapan Petani </strong></div>
                                                        <div class="col-8">Dusun Sei. Daun, Desa Malenggang, Kec. Sekayam Kab. Sanggau</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEightteen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEightteen" aria-expanded="false" aria-controls="collapseEightteen">
                                                Penetapan Petani
                                            </button>
                                        </h2>
                                        <div id="collapseEightteen" class="accordion-collapse collapse" aria-labelledby="headingEightteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><b>Bulanan</b></th>
                                                                <th><b>Harian Tetap</b></th>
                                                                <th><b>Harian Lepas</b></th>
                                                                <th><b>Musiman/Borongan</b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingNineteen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                                Koperasi Mitra
                                            </button>
                                        </h2>
                                        <div id="collapseNineteen" class="accordion-collapse collapse" aria-labelledby="headingNineteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container">
                                                    <table id="tableProduksi" class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><b>Bulanan</b></th>
                                                                <th><b>Harian Tetap</b></th>
                                                                <th><b>Harian Lepas</b></th>
                                                                <th><b>Musiman/Borongan</b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                                <td>direktur</td>
                                                                <td>gm</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-csr" role="tabpanel" aria-labelledby="nav-csr-tab">...</div>
                            <div class="tab-pane fade" id="nav-sertifikat" role="tabpanel" aria-labelledby="nav-sertifikat-tab">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection