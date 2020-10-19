<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Judul Gambar :</a> </label>
    <input type="text" name="title" value="{{ old('title') }}" class="form-control">
    @if ($errors->has('title'))
        <small class="form-text text-danger">{{ $errors->first('title') }}</small>
    @endif
</div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Slogan :</a> </label>
    <input type="text" name="slogan" value="{{ old('slogan') }}" class="form-control">
    @if ($errors->has('slogan'))
        <small class="form-text text-danger">{{ $errors->first('slogan') }}</small>
    @endif
</div>
<div class="form-group increment col-md-12" >
    <label for="exampleInputEmail1">Gambar :</a> </label>
    <div class="input-group">
        <input type="file" name="slider" class="form-control" style="padding-bottom: 30px !important;">
        <div class="input-group-append">
            <a class="btn btn-outline-primary btn-add" style="cursor: pointer"><i class="fa fa-plus-square"></i></a>
        </div>
    </div>
    @if ($errors->has('slider'))
        <small class="form-text text-danger">{{ $errors->first('slider') }}</small>
    @endif
</div>

@push('scripts')
@endpush