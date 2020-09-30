@extends('layouts.backend')
@section('title', 'Tambah Produk')
@section('login_as', 'Administrator')
@section('user-login')
@endsection
@section('user-login2')
@endsection
@section('login_as', 'Dosen Pengusul')
@section('sidebar-menu')
    @include('backend/admin/sidebar')
@endsection
@push('styles')
    <style>
        #selengkapnya{
            color:#5A738E;
            text-decoration:none;
            cursor:pointer;
        }
        #selengkapnya:hover{
            color:#007bff;
        }
    </style>
@endpush
@section('content')
    <section class="panel" style="margin-bottom:20px;">
        <header class="panel-heading" style="color: #ffffff;background-color: #074071;border-color: #fff000;border-image: none;border-style: solid solid none;border-width: 4px 0px 0;border-radius: 0;font-size: 14px;font-weight: 700;padding: 15px;">
            <i class="fa fa-home"></i>&nbsp;Form Tambah Data Produk
        </header>
        <div class="panel-body" style="border-top: 1px solid #eee; padding:15px; background:white;">
            <div class="row" style="margin-right:-15px; margin-left:-15px;">
                <div class="col-md-12">
                    <div class="alert alert-primary alert-block text-center" id="keterangan">
                        
                        <strong class="text-uppercase"><i class="fa fa-info-circle"></i>&nbsp;Perhatian: </strong><br> Silahkan tambahkan usulan kegiatan anda, harap melengkapi data terlebih dahulu agar proses pengajuan usulan tidak ada masalah kedepannya !!
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('admin.produk_putri') }}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                </div>
                <form action="{{ route('admin.produk_putri.post') }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <div class="col-md-12">
                        <div class="col-md-12 mb-2 mt-2">
                            <strong>Langkah 1: Masukan Kelengkapan Data Produk</strong>
                        </div>
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
                            <input type="text" name="harga_sewa" value="{{ old('harga_sewa') }}" class="form-control">
                            @if ($errors->has('harga_sewa'))
                                <small class="form-text text-danger">{{ $errors->first('harga_sewa') }}</small>
                            @endif
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Jenis Kost-kostan :</a> </label>
                            <select name="jenis_kostan" class="form-control">
                                <option disabled selected>-- pilih jenis kost-kostan --</option>
                                <option value="putri">Kostan Putri</option>
                                <option value="putra">Kostan Putra</option>
                                <option value="campuran">Campuran</option>
                            </select>
                            @if ($errors->has('jenis_kostan'))
                                <small class="form-text text-danger">{{ $errors->first('jenis_kostan') }}</small>
                            @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Jenis Kerja Sama :</a> </label>
                            <select name="jenis_kostan" class="form-control">
                                <option disabled selected>-- pilih jenis kerja sama --</option>
                                <option value="silver">Paket Silver</option>
                                <option value="gold">Paket Gold</option>
                                <option value="premium">Paket Premium</option>
                            </select>
                            @if ($errors->has('jenis_kostan'))
                                <small class="form-text text-danger">{{ $errors->first('jenis_kostan') }}</small>
                            @endif
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Foto Thumbnail :</a> </label>
                            <input type="text" name="thumbnail" value="{{ old('thumbnail') }}" class="form-control">
                            @if ($errors->has('thumbnail'))
                                <small class="form-text text-danger">{{ $errors->first('thumbnail') }}</small>
                            @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Alamat Lengkap :</a> </label>
                            <textarea name="alamat_lengkap" class="form-control" cols="30" rows="3">{{ old('alamat_lengkap') }}</textarea>
                            @if ($errors->has('alamat_lengkap'))
                                <small class="form-text text-danger">{{ $errors->first('alamat_lengkap') }}</small>
                            @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Deskripsi Lengkap :</a> </label>
                            <textarea name="deskripsi" class="form-control" cols="30" rows="3">{{ old('deskripsi') }}</textarea>
                            @if ($errors->has('deskripsi'))
                                <small class="form-text text-danger">{{ $errors->first('deskripsi') }}</small>
                            @endif
                        </div>

                        <div class="col-md-12 mb-2 mt-2">
                            <strong>Langkah 2: Masukan Kelengkapan Fasilitas</strong>
                        </div>

                        @include('backend/admin/produk.form_fasilitas')

                        <div class="col-md-12 mb-2 mt-2">
                            <strong>Langkah 3: Masukan Jarak Dengan Lokasi Darurat</strong>
                        </div>
                        @include('backend/admin/produk.form_jarak')

                        <div class="col-md-12 mb-2 mt-2">
                            <strong>Langkah 3: Masukan Daftar Foto Kost-Kostan Maksimal 3</strong>
                        </div>
                        @include('backend/admin/produk.form_foto')
                    </div>
                    <div class="col-md-12 text-center">
                        <hr style="width: 50%" class="mt-0">
                        <button type="reset" name="reset" class="btn btn-danger btn-sm"><i class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check-circle"></i>&nbsp;Kirim Usulan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                responsive : true,
            });
        } );
    </script>
@endpush