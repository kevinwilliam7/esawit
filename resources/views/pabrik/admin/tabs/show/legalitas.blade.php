@php
    $legalitas = [['view' => 'UKL-UPL/RKL-RPL/AMDAL', 'name' => 'amdal'], ['view' => 'SIUP', 'name' => 'siupp'], ['view' => 'SITU', 'name' => 'situ'], ['view' => 'HGB', 'name' => 'hgb'], ['view' => 'IMB Pabrik', 'name' => 'imb_pabrik'], ['view' => 'IMB Perumahan', 'name' => 'imb_perumahan'], ['view' => 'Izin Gangguan HO', 'name' => 'ijin_gangguan'], ['view' => 'Izin Pembuangan Air Limbah', 'name' => 'ijin_limbah_cair'], ['view' => 'Izin Radio', 'name' => 'ijin_radio'], ['view' => 'Land Application', 'name' => 'land_aplikasi'], ['view' => 'Izin Mesin-Mesin Pabrik', 'name' => 'mesin_pabrik'], ['view' => 'Izin Timbang', 'name' => 'ijin_timbang']];
@endphp

<table id="legalitas" class="table table-striped w-100 overflow-auto d-block d-md-table my-0 mx-auto">
    <thead>
        <tr>
            <th>Nama</th>
			<th>Nomor</th>
            <th>Penjabat</th>
            <th>Penetapan</th>
            <th>Berakhir</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($legalitas as $legal)
            <tr>
                <td>
                    @if ($pabrik->{$legal['name']})
                        <a href="{{ asset('storage/'.$pabrik->{$legal['name']}) }}" target="_BLANK">{{ $legal['view'] }}</a>
					@else
						{{ $legal['view'] }}
                    @endif
                </td>
                <td>{{ $pabrik->{'nomor_' . $legal['name']} ?? '-' }}</td>
                <td>{{ $pabrik->{'penjabat_' . $legal['name']} ?? '-' }}</td>
                <td>{{ $pabrik->{'ditetapkan_' . $legal['name']} ?? '-' }}</td>
                <td>{{ $pabrik->{'berakhir_' . $legal['name']} ?? '-' }}</td>
                <td>{{ $pabrik->{'keterangan_' . $legal['name']} ?? '-' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
