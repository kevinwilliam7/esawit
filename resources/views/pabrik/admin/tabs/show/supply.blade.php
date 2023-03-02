<button type="button" class="btn btn-sm btn-success btn-bordered waves-effect waves-light mb-3 rounded-2">
    <i class="fa fa-plus"></i> Tambah Data Supply
</button>
<table id="suppliers" class="table table-striped w-100">
    <thead>
        <tr>
            <th>No</th>
            <th>Kebun Supplier</th>
            <th>Jumlah Supply (Ton)</th>
            <th>Jangka Waktu Supply</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pabrik->suppliers as $supplier)
            <tr data-id="{{ $supplier->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $supplier->nama_perkebunan }}</td>
                <td>{{ $supplier->jumlah_supply }}</td>
                <td>{{ $supplier->jangka_waktu }}</td>
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
