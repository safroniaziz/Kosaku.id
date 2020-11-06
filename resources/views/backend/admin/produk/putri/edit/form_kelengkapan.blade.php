<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Kategori Produk</label></label>
    <select name="kategori_id" value="{{ $produk->kategori_id }}"  class="form-control" id="kategori_id" style="font-size:13px;">
        <option value="" disabled selected>-- pilih kategori produk --</option>
        @foreach ($kategoris as $kategori)
            <option value="{{ $kategori->id }}" {{ $produk->kategori_id == $kategori->id ? 'selected' : '' }}> {{ $kategori->nm_kategori }}</option>
        @endforeach
    </select>
    @if ($errors->has('kategori_id'))
        <small class="form-text text-danger">{{ $errors->first('kategori_id') }}</small>
    @endif
</div>
<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Nama Pemilik</label>
    <input type="text" name="nm_pemilik" value="{{ $produk->nm_pemilik }}" class="tags form-control" />
    @if ($errors->has('nm_pemilik'))
        <small class="form-text text-danger">{{ $errors->first('nm_pemilik') }}</small>
    @endif
</div>
<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Sekitaran Kampus</label>
    <select name="area_kampus" class="form-control">
        <option disabled selected>-- pilih area kampus --</option>
        <option value="tidakada  {{ $produk->area_kampus == "tidakada" ? 'selected' : '' }}">TIdak Ada</option>
        <option value="unib"  {{ $produk->area_kampus == "unib" ? 'selected' : '' }}>Kampus UNIB</option>
        <option value="unibpgsd"  {{ $produk->area_kampus == "unibpgsd" ? 'selected' : '' }}>Kampus UNIB PGSD</option>
        <option value="unibpenjaskes"  {{ $produk->area_kampus == "unibpenjaskes" ? 'selected' : '' }}>Kampus UNIB Penjaskes</option>
        <option value="unibpoltekkes"  {{ $produk->area_kampus == "unibpoltekkes" ? 'selected' : '' }}>Kampus UNIB Poltekkes </option>
        <option value="umb1"  {{ $produk->area_kampus == "umb1" ? 'selected' : '' }}>Kampus UMB Kampus 1 </option>
        <option value="umb2"  {{ $produk->area_kampus == "umb2" ? 'selected' : '' }}>Kampus UMB Kampus 2 </option>
        <option value="umb3"  {{ $produk->area_kampus == "umb3" ? 'selected' : '' }}>Kampus UMB Kampus 3 </option>
        <option value="umb4"  {{ $produk->area_kampus == "umb4" ? 'selected' : '' }}>Kampus UMB Kampus 4 </option>
        <option value="iain"  {{ $produk->area_kampus == "iain" ? 'selected' : '' }}>Kampus IAIN </option>
        <option value="unihaz"  {{ $produk->area_kampus == "unihaz" ? 'selected' : '' }}>Kampus UNIHAZ </option>
        <option value="unived"  {{ $produk->area_kampus == "unived" ? 'selected' : '' }}>Kampus UNIVED </option>
    </select>
    @if ($errors->has('area_kampus'))
        <small class="form-text text-danger">{{ $errors->first('area_kampus') }}</small>
    @endif
