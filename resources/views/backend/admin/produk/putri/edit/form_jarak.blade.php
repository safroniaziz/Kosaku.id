<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Jarak Dengan Kantor Pemadam Kebakaran <a style="color:red">(Satuan KM)</a>:</a> </label>
    <input type="number" name="jarak_damkar" value="{{ $produk->jarak_damkar }}" class="form-control">
    @if ($errors->has('jarak_damkar'))
        <small class="form-text text-danger">{{ $errors->first('jarak_damkar') }}</small>
    @endif
</div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Jarak Dengan Rumah Sakit Terdekat <a style="color:red">(Satuan KM)</a>:</a> </label>
    <input type="number" name="jarak_rs_terdekat" value="{{ $produk->jarak_rs_terdekat }}" class="form-control">
    @if ($errors->has('jarak_rs_terdekat'))
        <small class="form-text text-danger">{{ $errors->first('jarak_rs_terdekat') }}</small>
    @endif
</div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Jarak Dengan Pusat Kota <a style="color:red">(Satuan KM)</a>:</a> </label>
    <input type="number" name="jarak_pusat_kota" value="{{ $produk->jarak_pusat_kota }}" class="form-control">
    @if ($errors->has('jarak_pusat_kota'))
        <small class="form-text text-danger">{{ $errors->first('jarak_pusat_kota') }}</small>
    @endif
</div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Jarak Dengan Kantor Polisi Terdekat <a style="color:red">(Satuan KM)</a>:</a> </label>
    <input type="number" name="jarak_polisi_terdekat" value="{{ $produk->jarak_polisi_terdekat }}" class="form-control">
    @if ($errors->has('jarak_polisi_terdekat'))
        <small class="form-text text-danger">{{ $errors->first('jarak_polisi_terdekat') }}</small>
    @endif
</div>

<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Jarak Dengan Puskesmas Terdekat <a style="color:red">(Satuan KM)</a>:</a> </label>
    <input type="number" name="jarak_puskesmas" value="{{ $produk->jarak_puskesmas }}" class="form-control">
    @if ($errors->has('jarak_puskesmas'))
        <small class="form-text text-danger">{{ $errors->first('jarak_puskesmas') }}</small>
    @endif
</div>

<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Jarak Dengan Pasar Terdekat <a style="color:red">(Satuan KM)</a>:</a> </label>
    <input type="number" name="jarak_pasar" value="{{ $produk->jarak_pasar }}" class="form-control">
    @if ($errors->has('jarak_pasar'))
        <small class="form-text text-danger">{{ $errors->first('jarak_pasar') }}</small>
    @endif
</div>