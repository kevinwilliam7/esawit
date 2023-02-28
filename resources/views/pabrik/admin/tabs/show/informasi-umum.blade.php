<div style="font-size 16px;">
	<div class="mb-3">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Nama Perusahaan </b>
			</div>
			<div class="col-12 col-md-8 col-lg-10 px-md-0">{{ $pabrik->nama }}</div>
		</div>
	</div>
	
	<div class="mb-3">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>NPWP </b>
			</div>
			<div class="col-12 col-md-8 col-lg-10 px-md-0">{{ $pabrik->npwp ?? '-' }}</div>
		</div>
	</div>
	
	<div class="mb-3">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Pimpinan Perusahaan </b>
			</div>
			<div class="col-12 col-md-8 col-lg-4 px-md-0 mb-3 mb-lg-0">{{ $pabrik->pimpinan ?? '-' }}</div>
	
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Jabatan Pimpinan </b>
			</div>
			<div class="col-12 col-md-8 col-lg-4 px-md-0">{{ $pabrik->jabatan_pimpinan ?? '-' }}</div>
		</div>
	</div>
	
	<div class="mb-3">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Alamat Kantor Pusat </b>
			</div>
			<div class="col-12 col-md-8 col-lg-10 px-md-0">{{ $pabrik->alamat_kantor ?? '-' }}</div>
		</div>
	</div>
	
	<div class="mb-3">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Telepon </b>
			</div>
			<div class="col-12 col-md-8 col-lg-4 px-md-0 mb-3 mb-lg-0">{{ $pabrik->telepon ?? '-' }}</div>
	
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Email </b>
			</div>
			<div class="col-12 col-md-8 col-lg-4 px-md-0">{{ $pabrik->email ?? '-' }}</div>
		</div>
	</div>
	
	<div class="mb-3">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Tahun Mulai Beroperasi </b>
			</div>
			<div class="col-12 col-md-8 col-lg-10 px-md-0">{{ $pabrik->tahun_operasi ?? '-' }}</div>
		</div>
	</div>

	<div class="mb-3">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Luas Lokasi Pabrik (Ha) </b>
			</div>
			<div class="col-12 col-md-8 col-lg-10 px-md-0">{{ $pabrik->luas_lokasi_pabrik ?? '-' }}</div>
		</div>
	</div>

	<div class="mb-3">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Nama Grup Perusahaan </b>
			</div>
			<div class="col-12 col-md-8 col-lg-10 px-md-0">{{ $pabrik->nama_grup ?? '-' }}</div>
		</div>
	</div>

	<div class="mb-3">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Status Perusahaan </b>
			</div>
			<div class="col-12 col-md-8 col-lg-10 px-md-0">{{ $pabrik->status_perusahaan ?? '-' }}</div>
		</div>
	</div>

	<div class="mb-3">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Bursa Efek </b>
			</div>
			<div class="col-12 col-md-8 col-lg-10 px-md-0">{{ $pabrik->bursa_efek ?? '-' }}</div>
		</div>
	</div>

	<div class="mb-3">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Tenaga Kerja WNI </b>
			</div>
			<div class="col-12 col-md-8 col-lg-4 px-md-0 mb-3 mb-lg-0">{{ $pabrik->tenaga_kerja_wni ?? '-' }}</div>
	
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Tenaga Kerja Asing </b>
			</div>
			<div class="col-12 col-md-8 col-lg-4 px-md-0">{{ $pabrik->tenaga_kerja_asing ?? '-' }}</div>
		</div>
	</div>

	<div class="mb-3">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-2 text-md-end pe-md-2">
				<b>Kapasitas Produksi (Ton TBS/Jam) </b>
			</div>
			<div class="col-12 col-md-8 col-lg-10 px-md-0">{{ $pabrik->kapasitas_produksi ?? '-' }}</div>
		</div>
	</div>
</div>
