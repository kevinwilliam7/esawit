@php
    $listBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    $listTbs = [3,4,5,6,7,8,9,10,21,22,23,24,25];
    $romanNum = ['I', 'II']
@endphp
@extends('layouts.admin.master')

@section('content-title', 'Tambah Data Harga TBS')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title h6"><b>Data Harga TBS</b></div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.tbs.update', ['tb' => $tb->id]) }}" method="post" id="form-tbs">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="bulan" class="form-label">Bulan</label>
                        <select name="bulan" id="bulan" class="form-select" required>
                            <option value="">Pilih Bulan</option>
                            @foreach ($listBulan as $bulan)
                                @foreach($romanNum as $num)
                                    <option value='{{ $bulan .' '. $num}}' {{ $tb->bulan === "$bulan $num" ? 'selected' : '' }}>{{ $bulan }} {{ $num }}</option>
                                @endforeach
                            @endforeach
                        </select>
                    </div>
                    <div class="row mt-3">
                        @foreach ($listTbs as $tahun)
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label for="tbs-{{ $tahun }}" class="form-label">TBS {{ $tahun }} Tahun</label>
                                <input type="number" name="tbs_{{ $tahun }}" id="tbs-{{ $tahun }}" value='{{ $tb->{"tbs_$tahun"} }}' class="form-control" required>
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('admin.tbs.index') }}" class="btn btn-secondary btn-bordered rounded-2">
                    <i class="fa fa-chevron-left me-1 text-black"></i> <span class="text-black">Kembali</span>
                </a>
                <button type="submit" class="btn btn-success btn-bordered rounded-2" form="form-tbs">
                    <i class="fa fa-save me-1"></i> Submit
                </button>
            </div>
        </div>
    </div>
@endsection