@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Data Perusahaan Perkebunan</b>
                        <a href="#t: right;" class="btn btn-success btn-bordered waves-effect w-md waves-light"><i
                                class="fa fa-plus"></i> Tambah Data </a>
                        {{-- <a href="{{ route('cetak.muzzaki') }}" target="_blank" style="float: right; margin: 0 5px 10px 0" class="btn btn-primary"><i class="fa fa-print"></i> Cetak </a> --}}
                    </div>
                    <div class="panel-body">
                        <table id="tablePerkebunan" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NAMA PERUSAHAAN PERKEBUNAN</th>
                                    <th>NPWP</th>
                                    <th>ALAMAT PERUSAHAAN</th>
                                    <th>POLA KEMITRAAN</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perkebunans as $perkebunan)
                                    <tr>
                                        <td>{{ $perkebunan->nama }}</td>
                                        <td>{{ $perkebunan->npwp }}</td>
                                        <td>{{ $perkebunan->alamat }}</td>
                                        <td>{{ $perkebunan->pola_kemitraan }}</td>
                                        <td>
                                            <a href="#"
                                                class="btn btn-default btn-bordered waves-effect waves-light"><i
                                                    class="fa fa-eye"></i> Lihat Data</a>
                                            <a href="#"
                                                class="btn btn-primary btn-bordered waves-effect waves-light"><i
                                                    class="fa fa-pencil"></i> Ubah Data</a>
                                            <button type="button" onclick="delete_{{ $perkebunan->id }}()"
                                                class="btn btn-danger btn-bordered waves-effect waves-light"><i
                                                    class="fa fa-trash-o"></i> Hapus Data</button>
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-default dropdown-toggle btn-bordered waves-effect waves-light"
                                                    data-toggle="dropdown" aria-expanded="false"><span
                                                        class="fa fa-file"></span> Lokasi <span
                                                        class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">LOKASI KEBUN</a></li>
                                                    <li><a href="#">LOKASI PABRIK</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-default dropdown-toggle btn-bordered waves-effect waves-light"
                                                    data-toggle="dropdown" aria-expanded="false"><span
                                                        class="fa fa-file"></span> Legalitas <span
                                                        class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">HGU</a></li>
                                                    <li><a href="#">IZIN LOKASI</a></li>
                                                    <li><a href="#">IUP</a></li>
                                                    <li><a href="#">IBLH</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-default dropdown-toggle btn-bordered waves-effect waves-light"
                                                    data-toggle="dropdown" aria-expanded="false"><span
                                                        class="fa fa-map-pin"></span> Penanaman <span
                                                        class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">PEROLEHAN LAHAN</a></li>
                                                    <li><a href="#">PENANAMAN</a></li>
                                                    <li><a href="#">PRODUKSI TBS</a></li>
                                                </ul>
                                            </div>

                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-warning dropdown-toggle btn-bordered waves-effect waves-light"
                                                    data-toggle="dropdown" aria-expanded="false"><span
                                                        class="fa fa-handshake-o"></span> Produksi & Pengolahan <span
                                                        class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">PRODUKSI TBS</a></li>
                                                    <li><a href="#">PENGOLAHAN TBS</a></li>
                                                </ul>
                                            </div>

                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-default dropdown-toggle btn-bordered waves-effect waves-light"
                                                    data-toggle="dropdown" aria-expanded="false"><span
                                                        class="fa fa-handshake-o"></span> Kemitraan <span
                                                        class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">PENETAPAN PETANI</a></li>
                                                    <li><a href="#">KOPERASI MITRA</a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-info btn-bordered waves-effect waves-light"><i
                                                    class="fa fa-leaf"></i> CSR</a>
                                            <a href="#"
                                                class="btn btn-purple btn-bordered waves-effect waves-light"><i
                                                    class="fa fa-star"></i> Sertifikat</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