</div>
<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Nama Kost-Kostan</label>
    <input type="text" name="nm_vendor" value="{{ $produk->nm_vendor }}" class="tags form-control" />
    @if ($errors->has('nm_vendor'))
        <small class="form-text text-danger">{{ $errors->first('nm_vendor') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Jumlah Kamar : <a class="text-danger">masukan angka tanpa titik koma</a> </label>
    <input type="number" name="jumlah_kamar" value="{{ $produk->jumlah_kamar }}" class="form-control">
    @if ($errors->has('jumlah_kamar'))
        <small class="form-text text-danger">{{ $errors->first('jumlah_kamar') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Jumlah Kamar Kosong : <a class="text-danger">masukan angka tanpa titik koma</a> </label>
    <input type="number" name="kamar_kosong" value="{{ $produk->kamar_kosong }}" class="form-control">
    @if ($errors->has('kamar_kosong'))
        <small class="form-text text-danger">{{ $errors->first('kamar_kosong') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Luas Kamar :</a> </label>
    <input type="text" name="luas_kamar" value="{{ $produk->luas_kamar }}" class="form-control">
    @if ($errors->has('luas_kamar'))
        <small class="form-text text-danger">{{ $errors->first('luas_kamar') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Latitude :</a> </label>
    <input type="text" name="latitude" value="{{ $produk->latitude }}" class="form-control">
    @if ($errors->has('latitude'))
        <small class="form-text text-danger">{{ $errors->first('latitude') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Longitude :</a> </label>
    <input type="text" name="longitude" value="{{ $produk->longitude }}" class="form-control">
    @if ($errors->has('longitude'))
        <small class="form-text text-danger">{{ $errors->first('longitude') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Harga Sewa :</a> </label>
    <input type="number" name="harga_sewa" value="{{ $produk->harga_sewa }}" class="form-control">
    @if ($errors->has('harga_sewa'))
        <small class="form-text text-danger">{{ $errors->first('harga_sewa') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Diskon :</a> </label>
    <input type="number" name="diskon" value="{{ $produk->diskon }}" class="form-control">
    @if ($errors->has('diskon'))
        <small class="form-text text-danger">{{ $errors->first('diskon') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Jenis Kost-kostan :</a> </label>
    <select name="jenis_kategori" class="form-control">
        <option disabled selected>-- pilih jenis kost-kostan --</option>
        <option value="putri" {{ $produk->jenis_kategori == "putri" ? 'selected' : '' }}>Kostan Putri</option>
        <option value="putra" {{ $produk->jenis_kategori == "putra" ? 'selected' : '' }}>Kostan Putra</option>
        <option value="campuran" {{ $produk->jenis_kategori == "campuran" ? 'selected' : '' }}>Campuran</option>
    </select>
    @if ($errors->has('jenis_kategori'))
        <small class="form-text text-danger">{{ $errors->first('jenis_kategori') }}</small>
    @endif
</div>
<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Jenis Kerja Sama :</a> </label>
    <select name="jenis_kerja_sama" class="form-control">
        <option disabled selected>-- pilih jenis kerja sama --</option>
        <option value="silver" {{ $produk->jenis_kerja_sama == "silver" ? 'selected' : '' }}>Paket Silver</option>
        <option value="gold" {{ $produk->jenis_kerja_sama == "gold" ? 'selected' : '' }}>Paket Gold</option>
        <option value="premium" {{ $produk->jenis_kerja_sama == "premium" ? 'selected' : '' }}>Paket Premium</option>
    </select>
    @if ($errors->has('jenis_kerja_sama'))
        <small class="form-text text-danger">{{ $errors->first('jenis_kerja_sama') }}</small>
    @endif
</div>

<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Foto Thumbnail :</a> </label>
    <input type="file" name="foto_thumbnail" value="{{ $produk->foto_thumbnail }}" style="padding-bottom: 30px !important;" class="form-control" enctype="multipart/form-data">
    @if ($errors->has('foto_thumbnail'))
        <small class="form-text text-danger">{{ $errors->first('foto_thumbnail') }}</small>
    @endif
</div>

<div class="form-group col-md-12">
    <label for="exampleInputEmail1">Alamat Lengkap :</a> </label>
    <textarea name="alamat_lengkap" id="" cols="30" rows="3" class="form-control">{{ $produk->alamat_lengkap }}</textarea>
    @if ($errors->has('alamat_lengkap'))
        <small class="form-text text-danger">{{ $errors->first('alamat_lengkap') }}</small>
    @endif
</div>

<div class="form-group col-md-12">
    <label for="exampleInputEmail1">Deskripsi Lengkap :</a> </label>
    <textarea name="deskripsi" class="form-control" cols="30" rows="3">{{ $produk->deskripsi }}</textarea>
    @if ($errors->has('deskripsi'))
        <small class="form-text text-danger">{{ $errors->first('deskripsi') }}</small>
    @endif
</div>