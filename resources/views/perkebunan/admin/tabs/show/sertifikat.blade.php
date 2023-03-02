<table class="table table-striped" id="sertifikats">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Sertifikat</th>
            <th>Nama Sertifikat</th>
            <th>Nomor Surat</th>
            <th>Tanggal Diterbitkan</th>
            <th>Penjabat Penerbit</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($perkebunan->sertifikats as $sertifikat)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sertifikat->jenis }}</td>
                <td>{{ $sertifikat->nama_sertifikat }}</td>
                <td>{{ $sertifikat->nomor_surat }}</td>
                <td>{{ $sertifikat->tanggal_terbit }}</td>
                <td>{{ $sertifikat->penjabat }}</td>
                <td>{{ $sertifikat->kategori }}</td>
                <td>
                <td>
                    <button class="btn btn-warning btn-sm rounded-2" data-id="{{ $izin_lokasi->id }}">
                        <i class="fa fa-edit me-1"></i> Ubah
                    </button>
                </td>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
