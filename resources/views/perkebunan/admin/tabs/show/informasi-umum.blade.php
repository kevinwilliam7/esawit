<div class="accordion" id="umum" style="font-size: 16px">

	{{-- Informasi Perusahaan --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-informasi">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#informasi"
                aria-controls="informasi">
                Informasi Perusahaan Perkebunan
            </button>
        </h2>
        <div id="informasi" class="accordion-collapse collapse show" aria-labelledby="header-informasi"
            data-bs-parent="#umum">
            <div class="accordion-body">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3"><b>Nama Perusahaan Perkebunan</b></div>
                        <div class="col-12 col-md-6 col-lg-9">{{ $perkebunan->nama }}</div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3"><b>NPWP</b></div>
                        <div class="col-12 col-md-6 col-lg-9">{{ $perkebunan->npwp }}</div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3"><b>Alamat Perusahaan</b></div>
                        <div class="col-12 col-md-6 col-lg-9">{{ $perkebunan->alamat }}</div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3"><b>Email</b></div>
                        <div class="col-12 col-md-6 col-lg-9">{{ $perkebunan->email }}</div>
                    </div>
                </div>
				<div class="mb-3">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3"><b>Luas IUP (Ha)</b></div>
                        <div class="col-12 col-md-6 col-lg-9">{{ $perkebunan->iups->sum('luas') }}</div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-3"><b>Pimpinan Perusahaan</b></div>
                        <div class="col-12 col-md-12 col-lg-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
										<th>Direktur Utama</th>
										<th>General Manager</th>
										<th>Kadiv Legal</th>
										<th>Manager Mill Project</th>
                                    </tr>
                                </thead>
								<tbody>
									<tr>
										<td>{{ $perkebunan->direktur }}</td>
										<td>{{ $perkebunan->gm }}</td>
										<td>{{ $perkebunan->kadiv_legal }}</td>
										<td>{{ $perkebunan->manager_mill }}</td>
									</tr>
								</tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	{{-- Lokasi --}}
	<div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-lokasi">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lokasi"
                aria-controls="lokasi">
                Lokasi
            </button>
        </h2>
        <div id="lokasi" class="accordion-collapse collapse" aria-labelledby="header-lokasi"
            data-bs-parent="#umum">
            <div class="accordion-body">

				{{-- Lokasi Kebun --}}
                <div class="mb-3 lokasi" id="lokasi-kebun">
                    <div class="d-flex justify-content-between align-items-center mb-2">
						<b>Lokasi Kebun</b>
						<button class="btn btn-success btn-bordered btn-sm rounded-2">
							<i class="fa fa-plus me-1"></i> Tambah Data
						</button>
					</div>
					<table class="table table-striped w-100" id="lokasi-kebun">
						<thead>
							<tr>
								<th>No</th>
								<th>Desa</th>
								<th>Kecamatan</th>
								<th>Kabupaten</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($perkebunan->lokasis as $lokasi_kebun)
								<tr data-id="{{ $lokasi_kebun->id }}">
									<td>{{ $loop->iteration }}</td>
									<td>{{ $lokasi_kebun->desa->name }}</td>
									<td>{{ $lokasi_kebun->desa->kecamatan->name }}</td>
									<td>{{ $lokasi_kebun->desa->kecamatan->kabupaten->name }}</td>
									<td>
										<button class="btn btn-warning btn-bordered btn-sm rounded-2">
											<i class="fa fa-edit me-1"></i> Ubah
										</button>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
                </div>

				<div class="my-4"><hr></div>

				{{-- Lokasi Pabrik --}}
				<div class="mt-3 lokasi" id="lokasi-pabrik">
					<div class="d-flex justify-content-between align-items-center">
						<b>Lokasi Pabrik</b>
						<button class="btn btn-success btn-bordered btn-sm rounded-2 mb-2">
							<i class="fa fa-plus me-1"></i> Tambah Data
						</button>
					</div>
					<table class="table table-striped w-100" id="lokasi-pabrik">
						<thead>
							<tr>
								<th>No</th>
								<th>Desa</th>
								<th>Kecamatan</th>
								<th>Kabupaten</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($perkebunan->lokasi_pabriks as $lokasi_pabrik)
								<tr data-id="{{ $lokasi_pabrik->id }}">
									<td>{{ $loop->iteration }}</td>
									<td>{{ $lokasi_pabrik->desa->name }}</td>
									<td>{{ $lokasi_pabrik->desa->kecamatan->name }}</td>
									<td>{{ $lokasi_pabrik->desa->kecamatan->kabupaten->name }}</td>
									<td>
										<button class="btn btn-warning btn-bordered btn-sm rounded-2">
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

	{{-- Akta Perusahaan --}}
	<div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-akta">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#akta"
                aria-controls="akta">
                Akta Perusahaan
            </button>
        </h2>
        <div id="akta" class="accordion-collapse collapse" aria-labelledby="header-akta"
            data-bs-parent="#umum">
            <div class="accordion-body">
				<div class="mb-3">
					<div class="row">
						<div class="col-12 col-lg-3">
							<b>Akta Pendirian</b>
						</div>
						<div class="col-12 col-lg-9">
							<table class="table w-100 table-bordered">
								<thead>
									<tr>
										<th>Nomor</th>
										<th>Tanggal</th>
										<th>Notaris</th>
										<th>Komisaris</th>
										<th>Direktur</th>
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
				</div>

				<div class="mb-3">
					<div class="row">
						<div class="col-12 col-lg-3">
							<b>Akta Pendirian</b>
						</div>
						<div class="col-12 col-lg-9">
							<table class="table w-100 table-bordered">
								<thead>
									<tr>
										<th>Nomor</th>
										<th>Tanggal</th>
										<th>Notaris</th>
										<th>Komisaris</th>
										<th>Direktur</th>
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
