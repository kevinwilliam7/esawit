@extends('layouts.admin.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/leaflet/leaflet.css') }}">
@endsection

@section('content-title', 'Pengaturan')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.pengaturan.update', ['pengaturan' => $setting->id]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $setting->email }}" placeholder="Email Kantor" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">No. Telp</label>
                        <input type="text" name="phone" class="form-control" value="{{ $setting->telepon }}" placeholder="No. Telp" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat</label>
                        <textarea name="address" class="form-control" placeholder="Alamat" required>{{ $setting->alamat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Lokasi Peta</label>
                        <div class="w-100 d-flex justify-content-center">
                            <div id="map" style="height: 400px; width: 100%"></div>
                        </div>
                    </div>
                    <input type="hidden" name="lat" value="{{ $setting->lat }}">
                    <input type="hidden" name="lng" value="{{ $setting->lng }}">
                    <div class="mb-3 d-flex justify-content-between">
                        <button class="btn btn-secondary btn-bordered rounded-2 text-secondary">
                            <i class="fa fa-chevron-circle-left me-1"></i> Kembali
                        </button>
                        <button class="btn btn-success btn-bordered rounded-2">
                            <i class="fa fa-save me-1"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/libs/leaflet/leaflet.js') }}"></script>
    <script>
        $(document).ready(function() {
            var map = L.map('map').setView([0.12627293, 110.59025645], 17);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var marker = L.marker([{{ $setting->lat }}, {{ $setting->lng }}]).addTo(map)
            // .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
            // .openPopup();

            map.on('click', function(e) {
                var lat = e.latlng.lat;
                var lng = e.latlng.lng;
                var newLatLng = new L.LatLng(lat, lng);
                marker.setLatLng(newLatLng);
                $('input[name=lat]').val(lat);
                $('input[name=lng]').val(lng);
            })
        });
    </script>
@endsection
