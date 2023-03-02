<button type="button" class="btn btn-sm btn-success btn-bordered waves-effect waves-light mb-3 rounded-2">
    <i class="fa fa-plus"></i> Tambah Data Produksi
</button>
<table id="produksis" class="table table-striped w-100">
    <thead>
        <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Nama Hasil Pabrik</th>
            <th>Jumlah Produksi (Ton)</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pabrik->produksis as $produksi)
            <tr data-id="{{ $produksi->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $produksi->tahun_produksi }}</td>
                <td>{{ $produksi->hasil_pabrik }}</td>
                <td>{{ $produksi->jumlah_produksi }}</td>
                <td>
                    <button class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                    </button>
                    {{-- <button class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
