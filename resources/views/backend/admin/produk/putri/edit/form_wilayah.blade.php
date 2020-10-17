<div class="form-group col-md-6">
    <label for="">Pilih Provinsi</label>
    <select name="provinsi_id" class="form-control" id="provinsi_id">
        <option disabled selected>-- pilih provinsi --</option>
        @foreach ($provinsis as $provinsi)
            <option value="{{ $provinsi->id }}" {{ old('provinsi_id') == $provinsi->id ? 'selected' : '' }}>{{ $provinsi->nm_provinsi }}</option>
        @endforeach
    </select>
    @if ($errors->has('provinsi_id'))
        <small class="form-text text-danger">{{ $errors->first('provinsi_id') }}</small>
    @endif
</div>
<div class="form-group col-md-6">
    <label for="">Pilih Kota</label>
    <select name="kota_id" id="kota_id" class="form-control">
        <option disabled selected>-- pilih kota --</option>
    </select>
    @if ($errors->has('kota_id'))
        <small class="form-text text-danger">{{ $errors->first('kota_id') }}</small>
    @endif
</div>
<div class="form-group col-md-6">
    <label for="">Pilih Kecamatan</label>
    <select name="kecamatan_id" id="kecamatan_id" class="form-control">
        <option disabled selected>-- pilih kecamatan --</option>
    </select>
    @if ($errors->has('kecamatan_id'))
        <small class="form-text text-danger">{{ $errors->first('kecamatan_id') }}</small>
    @endif
</div>
<div class="form-group col-md-6">
    <label for="">Pilih Kelurahan</label>
    <select name="kelurahan_id" id="kelurahan_id" class="form-control">
        <option disabled selected>-- pilih kecamatan --</option>
    </select>
    @if ($errors->has('kelurahan_id'))
        <small class="form-text text-danger">{{ $errors->first('kelurahan_id') }}</small>
    @endif
</div>