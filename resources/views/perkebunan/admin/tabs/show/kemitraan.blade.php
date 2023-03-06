<div class="accordion" id="kemitraan" style="font-size: 16px">

    {{-- Informasi Kemitraan --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-informasi-kemitraan">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#informasi-kemitraan"
                aria-controls="informasi-kemitraan">
                Informasi Kemitraan
            </button>
        </h2>
        <div id="informasi-kemitraan" class="accordion-collapse collapse show" aria-labelledby="header-informasi-kemitraan"
            data-bs-parent="#kemitraan">
            <div class="accordion-body">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3"><b>Pola Kemitraan</b></div>
                        <div class="col-12 col-md-6 col-lg-9">{{ $perkebunan->pola_kemitraan }}</div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3"><b>Penetapan Petani</b></div>
                        <div class="col-12 col-md-6 col-lg-9">
							<div>Target (KK): {{ $perkebunan->kk_target_plasma ?? '-' }}</div>
							<div>Target (HA): {{ $perkebunan->ha_target_plasma ?? '-' }}</div>
							<div>Realisasi (KK): {{ $perkebunan->kk_realisasi_plasma ?? '-' }}</div>
							<div>Realisasi (HA): {{ $perkebunan->ha_realisasi_plasma ?? '-' }}</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Penetapan Petani --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-petanis">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#petani"
                aria-controls="petanis">
                Penetapan Petani
            </button>
        </h2>
        <div id="petani" class="accordion-collapse collapse" aria-labelledby="header-petani" data-bs-parent="#kemitraan">
            <div class="accordion-body">
				<button class="mb-3 btn btn-success btn-bordered btn-sm rounded-2">
                    <i class="fa fa-plus me-1"></i> Tambah Data
                </button>
				<table class="table table-striped w-100" id="petanis">
					<thead>
						<tr>
							<th>No</th>
							<th>Tahap</th>
							<th>Koperasi</th>
							<th>Jumlah (KK)</th>
							<th>Luas (Ha)</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($perkebunan->petanis as $petani)
							<tr data-id="{{ $petani->id }}">
								<td>{{ $loop->iteration }}</td>
								<td>{{ $petani->tahap }}</td>
								<td>{{ $petani->koperasi }}</td>
								<td>{{ $petani->jumlah_kk }}</td>
								<td>{{ $petani->luas }}</td>
								<td>
									<button class="btn btn-warning btn-sm rounded-2" data-id="{{ $petani->id }}">
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

    {{-- Koperasi Mitra --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-koperasi">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#koperasi"
                aria-controls="koperasi">
                Koperasi Mitra
            </button>
        </h2>
        <div id="koperasi" class="accordion-collapse collapse" aria-labelledby="header-koperasi" data-bs-parent="#kemitraan">
            <div class="accordion-body">
				<button class="mb-3 btn btn-success btn-bordered btn-sm rounded-2">
                    <i class="fa fa-plus me-1"></i> Tambah Data
                </button>
				<table class="table table-striped w-100" id="koperasis">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Anggota</th>
							<th>Luas (Ha)</th>
							<th>Bank</th>
							<th>Tanggal Akad</th>
							<th>Nilai Kredit</th>
							<th>Perkiraan Lunas</th>
							<th>Standar Biaya</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($perkebunan->koperasis as $koperasi)
							<tr data-id="{{ $koperasi->id }}">
								<td>{{ $loop->iteration }}</td>
								<td>{{ $koperasi->nama_koperasi }}</td>
								<td>{{ $koperasi->jumlah_anggota }}</td>
								<td>{{ $koperasi->luas }}</td>
								<td>{{ $koperasi->bank }}</td>
								<td>{{ $koperasi->akad }}</td>
								<td>{{ $koperasi->nilai_kredit }}</td>
								<td>{{ $koperasi->tahun_lunas }}</td>
								<td>{{ $koperasi->standar_biaya }}</td>
								<td>
									<button class="btn btn-warning btn-sm rounded-2" data-id="{{ $koperasi->id }}">
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
