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
            <i class="fa fa-home"></i>&nbsp;HALAMAN DETAIL INFORMASI
        </header>
        @if (!empty($details))
            <div class="panel-body" style="border-top: 1px solid #eee; padding:15px; background:white;">
                <div class="row" style="margin-right:-15px; margin-left:-15px;">
                    <div class="col-md-12">
                        <div class="alert alert-primary alert-block text-center text-uppercase" id="berhasil">
                            
                            <strong><i class="fa fa-info-circle"></i>&nbsp;Detail Informasi Produk {{ $details[0]->nm_vendor }} : </strong> <br>
                            
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="{{ route('admin.produk_putri') }}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                        <a href="{{ route('admin.produk_putri.edit',[$details[0]->id, $details[0]->slug]) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>&nbsp; Lakukan Perubahan</a>
                    </div>
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h6>Galeri Produk</h6>
                                
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="x_content mt-3">
                                            @foreach($galeris as $galeri)
                                                <div class="card-deck col-md-3">
                                                    <div class="card">
                                                    <img class="card-img-top" src="{{ asset('storage/'.$galeri->foto_detail) }}" style="width: 100%" alt="">
                                                        <div class="card-body text-center">
                                                            <form method="POST" action="{{ route('admin.produk_putri.galeri.delete',[$galeri->id,$details[0]->id,$details[0]->slug]) }}">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                <input type="hidden" name="id" id="id">
                                                                <button type="submit" class="btn btn-danger btn-sm" style="color:white;"><i class="fa fa-check-circle"></i>&nbsp; Hapus Galeri !</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="ml-3">
                                    <a href="{{ route('admin.produk_putri.add_galeri',[$details[0]->id,$details[0]->slug]) }}" class="btn btn-info btn-sm text-white"><i class="fa fa-plus"></i>&nbsp; Tambah Galeri Produk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="x_panel">
                            <div class="x_title">
                                <h6>Detail Produk</h6>
                                <div class="clearfix"></div>
                                <div class="x_content mt-3">
                                    <table class="table table-hover">
                                        <tr>
                                            <th style="width: 20%">Nama Produk</th>
                                            <td style="width: 2%"> : </td>
                                            <td>{{ $details[0]->nm_vendor }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%">Jenis Pemilik</th>
                                            <td style="width: 2%"> : </td>
                                            <td>{{ $details[0]->nm_pemilik }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%">Provinsi</th>
                                            <td style="width: 2%"> : </td>
                                            <td>{{ $details[0]->nm_provinsi }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%">Kota</th>
                                            <td style="width: 2%"> : </td>
                                            <td>{{ $details[0]->nm_kota }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%">Kecamatan</th>
                                            <td style="width: 2%"> : </td>
                                            <td>{{ $details[0]->nm_kecamatan }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%">Kelurahan</th>
                                            <td style="width: 2%"> : </td>
                                            <td>{{ $details[0]->nm_kelurahan }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%">Harga Sewa</th>
                                            <td style="width: 2%"> : </td>
                                            <td>{{ $details[0]->harga_sewa }}</td>
                                        </tr>
                                    
                                        <tr>
                                            <th style="width: 20%">Luas Kamar</th>
                                            <td style="width: 2%"> : </td>
                                            <td>{{ $details[0]->luas_kamar }} m</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%">Jumlah Kamar</th>
                                            <td style="width: 2%"> : </td>
                                            <td>{{ $details[0]->kamar_kosong }} / {{ $details[0]->jumlah_kamar }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%">Jenis Produk</th>
                                            <td style="width: 2%"> : </td>
                                            <td>{{ $details[0]->nm_kategori }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%">Jenis kategori</th>
                                            <td style="width: 2%"> : </td>
                                            <td>
                                                @if ($details[0]->jenis_kategori == "putri")
                                                    Khusus Putri
                                                    @elseif ($details[0]->jenis_kategori == "putra")
                                                    Khusus Putra
                                                    @else
                                                    Campuran
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%">Jenis Kerja Sama</th>
                                            <td style="width: 2%"> : </td>
                                            <td>
                                                @if ($details[0]->jenis_kerja_sama == "gold")
                                                    Gold (Potongan 5%)
                                                    @elseif($details[0]->jenis_kerja_sama == "silver")
                                                    Silver (Potongan 2.5%)
                                                    @else
                                                    Platinum (Potongan 10%)
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%">Deskripsi Lengkap</th>
                                            <td style="width: 2%"> : </td>
                                            <td>{!! $details[0]->deskripsi !!}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%">Alamat Singkat</th>
                                            <td style="width: 2%"> : </td>
                                            <td>{{ $details[0]->alamat_lengkap }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%">Alamat Lengkap</th>
                                            <td style="width: 2%"> : </td>
                                            <td>{{ $details[0]->alamat_lengkap }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h6>Fasilitas Yang Disediakan</h6>
                                        <div class="clearfix"></div>
                                        <div class="x_content mt-3">
                                            @if (!empty($fasilitas))
                                                <table class="table table-hover">
                                                    <tr>
                                                        <th style="width: 50%">Kamar Mandi Dalam</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>
                                                            @if ($fasilitas[0]->kamar_mandi_dalam == "1")
                                                                <label for="" class="badge badge-success"><i class="fa fa-check-circle"></i>&nbsp; Disediakan</label>
                                                                @else
                                                                <label for="" class="badge badge-danger"><i class="fa fa-close"></i>&nbsp; Tidak Disediakan</label>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Dapur Umum</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>
                                                            @if ($fasilitas[0]->dapur_umum == "1")
                                                                <label for="" class="badge badge-success"><i class="fa fa-check-circle"></i>&nbsp; Disediakan</label>
                                                                @else
                                                                <label for="" class="badge badge-danger"><i class="fa fa-close"></i>&nbsp; Tidak Disediakan</label>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Kamar Mandi Umum</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>
                                                            @if ($fasilitas[0]->kamar_mandi_umum == "1")
                                                                <label for="" class="badge badge-success"><i class="fa fa-check-circle"></i>&nbsp; Disediakan</label>
                                                                @else
                                                                <label for="" class="badge badge-danger"><i class="fa fa-close"></i>&nbsp; Tidak Disediakan</label>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Dapur Dalam</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>
                                                            @if ($fasilitas[0]->dapur_dalam == "1")
                                                                <label for="" class="badge badge-success"><i class="fa fa-check-circle"></i>&nbsp; Disediakan</label>
                                                                @else
                                                                <label for="" class="badge badge-danger"><i class="fa fa-close"></i>&nbsp; Tidak Disediakan</label>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Koneksi Internet</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>
                                                            @if ($fasilitas[0]->wifi == "1")
                                                                <label for="" class="badge badge-success"><i class="fa fa-check-circle"></i>&nbsp; Disediakan</label>
                                                                @else
                                                                <label for="" class="badge badge-danger"><i class="fa fa-close"></i>&nbsp; Tidak Disediakan</label>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Pendingin Ruangan</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>
                                                            @if ($fasilitas[0]->ac == "1")
                                                                <label for="" class="badge badge-success"><i class="fa fa-check-circle"></i>&nbsp; Disediakan</label>
                                                                @else
                                                                <label for="" class="badge badge-danger"><i class="fa fa-close"></i>&nbsp; Tidak Disediakan</label>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Kasur</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>
                                                            @if ($fasilitas[0]->kasur == "1")
                                                                <label for="" class="badge badge-success"><i class="fa fa-check-circle"></i>&nbsp; Disediakan</label>
                                                                @else
                                                                <label for="" class="badge badge-danger"><i class="fa fa-close"></i>&nbsp; Tidak Disediakan</label>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Lemari</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>
                                                            @if ($fasilitas[0]->lemari == "1")
                                                                <label for="" class="badge badge-success"><i class="fa fa-check-circle"></i>&nbsp; Disediakan</label>
                                                                @else
                                                                <label for="" class="badge badge-danger"><i class="fa fa-close"></i>&nbsp; Tidak Disediakan</label>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Listrik</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>
                                                            @if ($fasilitas[0]->listrik == "1")
                                                                <label for="" class="badge badge-success"><i class="fa fa-check-circle"></i>&nbsp; Sudah masuk dipembayaran</label>
                                                                @else
                                                                <label for="" class="badge badge-danger"><i class="fa fa-close"></i>&nbsp; Belum masuk dipembayaran</label>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 50%">Air</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>
                                                            @if ($fasilitas[0]->air == "1")
                                                                <label for="" class="badge badge-success"><i class="fa fa-check-circle"></i>&nbsp; Sudah masuk dipembayaran</label>
                                                                @else
                                                                <label for="" class="badge badge-danger"><i class="fa fa-close"></i>&nbsp; Belum masuk di pembayaran</label>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h6>Jarak Dengan Lokasi Terdekat</h6>
                                        <div class="clearfix"></div>
                                        <div class="x_content mt-3">
                                            @if (!empty($jaraks))
                                                <table class="table table-hover">
                                                    <tr>
                                                        <th style="width: 20%">Jarak Ke Rumah Sakit Terdekat</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>{{ $jaraks[0]->jarak_rs_terdekat }} km</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 20%">Jarak Ke Pemadam Kebakaran</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>{{ $jaraks[0]->jarak_damkar }} km</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 20%">Jarak Ke Pusat Kota</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>{{ $jaraks[0]->jarak_pusat_kota }} km</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 20%">Jarak Ke Polisi Terdekat</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>{{ $jaraks[0]->jarak_polisi_terdekat }} km</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 20%">Jarak Ke Puskesmas Terdekat</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>{{ $jaraks[0]->jarak_puskesmas }} km</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 20%">Jarak Ke Pasar terdekat</th>
                                                        <td style="width: 2%"> : </td>
                                                        <td>{{ $jaraks[0]->jarak_pasar }}</td>
                                                    </tr>
                                                </table>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection