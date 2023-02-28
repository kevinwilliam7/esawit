@php
    $legalitas = [['view' => 'UKL-UPL/RKL-RPL/AMDAL', 'name' => 'amdal'], ['view' => 'SIUP', 'name' => 'siupp'], ['view' => 'SITU', 'name' => 'situ'], ['view' => 'HGB', 'name' => 'hgb'], ['view' => 'IMB Pabrik', 'name' => 'imb_pabrik'], ['view' => 'IMB Perumahan', 'name' => 'imb_perumahan'], ['view' => 'Izin Gangguan HO', 'name' => 'ijin_gangguan'], ['view' => 'Izin Pembuangan Air Limbah', 'name' => 'ijin_limbah_cair'], ['view' => 'Izin Radio', 'name' => 'ijin_radio'], ['view' => 'Land Application', 'name' => 'land_aplikasi'], ['view' => 'Izin Mesin-Mesin Pabrik', 'name' => 'mesin_pabrik'], ['view' => 'Izin Timbang', 'name' => 'ijin_timbang']];
@endphp
<div class="accordion" id="legalitas">
    @foreach ($legalitas as $legal)
        <div class="accordion-item">
            <h2 class="accordion-header m-0" id="header-{{ $legal['name'] }}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#{{ $legal['name'] }}" aria-controls="{{ $legal['name'] }}">
                    {{ $legal['view'] }}
                </button>
            </h2>
            <div id="{{ $legal['name'] }}" class="accordion-collapse collapse"
                aria-labelledby="header-{{ $legal['name'] }}" data-bs-parent="#legalitas">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3">
                            <label class="form-label">Nomor {{ $legal['view'] }}</label>
                            <input type="text" name="nomor_{{ $legal['name'] }}" class="form-control"
                                value="{{ old('nomor_' . $legal['name']) }}">
                            @error('nomor_' . $legal['name'])
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <label class="form-label">Penjabat Penerbit</label>
                            <input type="text" name="penjabat_{{ $legal['name'] }}" class="form-control"
                                value="{{ old('penjabat_' . $legal['name']) }}">
                            @error('penjabat_' . $legal['name'])
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-lg-4 mb-3">
                            <label class="form-label">Tanggal Penetapan</label>
                            <input type="date" name="ditetapkan_{{ $legal['name'] }}" class="form-control"
                                value="{{ old('ditetapkan_' . $legal['name']) }}">
                            @error('ditetapkan_' . $legal['name'])
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-lg-4 mb-3">
                            <label class="form-label">Tanggal Berakhir</label>
                            <input type="date" name="berakhir_{{ $legal['name'] }}" class="form-control"
                                value="{{ old('berakhir_' . $legal['name']) }}">
                            @error('berakhir_' . $legal['name'])
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-lg-4 mb-3">
                            <label class="form-label">Berkas {{ $legal['view'] }} (pdf)</label>
                            <input type="file" name="{{ $legal['name'] }}" class="form-control" accept="application/pdf">
                            @error($legal['name'])
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Keterangan</label>
                            <textarea name="keterangan_{{ $legal['name'] }}" cols="30" rows="5" class="form-control">{{ old('keterangan'.$legal['view']) }}</textarea>
                            @error($legal['name'])
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
