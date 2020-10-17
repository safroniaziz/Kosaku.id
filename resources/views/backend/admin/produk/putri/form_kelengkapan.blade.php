<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Kategori Produk</label></label>
    <select name="kategori_id" value="{{ old('kategori_id') }}"  class="form-control" id="kategori_id" style="font-size:13px;">
        <option value="" disabled selected>-- pilih kategori produk --</option>
        @foreach ($kategoris as $kategori)
            <option value="{{ $kategori->id }}"> {{ $kategori->nm_kategori }}</option>
        @endforeach
    </select>
    @if ($errors->has('kategori_id'))
        <small class="form-text text-danger">{{ $errors->first('kategori_id') }}</small>
    @endif
</div>
<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Nama Pemilik</label>
    <input type="text" name="nm_pemilik" value="{{ old('nm_pemilik') }}" class="tags form-control" />
    @if ($errors->has('nm_pemilik'))
        <small class="form-text text-danger">{{ $errors->first('nm_pemilik') }}</small>
    @endif
</div>
<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Nama Kost-Kostan</label>
    <input type="text" name="nm_vendor" value="{{ old('nm_vendor') }}" class="tags form-control" />
    @if ($errors->has('nm_vendor'))
        <small class="form-text text-danger">{{ $errors->first('nm_vendor') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Jumlah Kamar : <a class="text-danger">masukan angka tanpa titik koma</a> </label>
    <input type="number" name="jumlah_kamar" value="{{ old('jumlah_kamar') }}" class="form-control">
    @if ($errors->has('jumlah_kamar'))
        <small class="form-text text-danger">{{ $errors->first('jumlah_kamar') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Jumlah Kamar Kosong : <a class="text-danger">masukan angka tanpa titik koma</a> </label>
    <input type="number" name="kamar_kosong" value="{{ old('kamar_kosong') }}" class="form-control">
    @if ($errors->has('kamar_kosong'))
        <small class="form-text text-danger">{{ $errors->first('kamar_kosong') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Luas Kamar :</a> </label>
    <input type="text" name="luas_kamar" value="{{ old('luas_kamar') }}" class="form-control">
    @if ($errors->has('luas_kamar'))
        <small class="form-text text-danger">{{ $errors->first('luas_kamar') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Latitude :</a> </label>
    <input type="text" name="latitude" value="{{ old('latitude') }}" class="form-control">
    @if ($errors->has('latitude'))
        <small class="form-text text-danger">{{ $errors->first('latitude') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Longitude :</a> </label>
    <input type="text" name="longitude" value="{{ old('longitude') }}" class="form-control">
    @if ($errors->has('longitude'))
        <small class="form-text text-danger">{{ $errors->first('longitude') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Harga Sewa :</a> </label>
    <input type="number" name="harga_sewa" value="{{ old('harga_sewa') }}" class="form-control">
    @if ($errors->has('harga_sewa'))
        <small class="form-text text-danger">{{ $errors->first('harga_sewa') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Jenis Kost-kostan :</a> </label>
    <select name="jenis_kategori" class="form-control">
        <option disabled selected>-- pilih jenis kost-kostan --</option>
        <option value="putri">Kostan Putri</option>
        <option value="putra">Kostan Putra</option>
        <option value="campuran">Campuran</option>
    </select>
    @if ($errors->has('jenis_kategori'))
        <small class="form-text text-danger">{{ $errors->first('jenis_kategori') }}</small>
    @endif
</div>
<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Jenis Kerja Sama :</a> </label>
    <select name="jenis_kerja_sama" class="form-control">
        <option disabled selected>-- pilih jenis kerja sama --</option>
        <option value="silver">Paket Silver</option>
        <option value="gold">Paket Gold</option>
        <option value="premium">Paket Premium</option>
    </select>
    @if ($errors->has('jenis_kerja_sama'))
        <small class="form-text text-danger">{{ $errors->first('jenis_kerja_sama') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Foto Thumbnail :</a> </label>
    <input type="file" name="foto_thumbnail" value="{{ old('foto_thumbnail') }}" style="padding-bottom: 30px !important;" class="form-control" enctype="multipart/form-data">
    @if ($errors->has('foto_thumbnail'))
        <small class="form-text text-danger">{{ $errors->first('foto_thumbnail') }}</small>
    @endif
</div>

<div class="form-group col-md-12">
    <label for="exampleInputEmail1">Alamat Singkat :</a> </label>
    <textarea name="alamat_singkat" id="" cols="30" rows="3" class="form-control">{{ old('alamat_singkat') }}</textarea>
    @if ($errors->has('alamat_singkat'))
        <small class="form-text text-danger">{{ $errors->first('alamat_singkat') }}</small>
    @endif
</div>

<div class="form-group col-md-12">
    <label for="exampleInputEmail1">Alamat Lengkap :</a> </label>
    <textarea name="alamat_lengkap" id="" cols="30" rows="3" class="form-control">{{ old('alamat_lengkap') }}</textarea>
    @if ($errors->has('alamat_lengkap'))
        <small class="form-text text-danger">{{ $errors->first('alamat_lengkap') }}</small>
    @endif
</div>

<div class="form-group col-md-12">
    <label for="exampleInputEmail1">Deskripsi Lengkap :</a> </label>
    <textarea name="deskripsi" class="form-control" cols="30" rows="3">{{ old('deskripsi') }}</textarea>
    @if ($errors->has('deskripsi'))
        <small class="form-text text-danger">{{ $errors->first('deskripsi') }}</small>
    @endif
</div>