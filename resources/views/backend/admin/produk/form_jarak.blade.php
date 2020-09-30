<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Jarak Dengan Kantor Pemadam Kebakaran :</a> </label>
    <input type="text" name="jarak_damkar" value="{{ old('jarak_damkar') }}" class="form-control">
    @if ($errors->has('jarak_damkar'))
        <small class="form-text text-danger">{{ $errors->first('jarak_damkar') }}</small>
    @endif
</div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Jarak Dengan Pusat Kota :</a> </label>
    <input type="text" name="jarak_pusat_kota" value="{{ old('jarak_pusat_kota') }}" class="form-control">
    @if ($errors->has('jarak_pusat_kota'))
        <small class="form-text text-danger">{{ $errors->first('jarak_pusat_kota') }}</small>
    @endif
</div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Jarak Dengan Kantor Polisi Terdekat :</a> </label>
    <input type="text" name="jarak_polisi_terdekat" value="{{ old('jarak_polisi_terdekat') }}" class="form-control">
    @if ($errors->has('jarak_polisi_terdekat'))
        <small class="form-text text-danger">{{ $errors->first('jarak_polisi_terdekat') }}</small>
    @endif
</div>

<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Jarak Dengan Puskesmas Terdekat :</a> </label>
    <input type="text" name="jarak_puskesmas" value="{{ old('jarak_puskesmas') }}" class="form-control">
    @if ($errors->has('jarak_puskesmas'))
        <small class="form-text text-danger">{{ $errors->first('jarak_puskesmas') }}</small>
    @endif
</div>