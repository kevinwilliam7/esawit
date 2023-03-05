<div class="accordion" id="legalitas" style="font-size: 16px">

    {{-- Izin Lokasi --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-izin-lokasi">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#izin-lokasi"
                aria-controls="izin-lokasi">
                Izin Lokasi
            </button>
        </h2>
        <div id="izin-lokasi" class="accordion-collapse collapse show" aria-labelledby="header-izin-lokasi"
            data-bs-parent="#legalitas">
            <div class="accordion-body">
				<button class="mb-3 btn btn-success btn-bordered btn-sm rounded-2">
					<i class="fa fa-plus me-1"></i> Tambah Data
				</button>
				<table class="table table-striped" id="izin-lokasis">
					<thead>
						<tr>
							<th>No</th>
							<th>Kategori</th>
							<th>Nomor Surat</th>
							<th>Tanggal</th>
							<th>Luas (Ha)</th>
							<th>Lokasi</th>
							<th>Penjabat Penerbit</th>
							<th>Keterangan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($perkebunan->izin_lokasis as $izin_lokasi)
						<tr data-id="{{ $izin_lokasi->id }}">
								<td>{{ $loop->iteration }}</td>
								<td>{{ $izin_lokasi->kategori }}</td>
								<td>{{ $izin_lokasi->nomor_surat }}</td>
								<td>{{ $izin_lokasi->tanggal_terbit }}</td>
								<td>{{ $izin_lokasi->luas }}</td>
								<td>{{ $izin_lokasi->lokasi }}</td>
								<td>{{ $izin_lokasi->penjabat_penerbit }}</td>
								<td>{{ $izin_lokasi->keterangan }}</td>
								<td>
									<button class="btn btn-warning btn-sm rounded-2" data-id="{{ $izin_lokasi->id }}">
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

    {{-- Izin Usaha Perkebunan --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-iup">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#iup"
                aria-controls="iup">
                Izin Usaha Perkebunan
            </button>
        </h2>
        <div id="iup" class="accordion-collapse collapse" aria-labelledby="header-iup"
            data-bs-parent="#legalitas">
            <div class="accordion-body">
				<button class="mb-3 btn btn-success btn-bordered btn-sm rounded-2">
					<i class="fa fa-plus me-1"></i> Tambah Data
				</button>
				<table class="table table-striped w-100" id="iups">
					<thead>
						<tr>
							<th>No</th>
							<th>Jenis IUP</th>
							<th>Kategori</th>
							<th>Nomor Surat</th>
							<th>Tanggal</th>
							<th>Luas (Ha)</th>
							<th>Lokasi</th>
							<th>Penjabat Penerbit</th>
							<th>Keterangan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($perkebunan->iups as $iup)
						<tr data-id="{{ $iup->id }}">
								<td>{{ $loop->iteration }}</td>
								<td>{{ $iup->jenis_iup }}</td>
								<td>{{ $iup->kategori }}</td>
								<td>{{ $iup->nomor_surat }}</td>
								<td>{{ $iup->tanggal_terbit }}</td>
								<td>{{ $iup->luas }}</td>
								<td>{{ $iup->lokasi }}</td>
								<td>{{ $iup->penjabat_penerbit }}</td>
								<td>{{ $iup->keterangan }}</td>
								<td>
									<button class="btn btn-warning btn-sm rounded-2" data-id="{{ $iup->id }}">
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

    {{-- Hak Guna Usaha --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-hgu">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hgu"
                aria-controls="hgu">
                Hak Guna Usaha
            </button>
        </h2>
        <div id="hgu" class="accordion-collapse collapse" aria-labelledby="header-hgu"
            data-bs-parent="#legalitas">
            <div class="accordion-body">
				<button class="mb-3 btn btn-success btn-bordered btn-sm rounded-2">
					<i class="fa fa-plus me-1"></i> Tambah Data
				</button>
				<table class="table table-striped w-100" id="hgus">
					<thead>
						<tr>
							<th>No</th>
							<th>Nomor Sertifikat</th>
							<th>Tanggal</th>
							<th>Luas (Ha)</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($perkebunan->hgus as $hgu)
						<tr data-id="{{ $hgu->id }}">
								<td>{{ $loop->iteration }}</td>
								<td>{{ $hgu->nomor_sertifikat }}</td>
								<td>{{ $hgu->tanggal_terbit }}</td>
								<td>{{ $hgu->luas }}</td>
								<td>
									<button class="btn btn-warning btn-sm rounded-2" data-id="{{ $hgu->id }}">
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

	{{-- Izin Bidang Lingkungan Hidup --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-iblh">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#iblh"
                aria-controls="iblh">
                Izin Bidang Lingkungan Hidup
            </button>
        </h2>
        <div id="iblh" class="accordion-collapse collapse" aria-labelledby="header-iblh"
            data-bs-parent="#legalitas">
            <div class="accordion-body">
				<button class="mb-3 btn btn-success btn-bordered btn-sm rounded-2">
					<i class="fa fa-plus me-1"></i> Tambah Data
				</button>
				<table class="table table-striped w-100" id="iblhs">
					<thead>
						<tr>
							<th>No</th>
							<th>Jenis Dokumen</th>
							<th>Nomor Surat</th>
							<th>Tanggal</th>
							<th>Luas / Kapasitas (Ha)</th>
							<th>Penjabat Penerbit</th>
							<th>Keterangan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($perkebunan->iblhs as $iblh)
							<tr data-id="{{ $iblh->id }}">
								<td>{{ $loop->iteration }}</td>
								<td>{{ $iblh->jenis_dokumen }}</td>
								<td>{{ $iblh->nomor_surat }}</td>
								<td>{{ $iblh->tanggal_terbit }}</td>
								<td>{{ $iblh->luas }}</td>
								<td>{{ $iblh->penjabat_penerbit }}</td>
								<td>{{ $iblh->keterangan }}</td>
								<td>
									<button class="btn btn-warning btn-sm rounded-2" data-id="{{ $iblh->id }}">
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
