<button type="button" class="btn btn-sm btn-success btn-bordered waves-effect waves-light mb-3 rounded-2">
    <i class="fa fa-plus"></i> Tambah Lokasi
</button>
<table id="lokasis" class="table table-striped w-100" style="font-size: 14px;">
    <thead>
        <tr>
            <th>No</th>
            <th>Kabupaten</th>
            <th>Kecamatan</th>
            <th>Desa</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pabrik->lokasis as $lokasi)
            <tr data-id="{{ $lokasi->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $lokasi->desa->kecamatan->kabupaten->name }}</td>
                <td>{{ $lokasi->desa->kecamatan->name }}</td>
                <td>{{ $lokasi->desa->name }}</td>
                <td>
                    <button class="btn btn-warning rounded-2">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button class="btn btn-danger rounded-2">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
