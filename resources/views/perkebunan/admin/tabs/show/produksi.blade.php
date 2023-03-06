<div class="accordion" id="produksi-penanaman" style="font-size: 16px">

    {{-- Produksi --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-produksi">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#produksi"
                aria-controls="produksi">
                Produksi
            </button>
        </h2>
        <div id="produksi" class="accordion-collapse collapse show" aria-labelledby="header-produksi"
            data-bs-parent="#produksi-penanaman">
            <div class="accordion-body">
                <button class="mb-3 btn btn-success btn-bordered btn-sm rounded-2">
                    <i class="fa fa-plus me-1"></i> Tambah Data
                </button>
                <table class="table table-striped w-100" id="produksi-kebuns">
                    <thead>
                        <tr>
                            <th>No</th>
							<th>Kondisi</th>
							<th>Jenis Kebun</th>
							<th>Triwulan</th>
							<th>Tahun</th>
							<th>Jumlah Produksi / Ton TBS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perkebunan->produksi_kebuns as $produksi)
                            <tr data-id="{{ $produksi->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $produksi->kondisi }}</td>
                                <td>{{ $produksi->jenis_kebun }}</td>
                                <td>{{ $produksi->triwulan }}</td>
                                <td>{{ $produksi->tahun }}</td>
                                <td>{{ $produksi->jumlah_produksi }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm rounded-2" data-id="{{ $produksi->id }}">
                                        <i class="fa fa-edit me-1"></i> Ubah
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Perolehan Lahan Plasma --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-pengolahan">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pengolahan"
                aria-controls="pengolahan">
                Pengolahan
            </button>
        </h2>
        <div id="pengolahan" class="accordion-collapse collapse" aria-labelledby="header-pengolahan"
            data-bs-parent="#produksi-penanaman">
            <div class="accordion-body">
                <button class="mb-3 btn btn-success btn-bordered btn-sm rounded-2">
                    <i class="fa fa-plus me-1"></i> Tambah Data
                </button>
                <table class="table table-striped w-100" id="pengolahans">
                    <thead>
                        <tr>
                            <th>No</th>
							<th>Nama Pabrik</th>
							<th>Jumlah Distribusi (Ton)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perkebunan->distribusis as $distribusi)
                            <tr data-id="{{ $distribusi->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $distribusi->nama_pabrik }}</td>
                                <td>{{ $distribusi->jumlah_distribusi }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm rounded-2" data-id="{{ $distribusi->id }}">
                                        <i class="fa fa-edit me-1"></i> Ubah
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
