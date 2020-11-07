@extends('layouts.frontend')

@section('content')
    <!-- Banner start -->
    <div class="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach ($sliders as $index=>$slider)
                    <div class="item @if($index == '1') {{ 'active' }} @endif item-100vh">
                        <img src="{{ asset('storage/'.$slider->gambar) }}" alt="banner-slider-1">
                        <div class="carousel-caption banner-slider-inner">
                            <div class="banner-content container banner-content-left">
                                <h1 data-animation="animated fadeInDown delay-05s"><span>{{ $slider->title }} </span> </h1>
                                <p data-animation="animated fadeInUp delay-1s">{{ $slider->slogan }}</p>
                                <a href="" class="btn button-md button-theme" data-animation="animated fadeInUp delay-15s">Download Versi Android</a>
                                <a href="{{ route('produk.semua') }}" class="btn button-md border-button-theme" data-animation="animated fadeInUp delay-15s">Daftar Produk Kostan</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="slider-mover-left" aria-hidden="true">
                    <i class="fa fa-angle-left"></i>
                </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="slider-mover-right" aria-hidden="true">
                    <i class="fa fa-angle-right"></i>
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Banner end -->

    <!-- Recently properties start -->
    <div class="mb-50 recently-properties chevron-icon" style="padding-top: 50px !important">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1><span>Rekomendasi</span> Kostan</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        Perhatian : Khusus Kost-Kostan Rekomendasi, Maka Customer Akan Mendapatkan Penjemputan Barang Gratis Seputar Kota Bengkulu, dan Gratis Isi Ulang Air Galon Sebanyak 15 Kali
                    </div>
                </div>
                <div class="carousel our-partners slide" id="ourPartners2">
                    <div class="col-lg-12 mrg-btm-30">
                        <a class="right carousel-control" href="#ourPartners2" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                        <a class="right carousel-control" href="#ourPartners2" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($rekomendasis as $index=>$rekomendasi)
                        <div class="item  @if($index == '1') {{ 'active' }} @endif">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Property 2 start -->
                                <div class="property-2">
                                    <!-- Property img -->
                                    <div class="property-img">
                                        <div class="featured">
                                            {{ $rekomendasi->nm_kategori }}
                                        </div>
                                        <div class="price-ratings">
                                            <div class="price">
                                                <h6 style="color: white; font-size:12px; color:#000; text-decoration:line-through">Rp.{{ number_format($rekomendasi->harga_sewa,2) }}</h6>
                                                <h6 style="color: white; font-size:12px; color:#000;">Rp.{{ number_format($rekomendasi->harga_sewa - $rekomendasi->diskon,2) }}</h6>
                                            </div>
                                            <div class="ratings" style="color: white; text-transform:uppercase;">
                                                KHUSUS {{ $rekomendasi->jenis_kategori }}
                                            </div>
                                        </div>
                                        <img src="{{ asset('storage/'.$rekomendasi->foto_thumbnail) }}" alt="rp" class="img-responsive">
                                        <div class="property-overlay">
                                           
                                        </div>
                                    </div>
                                    <!-- content -->
                                    <div class="content">
                                        <!-- title -->
                                        <h4 class="title">
                                            <a href="{{ route('produk.detail',[$rekomendasi->slug]) }}">{{ $rekomendasi->nm_vendor }}</a>
                                        </h4>
                                        <div class="progress mb-0" style="height:7px;">
                                            <div class="progress-bar" style="width:{{ $rekomendasi->persentase }}%;height:15px"></div>
                                        </div>
                                        <div>
                                            <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;Ada {{ $rekomendasi->kamar_kosong }} Kamar Kosong Dari {{ $rekomendasi->jumlah_kamar }}</span>
                                        </div>
                                        <br>
                                        <!-- Property address -->
                                        <h3 class="property-address">
                                            <a href="{{ route('produk.detail',[$rekomendasi->slug]) }}">
                                                <i class="fa fa-map-marker"></i>{{ $rekomendasi->nm_kelurahan }},{{ $rekomendasi->nm_kecamatan }},{{ $rekomendasi->nm_kota }}
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        <a href="{{ route('produk.detail',[$rekomendasi->slug]) }}" style="cursor: pointer">
                                        <li style="font-size:12px;">
                                            <i class="fa fa-info-circle"></i>
                                            <span>
                                               Selengkapnya
                                        </li>
                                        <li style="font-size: 11px;">
                                            <i class="fa fa-clock-o"></i> &nbsp;{{ \Carbon\Carbon::parse($rekomendasi->created_at)->diffForHumans() }}
                                        </li></a>
                                    </ul>
                                </div>
                                <!-- Property 2 end -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="#" class="btn button-md button-theme">Tampilkan Semua Rekomendasi</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners block end -->
    <!-- Listings parallax start -->
    <div class="listings-parallax  overview-bgi" style="background-image: url({{ asset('assets/frontend/img/bgkomputer.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-8 col-xs-12">
                    <h1>Kami disini akan membantu anda</h1>
                    <P>Kami berusaha untuk memberikan fitur-fitur yang akan memudahkan pencari kost dan pemilik kost sehingga selalu terhubung secara digital baik melalui website maupun aplikasi mobile (Android & IOS) </P>
                    <a href="#" class="btn button-sm button-theme">Baca Selengkapnya</a>
                </div>
                <div class="col-lg-offset-3 col-lg-3 col-sm-4 col-xs-12">
                    <div class="contect-agent-photo">
                        <img src="{{ asset('assets/images/dirut.png') }}" alt="avatar-6" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Listings parallax end -->

    <!-- Our service start -->
    <div class=" our-service" style="margin-top: 50px !important; ">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1><span>Keunggulan Dari</span>  Kosaku.id</h1>
            </div>

            <div class="row mgn-btm wow">
                <div class="col-lg-3 col-md-3col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                    <div class="content">
                        <i class="flaticon-apartment"></i>
                        <h4>Keunggulan Pertama</h4>
                        <p>Memberikan pelayanan yang terbaik bagi pelanggan</P>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                    <div class="content">
                        <i class="flaticon-internet"></i>
                        <h4>Keuntungan Kedua</h4>
                        <p>Mengembangkan aplikasi untuk membantu mitra kerja untuk melakukan promosi secara online.</P>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                    <div class="content">
                        <i class="flaticon-vehicle"></i>
                        <h4>Keuntungan Ketiga</h4>
                        <p>Memudahkan pemesanan kamar secara cepat dan efisien melalui platform digital</P>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                    <div class="content">
                        <i class="flaticon-symbol"></i>
                        <h4>Keuntungan Keempat</h4>
                        <p>Selalu menjaga kualitas kamar yang tersedia serta tetap dengan harga yang terjangkau.</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our service end -->

    <!-- Featured properties start -->
    <div class="content-area featured-properties"  style="padding-bottom: 10px !important; padding-top:10px;>
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>CARI BERDASARKAN KATEGORI</h1>
            </div>
            <ul class="list-inline-listing filters filters-listing-navigation">
                <li class="active btn filtr-button filtr" data-filter="all"><i class="fa fa-list"></i>&nbsp; Semua Kategori</li>
                <li data-filter="1" class="btn btn-inline filtr-button filtr"><i class="fa fa-female"></i>&nbsp; Putri</li>
                <li data-filter="2" class="btn btn-inline filtr-button filtr"><i class="fa fa-male"></i>&nbsp; Putra</li>
                <li data-filter="3" class="btn btn-inline filtr-button filtr"><i class="fa fa-list"></i>&nbsp;Campuran</li>
            </ul>
            <div class="row">
                <div class="filtr-container">
                    @foreach ($allkategoris as $all)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="{{ $all->jenis_kategori == 'putri' ? '1' : ($all->jenis_kategori == 'putra' ? '2' : '3') }}">
                            <div class="property">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="property-tag button alt featured">{{ $all->jenis_kategori == 'putri' ? 'Khusus Putri' : ($all->jenis_kategori == 'putra' ? 'Khusus Putra' : 'Campuran') }}</div>
                                    <div class="property-tag button sale">{{ $all->nm_kategori }}</div>
                                    <div class="property-price">
                                        <a style="color:black; font-size:12px; text-decoration:line-through">Rp.{{ number_format($all->harga_sewa) }}</a>
                                        <a style="color:black; font-size:12px;">Rp.{{ number_format($all->harga_sewa - $all->diskon) }}</a>
                                    </div>
                                    <img src="{{ asset('storage/'.$all->foto_thumbnail) }}" alt="fp" class="img-responsive">
                                    <div class="property-overlay">
                                        
                                    </div>
                                </div>
                                <!-- Property content -->
                                <div class="property-content">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="{{ route('produk.detail',[$all->slug]) }}">{{ $all->nm_vendor }}</a>
                                    </h1>
                                    <div class="progress mb-0" style="height:7px;">
                                        <div class="progress-bar" style="width:40%;height:20px"></div>
                                    </div>
                                    <div>
                                        <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;Ada {{ $all->kamar_kosong }} Kamar Kosong Dari {{ $all->jumlah_kamar }} Kamar Tersedia</span>
                                    </div>
                                    <br>
                                    
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="{{ route('produk.detail',[$all->slug]) }}">
                                            <i class="fa fa-map-marker"></i>{{ $all->nm_kelurahan }},{{ $all->nm_kecamatan }},{{ $all->nm_kota }}
                                        </a>
                                    </h3>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="{{ $all->wifi == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                            <span>WIFI</span>
                                        </li>
                                        <li>
                                            <i class="{{ $all->ac == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                            <span>AC</span>
                                        </li>
                                        <li>
                                            <i class="{{ $all->lahan_parkir == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                            <span>Lahan Parkir </span>
                                        </li>
                                        <li>
                                            <i class="{{ $all->pengamanan == "1" ? 'fa fa-check-circle' : 'fa fa-close'  }}"></i>
                                            <span>Penjaga Kost</span>
                                        </li>
                                        <li>
                                            <i class="{{ $all->listrik == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                            <span>Listrik</span>
                                        </li>
                                        <li>
                                            <i class="{{ $all->air == "1" ? 'fa fa-check-circle' : 'fa fa-close' }}"></i>
                                            <span> Air Bersih</span>
                                        </li>
                                    </ul>
                                    <!-- Property footer -->
                                    <div class="property-footer">
                                        <span class="left">
                                            <a href="#"><i class="fa fa-user"></i>Admin Kosaku</a>
                                        </span>
                                        <span class="right">
                                            <i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($all->created_at)->diffForHumans() }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="#" class="btn button-md button-theme">Telusuri Semua Produk</a>
                </div>
            </div>
            <hr style="width: 50%;">
        </div>
    </div>
    <!-- Featured properties end -->

    <div class="clearfix"></div>
    <!-- Categories strat -->
    <div class="categories" style="padding-bottom: 50px !important">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Cari Kostan Sekitar Kampus</h1>
            </div>
            <div class="clearfix"></div>
            <div class="row wow">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                            <div class="category">
                                <div class="category_bg_box cat-1-bg" style="background-image: url({{ asset('assets/images/unib.jpg') }})">
                                    <div class="category-overlay">
                                        <div class="category-content">
                                            <div class="category-subtitle">{{ $unib }} Data Tersedia</div>
                                            <h3 class="category-title">
                                                <a href="#">Kampus UNIB</a>
                                            </h3>
                                        </div><!-- /.category-content -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                            <div class="category">
                                <div class="category_bg_box cat-2-bg" style="background-image: url({{ asset('assets/images/umb.jpeg') }})">
                                    <div class="category-overlay">
                                        <div class="category-content">
                                            <div class="category-subtitle">{{ $umb }} Data Tersedia</div>
                                            <h3 class="category-title">
                                                <a href="#">Kampus UMB</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                            <div class="category">
                                <div class="category_bg_box cat-2-bg" style="background-image: url({{ asset('assets/images/iain.jpeg') }})">
                                    <div class="category-overlay">
                                        <div class="category-content">
                                            <div class="category-subtitle">{{ $iain }} Data Tersedia</div>
                                            <h3 class="category-title">
                                                <a href="#">Kampus IAIN</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                            <div class="category">
                                <div class="category_bg_box cat-2-bg" style="background-image: url({{ asset('assets/images/unived.jpg') }})">
                                    <div class="category-overlay">
                                        <div class="category-content">
                                            <div class="category-subtitle">{{ $unived }} Data Tersedia</div>
                                            <h3 class="category-title">
                                                <a href="#">Kampus Dehasen</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5 col-sm-12 col-pad wow fadeInRight delay-04s">
                    <div class="category">
                        <div class="category_bg_box category_long_bg cat-4-bg" style="background-image: url({{ asset('assets/images/unihaz.jpg') }})">
                            <div class="category-overlay">
                                <div class="category-content">
                                    <div class="category-subtitle">{{ $unihaz }} Data Tersedia</div>
                                    <h3 class="category-title"><a href="#">Kampus UNIHAZ</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories end-->

    <!-- Agent section start -->
    <div class="mb-50 agent-section chevron-icon">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>tim luar biasa</h1>
            </div>
            <div class="row">
                <div class="carousel our-partners slide" id="ourPartners3">
                    <div class="col-lg-12 mrg-btm-30">
                        <a class="right carousel-control" href="#ourPartners3" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                        <a class="right carousel-control" href="#ourPartners3" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                    </div>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <!-- Agent 1 start -->
                                <div class="agent-1">
                                    <!-- Agent img -->
                                    <a href="properties-details.html" class="agent-img">
                                        <img src="{{ asset('assets/images/afdal.jpg') }}" alt="team-1" class="img-responsive">
                                    </a>
                                    <!-- Agent content -->
                                    <div class="agent-content">
                                        <h5><a href="">Afdal Perdana, S.T</a></h5>
                                        <h6>Chief Executive Officer (CEO)</h6>
                                        <ul class="social-list clearfix">
                                            <li>
                                                <a href="https://www.facebook.com/afdal.s.jail" class="facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/afdal_perdana/" class="google">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Agent 1 end -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <!-- Agent 1 start -->
                                <div class="agent-1">
                                    <!-- Agent img -->
                                    <a href="properties-details.html" class="agent-img">
                                        <img src="{{ asset('assets/images/hadi.jpg') }}" alt="team-2" class="img-responsive">
                                    </a>
                                    <!-- Agent content -->
                                    <div class="agent-content">
                                        <h5><a href="">Hadi Pratama</a></h5>
                                        <h6>Chief Operational Marketing</h6>
                                        <ul class="social-list clearfix">
                                            <li>
                                                <a href="https://www.facebook.com/hady.pratama.982" class="facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/hadipratama.asa/" class="google">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Agent 1 end -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <!-- Agent 1 start -->
                                <div class="agent-1">
                                    <!-- Agent img -->
                                    <a href="properties-details.html" class="agent-img">
                                        <img src="{{ asset('assets/images/witri.jpg') }}" alt="team-3" class="img-responsive">
                                    </a>
                                    <!-- Agent content -->
                                    <div class="agent-content">
                                        <h5><a href="">Witri Eka Mardiana</a></h5>
                                        <h6>Chief Financial Officer</h6>
                                        <ul class="social-list clearfix">
                                            <li>
                                                <a href="https://www.facebook.com/witri.e.mardiana.7" class="facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/witriekamardiana/" class="google">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Agent 1 end -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <!-- Agent 1 start -->
                                <div class="agent-1">
                                    <!-- Agent img -->
                                    <a href="properties-details.html" class="agent-img">
                                        <img src="{{ asset('assets/images/irfan.jpg') }}" alt="team-4" class="img-responsive">
                                    </a>
                                    <!-- Agent content -->
                                    <div class="agent-content">
                                        <h5><a href="">Irfan Jeminko</a></h5>
                                        <h6>Chief Marketing Officer</h6>
                                        <ul class="social-list clearfix">
                                            <li>
                                                <a href="https://www.facebook.com/search/top?q=irfan%20jeminko" class="facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/irfan_jeminko/" class="google">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Agent 1 end -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <!-- Agent 1 start -->
                                <div class="agent-1">
                                    <!-- Agent img -->
                                    <a href="properties-details.html" class="agent-img">
                                        <img src="{{ asset('assets/images/safroni.jpg') }}" alt="team-4" class="img-responsive">
                                    </a>
                                    <!-- Agent content -->
                                    <div class="agent-content">
                                        <h5><a href="">Safroni Aziz Suprianto</a></h5>
                                        <h6>Chief Technology Officer</h6>
                                        <ul class="social-list clearfix">
                                            <li>
                                                <a href="https://www.facebook.com/profile.php?id=100010418316583" class="facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/safroniaziz/" class="google">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Agent 1 end -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <!-- Agent 1 start -->
                                <div class="agent-1">
                                    <!-- Agent img -->
                                    <a href="properties-details.html" class="agent-img">
                                        <img src="{{ asset('assets/images/yudi.jpg') }}" alt="team-4" class="img-responsive">
                                    </a>
                                    <!-- Agent content -->
                                    <div class="agent-content">
                                        <h5><a href="">Yudi Setiawan, S.T., M.Eng</a></h5>
                                        <h6>Technology Manager Officeer</h6>
                                        <ul class="social-list clearfix">
                                            <li>
                                                <a href="https://www.facebook.com/yudi.setiawan.7" class="facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/yudistiawn/" class="google">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Agent 1 end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Agent section end -->

    <!-- Testimonial section start-->
    <div class="testimonials-3 overview-bgi" style="background-image: url({{ asset('assets/images/bgtestimoni.jpg') }});>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div id="carouse3-example-generic" class="carousel slide" data-ride="carousel">
                        <h1>Apa Kata Mereka?</h1>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item content clearfix active">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/images/logo.png') }}" alt="avatar-1" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <div class="testimonials-info">
                                            <div class="text">
                                                <sup>
                                                    <i class="fa fa-quote-left"></i>
                                                </sup>
                                                Dikondisi pandemi kost abrar pada awalnya belum terisi penuh. Dan membuat owner kesulitan dalam mencari penyewa kost.Oleh karena itu, pondokan abrar bermitra dengan kosaku.id agar dapat terisi walau diera pandemi.
                                                <sub>
                                                    <i class="fa fa-quote-right"></i>
                                                </sub>
                                            </div>
                                            <div class="author-name">
                                                Pemilik Pondokan Abrar
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item content clearfix">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/images/logo.png') }}" alt="avatar-4" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <div class="testimonials-info">
                                            <div class="text">
                                                <sup>
                                                    <i class="fa fa-quote-left"></i>
                                                </sup>
                                                Sangat terbantu dalam mencari kost-kostan di masa yang sulit ini, terlebih merebaknya virus covid19 yang sangat membatasi ruang gerak mahasiswa
                                                <sub>
                                                    <i class="fa fa-quote-right"></i>
                                                </sub>
                                            </div>
                                            <div class="author-name">
                                                Tya Aprilia Ningsih
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carouse3-example-generic" role="button" data-slide="prev">
                            <span class="slider-mover-left t-slider-l" aria-hidden="true">
                                <i class="fa fa-angle-left"></i>
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carouse3-example-generic" role="button" data-slide="next">
                            <span class="slider-mover-right t-slider-r" aria-hidden="true">
                                <i class="fa fa-angle-right"></i>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial  end -->
    <div class="clearfix"></div>

    <!-- Blog start -->
    <div class="blog content-area " style="padding-top: 50px !important">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1><span>Artikel</span> Blog </h1>
            </div>
            <div class="row">
                <h4 style="text-align: center">Belum ada artikel saat ini</h4>
                {{-- <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft delay-04s">
                    <div class="thumbnail blog-box-2 clearfix">
                        <div class="blog-photo">
                            <img src="{{ asset('assets/images/tes.jpg') }}" alt="blog-1" class="img-responsive">
                        </div>
                        <div class="post-meta">
                            <ul>
                                <li class="profile-user">
                                    <img src="http://placehold.it/75x75" alt="user-blog">
                                </li>
                                <li><span>John Doe</span></li>
                                <li><i class="fa fa-calendar"></i></li>
                                <li><i class="fa fa-comments"></i></li>
                            </ul>
                        </div>
                        <!-- Detail -->
                        <div class="caption detail">
                            <h4><a href="blog-single-sidebar-right.html">Buying a Home</a></h4>
                            <!-- paragraph -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                            <div class="clearfix"></div>
                            <!-- Btn -->
                            <a href="blog-single-sidebar-right.html" class="read-more">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 hidden-sm wow fadeInUp delay-04s">
                    <div class="thumbnail blog-box-2 clearfix">
                        <div class="blog-photo">
                            <img src="{{ asset('assets/images/tes.jpg') }}" alt="blog-2" class="img-responsive">
                        </div>
                        <div class="post-meta">
                            <ul>
                                <li class="profile-user">
                                    <img src="http://placehold.it/75x75" alt="user-blog">
                                </li>
                                <li><span>Karen Paran</span></li>
                                <li><i class="fa fa-calendar"></i></li>
                                <li><i class="fa fa-comments"></i></li>
                            </ul>
                        </div>
                        <!-- Detail -->
                        <div class="caption detail">
                            <h4><a href="blog-single-sidebar-right.html">Why Live in New York</a></h4>
                            <!-- paragraph -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                            <div class="clearfix"></div>
                            <!-- Btn -->
                            <a href="blog-single-sidebar-right.html" class="read-more">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInRight delay-04s">
                    <div class="thumbnail blog-box-2 clearfix">
                        <div class="blog-photo">
                            <img src="{{ asset('assets/images/tes.jpg') }}" alt="blog-3" class="img-responsive">
                        </div>
                        <div class="post-meta">
                            <ul>
                                <li class="profile-user">
                                    <img src="http://placehold.it/75x75" alt="user-blog">
                                </li>
                                <li><span>John Antony</span></li>
                                <li><i class="fa fa-calendar"></i></li>
                                <li><i class="fa fa-comments"></i></li>
                            </ul>
                        </div>
                        <!-- Detail -->
                        <div class="caption detail">
                            <h4><a href="blog-single-sidebar-right.html">Selling Your Home</a></h4>
                            <!-- paragraph -->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                            <div class="clearfix"></div>
                            <!-- Btn -->
                            <a href="blog-single-sidebar-right.html" class="read-more">Read More...</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Blog end -->


    <!-- Counters strat -->
    <div class="counters mb-5 overview-bgi" style="background:url({{ asset('assets/images/bglistings.jpg') }}); margin-bottom:50px !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 bordered-right">
                    <div class="counter-box">
                        <i class="fa fa-female"></i>
                        <h1 class="counter">{{ $putri }}</h1>
                        <p>Kost Putri</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 bordered-right">
                    <div class="counter-box">
                        <i class="fa fa-male"></i>
                        <h1 class="counter">{{ $putra }}</h1>
                        <p>Kost Putra</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 bordered-right">
                    <div class="counter-box">
                        <i class="flaticon-people"></i>
                        <h1 class="counter">{{ $campuran }}</h1>
                        <p>Kost Campuran</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-box">
                        <i class="fa fa-home"></i>
                        <h1 class="counter">{{ $total_kamar->total_kamar }}</h1>
                        <p>Total Kamar Kosong</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counters end -->

    <!-- Partners block start -->
    <div class="partners-block">
        <div class="container">
            <h3>Daftar kerja sama</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel our-partners slide" id="ourPartners">
                        <div class="carousel-inner">
                            @foreach ($kerjasama as $index=>$item)
                                <div class="item @if($index == '1') {{ 'active' }} @endif">
                                    <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                        <a href="#">
                                            <i class="fa fa-home"></i>&nbsp;{{ $item->nm_vendor }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="left carousel-control" href="#ourPartners" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                        <a class="right carousel-control" href="#ourPartners" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners block end -->
@endsection