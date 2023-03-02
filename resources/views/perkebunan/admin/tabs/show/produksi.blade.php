<div class="accordion" id="produksi" style="font-size: 16px">

    {{-- Perolehan Lahan Inti --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-produksi-kemarin">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#produksi-kemarin"
                aria-controls="produksi-kemarin">
                Produksi Tahun Kemarin
            </button>
        </h2>
        <div id="produksi-kemarin" class="accordion-collapse collapse show" aria-labelledby="header-produksi-kemarin"
            data-bs-parent="#produksi">
            <div class="accordion-body">
                <button class="mb-3 btn btn-success btn-bordered btn-sm">
                    <i class="fa fa-plus me-1"></i> Tambah Data
                </button>
                <table class="table table-striped" id="izin-lokasis">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun Perolehan</th>
                            <th>Luas Perolehan (Ha)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perkebunan->perolehan_lahans->where('jenis_kebun', 'inti') as $perolehan_inti)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $perolehan_inti->tahun }}</td>
                                <td>{{ $perolehan_inti->luas }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm rounded-2" data-id="{{ $izin_lokasi->id }}">
                                        <i class="fa fa-edit me-1"></i> Ubah
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"><b>Total</b></td>
                            <td colspan="2">
                                {{ $perkebunan->perolehan_lahans->where('jenis_kebun', 'inti')->sum('luas') }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    {{-- Perolehan Lahan Plasma --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-perolahan-plasma">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#perolahan-plasma" aria-controls="perolahan-plasma">
                Perolehan Lahan Plasma
            </button>
        </h2>
        <div id="perolehan-plasma" class="accordion-collapse collapse" aria-labelledby="header-perolehan-plasma"
            data-bs-parent="#produksi">
            <div class="accordion-body">
                <button class="mb-3 btn btn-success btn-bordered btn-sm">
                    <i class="fa fa-plus me-1"></i> Tambah Data
                </button>
                <table class="table table-striped" id="izin-lokasis">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun Perolehan</th>
                            <th>Luas Perolehan (Ha)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perkebunan->perolehan_lahans->where('jenis_kebun', 'plasma') as $perolehan_plasma)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $perolehan_plasma->tahun }}</td>
                                <td>{{ $perolehan_plasma->luas }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm rounded-2" data-id="{{ $izin_lokasi->id }}">
                                        <i class="fa fa-edit me-1"></i> Ubah
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"><b>Total</b></td>
                            <td colspan="2">
                                {{ $perkebunan->perolehan_lahans->where('jenis_kebun', 'plasma')->sum('luas') }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    {{-- Penanaman Inti --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-penanaman-inti">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#penanaman-inti" aria-controls="penanaman-inti">
                Penanaman Inti
            </button>
        </h2>
        <div id="penanaman-inti" class="accordion-collapse collapse" aria-labelledby="header-penanaman-inti"
            data-bs-parent="#produksi">
            <div class="accordion-body">
                <button class="mb-3 btn btn-success btn-bordered btn-sm">
                    <i class="fa fa-plus me-1"></i> Tambah Data
                </button>
                <table class="table table-striped" id="izin-lokasis">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun Perolehan</th>
                            <th>Luas Perolehan (Ha)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perkebunan->penanamans->where('jenis_kebun', 'inti') as $penanaman_inti)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $penanaman_inti->tahun }}</td>
                                <td>{{ $penanaman_inti->luas }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm rounded-2" data-id="{{ $izin_lokasi->id }}">
                                        <i class="fa fa-edit me-1"></i> Ubah
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"><b>Total</b></td>
                            <td colspan="2">{{ $perkebunan->penanamans->where('jenis_kebun', 'inti')->sum('luas') }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    {{-- Penanaman Plasma --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-penanaman-plasma">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#penanaman-plasma" aria-controls="penanaman-plasma">
                Penanaman Plasma
            </button>
        </h2>
        <div id="penanaman-plasma" class="accordion-collapse collapse" aria-labelledby="header-penanaman-plasma"
            data-bs-parent="#produksi">
            <div class="accordion-body">
                <button class="mb-3 btn btn-success btn-bordered btn-sm">
                    <i class="fa fa-plus me-1"></i> Tambah Data
                </button>
                <table class="table table-striped" id="izin-lokasis">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun Perolehan</th>
                            <th>Luas Perolehan (Ha)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perkebunan->penanamans->where('jenis_kebun', 'plasma') as $penanaman_inti)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $penanaman_inti->tahun }}</td>
                                <td>{{ $penanaman_inti->luas }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm rounded-2" data-id="{{ $izin_lokasi->id }}">
                                        <i class="fa fa-edit me-1"></i> Ubah
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"><b>Total</b></td>
                            <td colspan="2">
                                {{ $perkebunan->penanamans->where('jenis_kebun', 'plasma')->sum('luas') }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
