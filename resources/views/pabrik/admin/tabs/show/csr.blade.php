<div class="accordion" id="accordion-csr">
    <button type="button" class="btn btn-sm btn-success btn-bordered waves-effect waves-light mb-3 rounded-2">
        <i class="fa fa-plus"></i> Tambah Data CSR / Kontribusi
    </button>
    {{-- Realisasi --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-realisasi">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#realisasi"
                aria-controls="realisasi">
                Realisasi
            </button>
        </h2>
        <div id="realisasi" class="accordion-collapse collapse show" aria-labelledby="header-realisasi"
            data-bs-parent="#accordion-csr">
            <div class="accordion-body">
                <table id="realisasis" class="table table-striped w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Jenis Kegiatan</th>
                            <th>Nilai Setara</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    {{-- Masih Rencana --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-rencana">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#rencana" aria-controls="rencana">
                Masih Rencana
            </button>
        </h2>
        <div id="rencana" class="accordion-collapse collapse" aria-labelledby="header-rencana"
            data-bs-parent="#accordion-csr">
            <div class="accordion-body">
                <table id="rencanas" class="table table-striped w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Jenis Kegiatan</th>
                            <th>Nilai Setara</th>
                            <th>Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

</div>
