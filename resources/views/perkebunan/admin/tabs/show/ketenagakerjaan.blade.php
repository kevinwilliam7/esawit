<table class="table w-100 table-striped text-center">
    <thead>
        <tr>
            <th>Jenis</th>
            <th>Bulanan</th>
            <th>Harian Tetap</th>
            <th>Harian Lepas</th>
            <th>Musiman / Borongan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tenaga Kerja Kebun</td>
            <td>{{ $perkebunan->bulanan_kebun ?? '-' }}</td>
            <td>{{ $perkebunan->tetap_kebun ?? '-' }}</td>
            <td>{{ $perkebunan->lepas_kebun ?? '-' }}</td>
            <td>{{ $perkebunan->musiman_kebun ?? '-' }}</td>
        </tr>

        <tr>
            <td>Tenaga Kerja Pabrik</td>
            <td>{{ $perkebunan->bulanan_pabrik ?? '-' }}</td>
            <td>{{ $perkebunan->tetap_pabrik ?? '-' }}</td>
            <td>{{ $perkebunan->lepas_pabrik ?? '-' }}</td>
            <td>{{ $perkebunan->musiman_pabrik ?? '-' }}</td>
        </tr>
    </tbody>
</table>
