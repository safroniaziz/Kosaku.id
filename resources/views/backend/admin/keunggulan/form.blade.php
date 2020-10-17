<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Judul :</a> </label>
    <input type="text" name="judul" value="{{ old('judul') }}" class="form-control">
    @if ($errors->has('judul'))
        <small class="form-text text-danger">{{ $errors->first('judul') }}</small>
    @endif
</div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Isi :</a> </label>
    <input type="text" name="isi" value="{{ old('isi') }}" class="form-control">
    @if ($errors->has('isi'))
        <small class="form-text text-danger">{{ $errors->first('isi') }}</small>
    @endif
</div>
