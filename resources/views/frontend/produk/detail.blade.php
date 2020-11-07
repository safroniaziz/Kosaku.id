@extends('layouts.produks')
@section('produk-title')
    Detail Kost-kostan
@endsection

@section('second-title')
    KHUSUS {{ $produk->jenis_kategori }}
@endsection
@section('third-title')
    Rp.{{ number_format($produk->harga_sewa -$produk->diskon) }}
@endsection
@section('produk-content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- Header -->
                <div class="heading-properties clearfix sidebar-widget">
                    <div class="pull-left">
                        <h3>{{ $produk->nm_vendor }}</h3>
                        <p>
                            <i class="fa fa-map-marker"></i>{{ $produk->nm_kelurahan }},{{ $produk->nm_kecamatan }},{{ $produk->nm_kota }}
                        </p>
                    </div>
                    <div class="pull-right">
                        <h3><span>
                            <a style="color:black; font-size:12px; text-decoration:line-through">Rp.{{ number_format($all->harga_sewa) }}</a>
                            <a style="color:black; font-size:12px;">Rp.{{ number_format($all->harga_sewa - $all->diskon) }}</a>    
                        </span></h3>
                        <h5>
                            Per Tahun
                        </h5>
                    </div>
                </div>

                <!-- Properties detail slider start -->
                <div class="properties-detail-slider simple-slider mb-40">
                    <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                        <div class="carousel-outer">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                @foreach ($galeris as $index=>$galeri)
                                    <div class="item @if($index == '1') {{ 'active' }} @endif">
                                        <img src="{{ asset('storage/'.$galeri->foto_detail) }}" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                @endforeach
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                    <span class="slider-mover-left no-bg t-slider-r pojison" aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                    <span class="slider-mover-right no-bg t-slider-l pojison" aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators thumbs visible-lg visible-md">
                            @foreach ($galeris as $index=>$galeri)
                                <li data-target="#carousel-custom" data-slide-to="{{ $index }}" class=""><img src="{{ asset('storage/'.$galeri->foto_detail) }}" alt="Chevrolet Impala"></li>
                            @endforeach
                        </ol>
                    </div>
                </div>
                <!-- Properties detail slider end -->

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <!-- Properties details section start -->
                <div class="properties-details-section sidebar-widget">

                    <!-- Property description start -->
                    <div class="panel-box properties-panel-box Property-description">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="true">Fasilitas</a></li>
                            <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="false">Jarak Lokasi Penting</a></li>
                            <li class=""><a href="#tab3default" data-toggle="tab" aria-expanded="false">Titik Lokasi</a></li>
                            <li class=""><a href="#tab5default" data-toggle="tab" aria-expanded="false">Video</a></li>
                        </ul>
                        <div class="panel with-nav-tabs panel-default">
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1default">
                                        <div class="main-title-2" style="margin-bottom: 10px;">
                                            <h1><span>Deskripsi Dan Fasilitas</span></h1>
                                        </div>
                                        <p>
                                            {!! $produk->deskripsi !!}
                                        </p>
                                        <br>
                                        <!-- Properties condition start -->
                                        <div class="properties-condition">
                                    
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="condition">
                                                        <li style="{{ $produk->wifi == '0' ? 'color: red; text-decoration: line-through' : '' }}">
                                                            <i style="color: {{ $produk->wifi == "0" ? 'red' : ''}}" class="{{ $produk->wifi == "1" ? 'fa fa-check-square' : 'fa fa-close' }}"></i>Koneksi Internet
                                                        </li>
                                                        <li style="{{ $produk->ac == '0' ? 'color: red; text-decoration: line-through' : '' }}">
                                                            <i style="color: {{ $produk->ac == "0" ? 'red' : ''}}" class="{{ $produk->ac == "1" ? 'fa fa-check-square' : 'fa fa-close' }}"></i>Pendingin Ruangan
                                                        </li>
                                                        <li style="{{ $produk->kasur == '0' ? 'color: red; text-decoration: line-through' : '' }}">
                                                            <i style="color: {{ $produk->kasur == "0" ? 'red' : ''}}" class="{{ $produk->kasur == "1" ? 'fa fa-check-square' : 'fa fa-close' }}"></i>Kasur
                                                        </li>
                                                        <li style="{{ $produk->air == '0' ? 'color: red; text-decoration: line-through' : '' }}">
                                                            <i style="color: {{ $produk->air == "0" ? 'red' : ''}}" class="{{ $produk->air == "1" ? 'fa fa-check-square' : 'fa fa-close' }}"></i>Air Bersih
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="condition">
                                                        <li style="{{ $produk->kamar_mandi_dalam == '0' ? 'color: red; text-decoration: line-through' : '' }}">
                                                            <i style="color: {{ $produk->kamar_mandi_dalam == "0" ? 'red' : ''}}" class="{{ $produk->kamar_mandi_dalam == "1" ? 'fa fa-check-square' : 'fa fa-close' }}"></i>Kamar Mandi Dalam
                                                        </li>
                                                        <li style="{{ $produk->kamar_mandi_umum == '0' ? 'color: red; text-decoration: line-through' : '' }}">
                                                            <i style="color: {{ $produk->kamar_mandi_umum == "0" ? 'red' : ''}}" class="{{ $produk->kamar_mandi_umum == "1" ? 'fa fa-check-square' : 'fa fa-close' }}"></i>Kamar Mandi Umum
                                                        </li>
                                                        <li style="{{ $produk->lahan_parkir == '0' ? 'color: red; text-decoration: line-through' : '' }}">
                                                            <i style="color: {{ $produk->lahan_parkir == "0" ? 'red' : ''}}" class="{{ $produk->lahan_parkir == "1" ? 'fa fa-check-square' : 'fa fa-close' }}"></i>Lahan Parkir
                                                        </li>
                                                        <li style="{{ $produk->pengamanan == '0' ? 'color: red; text-decoration: line-through' : '' }}">
                                                            <i style="color: {{ $produk->pengamanan == "0" ? 'red' : ''}}" class="{{ $produk->pengamanan == "1" ? 'fa fa-check-square' : 'fa fa-close' }}"></i>Pengamanan / Penjaga Kost
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="condition">
                                                        <li style="{{ $produk->dapur_umum == '0' ? 'color: red; text-decoration: line-through' : '' }}">
                                                            <i style="color: {{ $produk->dapur_umum == "0" ? 'red' : ''}}" class="{{ $produk->dapur_umum == "1" ? 'fa fa-check-square' : 'fa fa-close' }}"></i>Dapur Umum
                                                        </li>
                                                        <li style="{{ $produk->dapur_dalam == '0' ? 'color: red; text-decoration: line-through' : '' }}">
                                                            <i style="color: {{ $produk->dapur_dalam == "0" ? 'red' : ''}}" class="{{ $produk->dapur_dalam == "1" ? 'fa fa-check-square' : 'fa fa-close' }}"></i>Dapur Dalam
                                                        </li>
                                                        <li style="{{ $produk->listrik == '0' ? 'color: red; text-decoration: line-through' : '' }}">
                                                            <i style="color: {{ $produk->listrik == "0" ? 'red' : ''}}" class="{{ $produk->listrik == "1" ? 'fa fa-check-square' : 'fa fa-close' }}"></i>Listrik
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p>
                                                <a href="#" class="btn button-md button-theme">Pesan dan Tanyakan Pada Kami</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade features" id="tab2default">
                                        <!-- Properties condition start -->
                                        <div class="properties-condition">
                                            <div class="main-title-2" style="margin-bottom: 10px;">
                                                <h1><span>Jarak Lokasi Terdekat</span></h1>
                                            </div>
                                            <div class="row table-responsive">
                                                <table class="table table-hover">
                                                    <tr>
                                                        <th>Jarak Rumah Sakit</th>
                                                        <th> : </th>
                                                        <th>{{ $produk->jarak_rs_terdekat }} Kilometer</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Jarak Pemadam Kebakaran</th>
                                                        <th> : </th>
                                                        <th>{{ $produk->jarak_damkar }} Kilometer</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Jarak Pusat Kota</th>
                                                        <th> : </th>
                                                        <th>{{ $produk->jarak_pusat_kota }} Kilometer</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Jarak Kantor Polisi</th>
                                                        <th> : </th>
                                                        <th>{{ $produk->jarak_polisi_terdekat }} Kilometer</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Jarak Puskesmas</th>
                                                        <th> : </th>
                                                        <th>{{ $produk->jarak_puskesmas }} Kilometer</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Jarak pasar</th>
                                                        <th> : </th>
                                                        <th>{{ $produk->jarak_pasar }} Kilometer</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Jarak Rumah Sakit</th>
                                                        <th> : </th>
                                                        <th>{{ $produk->jarak_rs_terdekat }} Kilometer</th>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Properties condition end -->
                                    </div>
                                    <div class="tab-pane fade technical" id="tab3default">
                                        <!-- Properties amenities start -->
                                        <div class="properties-amenities">
                                            <div class="main-title-2" style="margin-bottom: 10px;">
                                                <h1><span>Titik Lokasi</span></h1>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    Belum ada titik lokasi untuk ditampilkan
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Properties amenities end -->
                                    </div>
                             
                                    <div class="tab-pane fade" id="tab5default">
                                        <!-- Inside properties start  -->
                                        <div class="inside-properties">
                                            <!-- Main Title 2 -->
                                            <div class="main-title-2" style="margin-bottom: 10px;">
                                                <h1><span>Video Kostan</span></h1>
                                            </div>
                                            <p>Tidak ada video</p>
                                        </div>
                                        <!-- Inside properties end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Property description end -->
                </div>
                <!-- Properties details section end -->

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- Sidebar start -->
                <div class="sidebar right">
                <!-- Social media start -->
                <div class="social-media sidebar-widget clearfix">
                    <!-- Main Title 2 -->
                    <div class="main-title-2" style="margin-bottom: 10px;">
                        <h1><span>Social</span> Media</h1>
                    </div>
                    <!-- Social list -->
                    <ul class="social-list">
                        <li><a target="_blank" href="https://www.facebook.com/kosakujaya.mandiri.3" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/channel/UC-2W4xlP1mW5BsDO7Q0nUzQ" class="google-bg"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <!-- Social media end -->
                    <!-- Popular posts start -->
                    <div class="sidebar-widget popular-posts">
                        <div class="main-title-2" style="margin-bottom: 10px;">
                            <h1><span>Rekomendasi</span> Kostan</h1>
                        </div>
                        @foreach ($rekomendasis as $rekomendasi)
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="{{ asset('storage/'.$rekomendasi->foto_thumbnail) }}" alt="small-properties-1">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">
                                        <a href="properties-details.html">{{ $rekomendasi->nm_vendor }}</a>
                                    </h3>
                                    <p>{{ $rekomendasi->nm_kelurahan }},{{ $rekomendasi->nm_kecamatan }},{{ $rekomendasi->nm_kota }}</p>
                                    <div class="price">
                                        Rp.{{ number_format($rekomendasi->harga_sewa) }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Popular posts end -->

                    
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar end -->
            </div>
        </div>
    </div>
@endsection