@php
    $listBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    $listTbs = [3,4,5,6,7,8,9,10,21,22,23,24,25];
    $romanNum = ['I', 'II'];
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
                <form action="{{ route('admin.tbs.store') }}" method="post" id="form-tbs">
                    @csrf
                    <div class="mb-3">
                        <label for="bulan" class="form-label">Bulan</label>
                        <select name="bulan" id="bulan" class="form-select" required>
                            <option value="">Pilih Bulan</option>
                            @foreach ($listBulan as $bulan)
                                @foreach($romanNum as $num)
                                    <option value='{{ $bulan .' '. $num}}'>{{ $bulan }} {{ $num }}</option>
                                @endforeach
                            @endforeach
                        </select>
                        @error('bulan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mt-3">
                        @foreach ($listTbs as $tbs)
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label for="tbs-{{ $tbs }}" class="form-label">TBS {{ $tbs }} Tahun</label>
                                <input type="number" name="tbs_{{ $tbs }}" id="tbs-{{ $tbs }}" class="form-control" placeholder="TBS {{ $tbs }} Tahun" required>
                                @error("tbs_$tbs")
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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