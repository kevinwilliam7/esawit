<label class="form-label">Luas Izin Usaha Perkebunan (Ha)</label>
<input type="number" step="0.01" name="luas_iup" class="form-control" value="{{ old('luas_iup') }}">
@error('luas_iup')
    <div class="text-danger">{{ $message }}</div>
@enderror
