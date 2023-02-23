@extends('layouts.admin.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="page-title">Data Perkebunan</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs tabs-bordered nav-justified">
                <li class="nav-item">
                    <a href="#informasiumum" data-bs-toggle="tab" class="nav-link active">
                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs">Info Umum</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#legalitas" data-bs-toggle="tab" class="nav-link">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Legalitas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#produksi" data-bs-toggle="tab" class="nav-link">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Penanaman</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#distribusi" data-bs-toggle="tab" class="nav-link">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Produksi & Pengolahan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#ketenagakerjaan" data-bs-toggle="tab" class="nav-link">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Ketenagakerjaan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#kemitraan" data-bs-toggle="tab" class="nav-link">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Kemitraan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#kontribusi" data-bs-toggle="tab" class="nav-link">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">CSR</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#sertifikat" data-bs-toggle="tab" class="nav-link">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Sertifikat</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                @include('perkebunan.admin.tabs.info-umum')
                <div class="tab-pane fade" id="legalitas">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Izin Lokasi</label>
                            <div class="col-md-10">
                                <table id="tableProduksi" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th><b>Kategori</b></th>
                                            <th><b>Nomor Surat</b></th>
                                            <th><b>Tanggal</b></th>
                                            <th><b>Luas (Ha)</b></th>
                                            <th><b>Lokasi</b></th>
                                            <th><b>Penjabat Penerbit</b></th>
                                            <th><b>Keterangan</b></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perkebunan->izin_lokasis as $izin_lokasi)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td align="center">{{ $izin_lokasi->kategori }}</td>
                                                <td align="center">{{ $izin_lokasi->nomor_surat }}</td>
                                                <td align="center">{{ $izin_lokasi->tanggal_terbit }}</td>
                                                <td align="center">{{ $izin_lokasi->luas }}</td>
                                                <td align="center">{{ $izin_lokasi->lokasi }}</td>
                                                <td align="center">{{ $izin_lokasi->penjabat_penerbit }}</td>
                                                <td align="center">{{ $izin_lokasi->keterangan }}</td>
                                                <td></td>
                                                {{-- <td><a href="{{ route('perkebunan.editizinlokasi', $izin_lokasi->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a></td> --}}
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Total : {{ $perkebunan->izin_lokasis->sum('luas') }}</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Izin Usaha Perkebunan</label>
                            <div class="col-md-10">
                                <table id="tableProduksi" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th><b>Jenis IUP</b></th>
                                            <th><b>Kategori</b></th>
                                            <th><b>Nomor Surat</b></th>
                                            <th><b>Tanggal</b></th>
                                            <th><b>Luas (Ha)</b></th>
                                            <th><b>Lokasi</b></th>
                                            <th><b>Penjabat Penerbit</b></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perkebunan->iups as $iup)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td align="center">{{ $iup->jenis_iup }}</td>
                                                <td align="center">{{ $iup->kategori }}</td>
                                                <td align="center">{{ $iup->nomor_surat }}</td>
                                                <td align="center">{{ $iup->tanggal_terbit }}</td>
                                                <td align="center">{{ $iup->luas }}</td>
                                                <td align="center">{{ $iup->lokasi }}</td>
                                                <td align="center">{{ $iup->penjabat_penerbit }}</td>
                                                <td></td>
                                                {{-- <td><a href="{{ route('perkebunan.editiup', $iup->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a></td> --}}
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Total : {{ $perkebunan->iups->sum('luas') }}</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Hak Guna Usaha</label>
                            <div class="col-md-10">
                                <table id="tableProduksi" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th><b>Nomor Sertifikat</b></th>
                                            <th><b>Tanggal</b></th>
                                            <th><b>Luas (Ha)</b></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perkebunan->hgus as $hgu)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td align="center">{{ $hgu->nomor_surat }}</td>
                                                <td align="center">{{ $hgu->tanggal_terbit }}</td>
                                                <td align="center">{{ $hgu->luas }}</td>
                                                <td></td>
                                                {{-- <td><a href="{{ route('perkebunan.edithgu', $hgu->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a></td> --}}
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Total : {{ $perkebunan->hgus->sum('luas') }}</th>
                                            <th></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Izin Bidang Lingkungan Hidup</label>
                            <div class="col-md-10">
                                <table id="tableProduksi" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th><b>Jenis Dokumen</b></th>
                                            <th><b>Nomor Surat</b></th>
                                            <th><b>Tanggal</b></th>
                                            <th><b>Luas/Kapasitas (Ha)</b></th>
                                            <th><b>Penjabat Penerbit</b></th>
                                            <th><b>Keterangan</b></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perkebunan->iblhs as $iblh)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td align="center">{{ $iblh->jenisdokumen }}</td>
                                                <td align="center">{{ $iblh->nomorsurat }}</td>
                                                <td align="center">{{ $iblh->tanggal }}</td>
                                                <td align="center">{{ $iblh->luas }}</td>
                                                <td align="center">{{ $iblh->penjabat_penerbit }}</td>
                                                <td align="center">{{ $iblh->keterangan }}</td>
                                                <td></td>
                                                {{-- <td><a href="{{ route('perkebunan.editiblh', $iblh->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a></td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="produksi">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Luas IUP (Ha)</label>
                            <div class="col-md-10">
                                <h5>{{ $perkebunan->luas_iup }}</h5>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Perolehan Lahan Inti</label>
                            <div class="col-md-10">
                                <table id="tableProduksi" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th><b>Jenis Kebun</b></th>
                                            <th><b>Tahun Perolehan</b></th>
                                            <th><b>Luas Perolehan (Ha)</b></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perkebunan->perolehan_lahans->where('jenis', 'inti') as $perolehan_inti)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td align="center">{{ $perolahan_inti->jenis_kebun }}</td>
                                                <td align="center">{{ $perolahan_inti->tahun }}</td>
                                                <td align="center">{{ $perolahan_inti->luas }}</td>
                                                <td></td>
                                                {{-- <td><a href="{{ route('perkebunan.editperolehanlahan', $perolahan_inti->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a></td> --}}
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Total :
                                                {{ $perkebunan->perolehan_lahans->where('jenis', 'inti')->sum('luas') }}
                                            </th>
                                            <th></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Perolehan Lahan Plasma</label>
                            <div class="col-md-10">
                                <table id="tableProduksi" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th><b>Jenis Kebun</b></th>
                                            <th><b>Tahun Perolehan</b></th>
                                            <th><b>Luas Perolehan (Ha)</b></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perkebunan->perolehan_lahans->where('jenis', 'plasma') as $perolehan_plasma)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td align="center">{{ $perolahan_plasma->jenis_kebun }}</td>
                                                <td align="center">{{ $perolahan_plasma->tahun }}</td>
                                                <td align="center">{{ $perolahan_plasma->luas }}</td>
                                                <td></td>
                                                {{-- <td><a href="{{ route('perkebunan.editperolehanlahan', $perolahan_plasma->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a></td> --}}
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Total :
                                                {{ $perkebunan->perolehan_lahans->where('jenis', 'plasma')->sum('luas') }}
                                            </th>
                                            <th></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="color: green;" class="col-md-2 control-label">*Keterangan :</label>
                            <div class="col-md-10">
                                <h5 style="color: green;">Total Pelolehan Lahan Inti ( Total :
                                    {{ $perkebunan->perolehan_lahans->where('jenis', 'inti')->sum('luas') }} Ha
                                    ) + Pelolehan Lahan Plasma ( Total :
                                    {{ $perkebunan->perolehan_lahans->where('jenis', 'plasma')->sum('luas') }}
                                    Ha ) = Total :
                                    {{ $perkebunan->perolehan_lahans->where('jenis', 'inti')->sum('luas') + $perkebunan->perolehan_lahans->where('jenis', 'plasma')->sum('luas') }}
                                    Ha</h5>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Penanaman Inti</label>
                            <div class="col-md-10">
                                <table id="tableProduksi" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th><b>Jenis Kebun</b></th>
                                            <th><b>Tahun Tanam</b></th>
                                            <th><b>Luas Tanam (Ha)</b></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perkebunan->penanamans->where('jenis', 'inti') as $penanaman_inti)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td align="center">{{ $penanaman_inti->kategori }}</td>
                                                <td align="center">{{ $penanaman_inti->tahun }}</td>
                                                <td align="center">{{ $penanaman_inti->luas }}</td>
                                                <td><a href="{{ route('perkebunan.editpenanaman', $penanaman_inti->id) }}"
                                                        class="btn btn-primary btn-bordered waves-effect waves-light"><i
                                                            class="fa fa-pencil"></i></a></td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Total :
                                                {{ $perkebunan->penanamans->where('jenis', 'inti')->sum('luas') }}
                                            </th>
                                            <th></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="color: green;" class="col-md-2 control-label">*Keterangan :</label>
                            <div class="col-md-10">
                                <h5 style="color: green;">Total Penanaman Inti ( TBM:
                                    {{ $perkebunan->produksi_tbs->where('kategori', 'inti')->sum('luas_tbm') }}
                                    Ha ) + ( TM:
                                    {{ $perkebunan->produksi_tbs->where('kategori', 'inti')->sum('luas_tm') }}
                                    Ha ) =
                                    {{ $perkebunan->produksi_tbs->where('kategori', 'inti')->sum('luas_tbm') + $perkebunan->produksi_tbs->where('kategori', 'inti')->sum('luas_tm') }}
                                    Ha</h5>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Penanaman Plasma</label>
                            <div class="col-md-10">
                                <table id="tableProduksi" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th><b>Jenis Kebun</b></th>
                                            <th><b>Tahun Tanam</b></th>
                                            <th><b>Luas Tanam (Ha)</b></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perkebunan->penanamans->where('kategori', 'plasma') as $penanaman_plasma)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td align="center">{{ $penanaman_plasma->kategori }}</td>
                                                <td align="center">{{ $penanaman_plasma->tahun }}</td>
                                                <td align="center">{{ $penanaman_plasma->luas }}</td>
                                                <td></td>
                                                {{-- <td><a href="{{ route('perkebunan.editpenanaman', $penanaman_plasma->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a></td> --}}
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Total :
                                                {{ $perkebunan->penanamans->where('kategori', 'plasma')->sum('luas') }}
                                            </th>
                                            <th></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="color: green;" class="col-md-2 control-label">*Keterangan :</label>
                            <div class="col-md-10">
                                <h5 style="color: green;">Total Penanaman Plasma ( TBM:
                                    {{ $perkebunan->produksi_tbs->where('kategori', 'plasma')->sum('luas_tbm') }}
                                    Ha ) + ( TM:
                                    {{ $perkebunan->produksi_tbs->where('kategori', 'plasma')->sum('luas_tm') }}
                                    Ha ) =
                                    {{ $perkebunan->produksi_tbs->where('kategori', 'plasma')->sum('luas_tbm') + $perkebunan->produksi_tbs->where('kategori', 'plasma')->sum('luas_tm') }}
                                    Ha</h5>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="color: green;" class="col-md-2 control-label">*Keterangan :</label>
                            <div class="col-md-10">
                                <h5 style="color: green;">Total Penanaman Inti (
                                    {{ $perkebunan->produksi_tbs->where('kategori', 'inti')->sum('luas_tbm') + $perkebunan->produksi_tbs->where('kategori', 'inti')->sum('luas_tm') }}
                                    Ha ) + Total Penanaman Plasma (
                                    {{ $perkebunan->produksi_tbs->where('kategori', 'plasma')->sum('luas_tbm') + $perkebunan->produksi_tbs->where('kategori', 'plasma')->sum('luas_tm') }}
                                    Ha ) =
                                    {{ $perkebunan->produksi_tbs->where('kategori', 'inti')->sum('luas_tbm') + $perkebunan->produksi_tbs->where('kategori', 'inti')->sum('luas_tm') + $perkebunan->produksi_tbs->where('kategori', 'plasma')->sum('luas_tbm') + $perkebunan->produksi_tbs->where('kategori', 'plasma')->sum('luas_tm') }}
                                    Ha</h5>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="distribusi">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <h4 align="center"><b><u>Produksi Tahun Kemarin</u></b></h4>
                        <table id="tableProduksikebun" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Jenis Kebun</th>
                                    <th>Triwulan</th>
                                    <th>Tahun</th>
                                    <th>Jumlah Produksi/Ton TBS</th>
                                    {{-- <th>Produktivitas/Ton/Ha</th> --}}
                                    {{-- <th>Rata-Rata Produktivitas/Ton/Ha</th> --}}
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perkebunan->produksi_kebuns->where('kondisi', 'kemarin') as $produksi_kemarin)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $produksi_kemarin->jenis_kebun }}</td>
                                        <td>{{ $produksi_kemarin->triwulan }}</td>
                                        <td>{{ $produksi_kemarin->tahun }}</td>
                                        <td align="right">{{ $produksi_kemarin->jumlah_produksi }}</td>
                                        {{-- <td align="right">{{ $produksi_kemarin->produktifitas }}</td> --}}
                                        {{-- <td align="right">{{ $produksi_kemarin->rataproduktifitas }}</td> --}}
                                        <td>
                                            {{-- <a href="{{ route('perkebunan.editproduksikebun', $produksi_kemarin->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Total :
                                        {{ $perkebunan->produksi_kebuns->where('kondisi', 'kemarin')->sum('jumlah_produksi') }}
                                    </th>
                                    {{-- <th>Total : {{ $totalproduktifitas }}</th> --}}
                                    {{-- <th>Total : {{ $totalrataproduktifitas}}</th> --}}
                                    <th></th>
                                </tr>
                            </tbody>
                        </table>
                        <h4 align="center"><b><u>Produksi Tahun Berjalan</u></b></h4>
                        <table id="tableProduksikebun" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Jenis Kebun</th>
                                    <th>Triwulan</th>
                                    <th>Tahun</th>
                                    <th>Jumlah Produksi/Ton TBS</th>
                                    {{-- <th>Produktivitas/Ton/Ha</th> --}}
                                    {{-- <th>Rata-Rata Produktivitas/Ton/Ha</th> --}}
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perkebunan->produksi_kebuns->where('kondisi', 'berjalan') as $produksi_berjalan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $produksi_berjalan->jenis_kebun }}</td>
                                        <td>{{ $produksi_berjalan->triwulan }}</td>
                                        <td>{{ $produksi_berjalan->tahun }}</td>
                                        <td align="right">{{ $produksi_berjalan->jumlah_produksi }}</td>
                                        {{-- <td align="right">{{ $produksi_berjalan->produktifitas }}</td> --}}
                                        {{-- <td align="right">{{ $produksi_berjalan->rataproduktifitas }}</td> --}}
                                        <td>
                                            {{-- <a href="{{ route('perkebunan.editproduksikebun', $produksi_berjalan->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Total :
                                        {{ $perkebunan->produksi_kebuns->where('kondisi', 'berjalan')->sum('jumlah_produksi') }}
                                    </th>
                                    {{-- <th>Total : {{ $totalproduktifitas }}</th> --}}
                                    {{-- <th>Total : {{ $totalrataproduktifitas}}</th> --}}
                                    <th></th>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <br>
                    <h4 align="center"><b><u>Pengolahan</u></b></h4>
                    <table id="tableDistribusi" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Pabrik</th>
                                <th>Jumlah Distribusi (Ton)</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($perkebunan->distribusis as $distribusi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $distribusi->nama_pabrik }}</td>
                                    <td align="right">{{ number_format($distribusi->jumlah_distribusi) }}
                                    </td>
                                    <td>
                                        {{-- <a href="{{ route('perkebunan.editdistribusi', $distribusi->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a> --}}
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Total : {{ $perkebunan->distribusis->sum('jumlah_distribusi') }}</th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="ketenagakerjaan">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tenaga Kerja Kebun</label>
                            <div class="col-md-10">
                                <table id="tableProduksi" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><b>Bulanan</b></th>
                                            <th><b>Harian Tetap</b></th>
                                            <th><b>Harian Lepas</b></th>
                                            <th><b>Musimam/Borongan</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="center">
                                                {{ number_format($perkebunan->bulanan_kebun) }}</td>
                                            <td align="center">{{ number_format($perkebunan->tetap_kebun) }}
                                            </td>
                                            <td align="center">{{ number_format($perkebunan->lepas_kebun) }}
                                            </td>
                                            <td align="center">
                                                {{ number_format($perkebunan->musiman_kebun) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tenaga Kerja Pabrik</label>
                            <div class="col-md-10">
                                <table id="tableProduksi" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><b>Bulanan</b></th>
                                            <th><b>Harian Tetap</b></th>
                                            <th><b>Harian Lepas</b></th>
                                            <th><b>Musimam/Borongan</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="center">
                                                {{ number_format($perkebunan->bulanan_pabrik) }}</td>
                                            <td align="center">{{ number_format($perkebunan->tetap_pabrik) }}
                                            </td>
                                            <td align="center">{{ number_format($perkebunan->lepas_pabrik) }}
                                            </td>
                                            <td align="center">
                                                {{ number_format($perkebunan->musiman_pabrik) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tenaga Kerja Asing (TKA)</label>
                            <div class="col-md-2">
                                <h5>{{ number_format($perkebunan->tka) }}</h5>
                            </div>
                            <label class="col-md-2 control-label">Jabatan TKA</label>
                            <div class="col-md-6">
                                <h5>{{ $perkebunan->jabatantka }}</h5>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="kemitraan">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Pola Kemitraan : </label>
                            <div class="col-md-10">
                                <h5>{{ $perkebunan->pola_kemitraan }}</h5>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Petani Plasma : </label>
                            <div class="col-md-2">
                                <label class="col-md-6 control-label">Target (KK)</label>
                                <div class="col-md-4">
                                    <h5>{{ number_format($perkebunan->kk_target_plasma) }}</h5>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="col-md-6 control-label">Target (Ha)</label>
                                <div class="col-md-4">
                                    <h5>{{ $perkebunan->ha_target_plasma }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-2">
                                <label class="col-md-6 control-label">Realisasi (KK)</label>
                                <div class="col-md-4">
                                    <h5>{{ number_format($perkebunan->kk_realisasi_plasma) }}</h5>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="col-md-6 control-label">Realisasi (Ha)</label>
                                <div class="col-md-4">
                                    <h5>{{ $perkebunan->ha_realisasi_plasma }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Penetapan Petani</label>
                            <div class="col-md-10">
                                <table id="tableProduksi" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th><b>Tahap</b></th>
                                            <th><b>Koperasi</b></th>
                                            <th><b>Jumlah (KK)</b></th>
                                            <th><b>Luas (Ha)</b></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perkebunan->petanis as $petani)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td align="center">{{ $petani->tahap }}</td>
                                                <td align="center">{{ $petani->koperasi }}</td>
                                                <td align="center">{{ $petani->jumlah_kk }}</td>
                                                <td align="center">{{ $petani->luas }}</td>
                                                <td></td>
                                                {{-- <td><a href="{{ route('perkebunan.editpetani', $petani->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a></td> --}}
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Total : {{ $perkebunan->petanis->sum('jumlah_kk') }}</th>
                                            <th>Total : {{ $perkebunan->petanis->sum('luas') }}</th>
                                            <th></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Koperasi Mitra</label>
                            <div class="col-md-10">
                                <table id="tableProduksi" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th><b>Nama</b></th>
                                            <th><b>Anggota</b></th>
                                            <th><b>Luas (Ha)</b></th>
                                            <th><b>Bank</b></th>
                                            <th><b>Tanggal Akad</b></th>
                                            <th><b>Nilai Kredit</b></th>
                                            <th><b>Perkiraan Lunas</b></th>
                                            <th><b>Standar Biaya</b></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perkebunan->koperasis as $koperasi)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td align="center">{{ $koperasi->nama_koperasi }}</td>
                                                <td align="center">{{ $koperasi->jumlah_anggota }}</td>
                                                <td align="center">{{ $koperasi->luas }}</td>
                                                <td align="center">{{ $koperasi->bank }}</td>
                                                <td align="center">{{ $koperasi->akad }}</td>
                                                <td align="center">
                                                    {{ number_format($koperasi->nilai_kredit) }}</td>
                                                <td align="center">{{ $koperasi->tahunlunas }}</td>
                                                <td align="center">
                                                    {{ number_format($koperasi->standar_biaya) }}</td>
                                                <td></td>
                                                {{-- <td><a href="{{ route('perkebunan.editkoperasi', $koperasi->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a></td> --}}
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Total : {{ $perkebunan->koperasis->sum('luas') }}</th>
                                            <th></th>
                                            <th></th>
                                            <th>Total : {{ $perkebunan->koperasis->sum('nilai_kredit') }}</th>
                                            <th></th>
                                            <th>Total : {{ $perkebunan->koperasis->sum('standar_biaya') }}
                                            </th>
                                            <th></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="kontribusi">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <h4 align="center"><b><u>Sudah Realisasi</u></b></h4>
                        <table id="tableKontribusi" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Tahun</th>
                                    <th>Jenis Kegiatan</th>
                                    <th>Tanggal</th>
                                    <th>Nilai Setara</th>
                                    <th>Lokasi Desa</th>
                                    <th>Lokasi Kecamatan</th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perkebunan->kontribusis->where('pelaksanaan', 'realisasi') as $realisasi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $realisasi->tahun }}</td>
                                        <td>{{ $realisasi->jenis_kegiatan }}</td>
                                        <td>{{ $realisasi->tanggal }}</td>
                                        <td align="right">{{ number_format($realisasi->nilai_setara) }}</td>
                                        <td>{{ $realisasi->desa->nama }}</td>
                                        <td>{{ $realisasi->desa->kecamatan->nama }}</td>
                                        <td>
                                            {{-- <a href="{{ route('perkebunan.editkontribusi', $realisasi->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <h4 align="center"><b><u>Masih Rencana</u></b></h4>
                        <table id="tableRencana" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Tahun</th>
                                    <th>Jenis Kegiatan</th>
                                    <th>Tanggal</th>
                                    <th>Nilai Setara</th>
                                    <th>Lokasi Desa</th>
                                    <th>Lokasi Kecamatan</th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perkebunan->kontribusis->where('pelaksanaan', 'rencana') as $rencana)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $rencana->tahun }}</td>
                                        <td>{{ $rencana->jenis_kegiatan }}</td>
                                        <td>{{ $rencana->tanggal }}</td>
                                        <td align="right">{{ number_format($rencana->nilai_setara) }}</td>
                                        <td>{{ $rencana->desa->nama }}</td>
                                        <td>{{ $rencana->desa->kecamatan->nama }}</td>
                                        <td>
                                            {{-- <a href="{{ route('perkebunan.editkontribusi', $rencana->id) }}" class="btn btn-primary btn-bordered waves-effect waves-light"><i class="fa fa-pencil"></i></a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="tab-pane fade" id="sertifikat">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <table id="tableSertifikat" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Jenis Sertifikat</th>
                                    <th>Nama Sertifikat</th>
                                    <th>Nomor Surat</th>
                                    <th>Tanggal Diterbitkan</th>
                                    <th>Penjabat Penerbit</th>
                                    <th>Kategori</th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perkebunan->sertifikats as $sertifikat)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sertifikat->jenis }}</td>
                                        <td>{{ $sertifikat->namasertifikat }}</td>
                                        <td>{{ $sertifikat->nomorsurat }}</td>
                                        <td>{{ $sertifikat->tanggalterbit }}</td>
                                        <td>{{ $sertifikat->penjabat }}</td>
                                        <td>{{ $sertifikat->kategori }}</td>
                                        <td>
                                            <a href="{{ route('perkebunan.editsertifikat', $sertifikat->id) }}"
                                                class="btn btn-primary btn-bordered waves-effect waves-light"><i
                                                    class="fa fa-pencil"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2" style="margin-top: 20px">
                    <a href="{{ route('admin.perkebunan.index') }}"
                        class="btn btn-default btn-bordered w-md waves-light"><i class="fa fa-chevron-left"></i>
                        Kembali</a>
                </div>
                <div class="col-md-4 pull-right" style="margin-top: 20px">
                    <h5><b>Terakhir Diubah : {{ $perkebunan->update_terakhir }}</b></h5>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('assets/libs/DataTables/datatables.min.js') }}"></script>
    <script>
        $('#tableKontribusi').DataTable();
    </script>
@endsection
