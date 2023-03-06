<button class="mb-3 btn btn-success btn-bordered btn-sm rounded-2">
    <i class="fa fa-plus me-1"></i> Tambah Data
</button>

<div class="accordion" id="kontribusi" style="font-size: 16px">

    {{-- Realisasi --}}
    <div class="accordion-item">
        <h2 class="accordion-header m-0" id="header-realisasi">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#realisasi"
                aria-controls="realisasi">
                Realisasi
            </button>
        </h2>
        <div id="realisasi" class="accordion-collapse collapse show" aria-labelledby="header-realisasi"
            data-bs-parent="#kontribusi">
            <div class="accordion-body">
                <table class="table table-striped w-100" id="realisasis">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Jenis Kegiatan</th>
                            <th>Tanggal</th>
                            <th>Nilai Setara</th>
                            <th>Lokasi</th>
                            <th>Aksi</th>
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
            data-bs-parent="#kontribusi">
            <div class="accordion-body">
                <table class="table table-striped w-100" id="rencanas">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Jenis Kegiatan</th>
                            <th>Tanggal</th>
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
