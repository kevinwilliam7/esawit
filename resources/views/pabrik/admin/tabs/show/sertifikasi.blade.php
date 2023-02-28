<div class="row">
    <div class="col-12">Sertifikat Nasional / Internasional</div>
    <div class="col-12">
        @if ($pabrik->dokumen_sertifikat)
            <a href="{{ asset('storage/' . $pabrik->dokumen_sertifikat) }}" target="_BLANK">{{ $pabrik->nama_dokumen_sertifikat }}</a>
        @else
			<div class="text-muted">Belum ada sertifikat</div>
        @endif
    </div>
</div>
