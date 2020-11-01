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
                                <a href="#" class="btn button-md button-theme" data-animation="animated fadeInUp delay-15s">Download Versi Android</a>
                                <a href="#" class="btn button-md border-button-theme" data-animation="animated fadeInUp delay-15s">Daftar Produk Kostan</a>
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
                <div class="carousel our-partners slide" id="ourPartners2">
                    <div class="col-lg-12 mrg-btm-30">
                        <a class="right carousel-control" href="#ourPartners2" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                        <a class="right carousel-control" href="#ourPartners2" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                    </div>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Property 2 start -->
                                <div class="property-2">
                                    <!-- Property img -->
                                    <div class="property-img">
                                        <div class="featured">
                                            Featured
                                        </div>
                                        <div class="price-ratings">
                                            <div class="price">$150,000</div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/images/tes.jpg') }}" alt="rp" class="img-responsive">
                                        <div class="property-overlay">
                                            <a href="properties-details.html" class="overlay-link">
                                                <i class="fa fa-link"></i>
                                            </a>
                                            <a class="overlay-link property-video" title="Lexus GS F">
                                                <i class="fa fa-video-camera"></i>
                                            </a>
                                            <div class="property-magnify-gallery">
                                                <a href="http://placehold.it/750x540" class="overlay-link">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                                <a href="http://placehold.it/750x540" class="hidden"></a>
                                                <a href="http://placehold.it/750x540" class="hidden"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- content -->
                                    <div class="content">
                                        <!-- title -->
                                        <h4 class="title">
                                            <a href="properties-details.html">Big Head House</a>
                                        </h4>
                                        <div class="progress mb-0" style="height:7px;">
                                            <div class="progress-bar" style="width:40%;height:20px"></div>
                                        </div>
                                        <div>
                                            <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                            <span class="pull-right" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                        </div>
                                        <br>
                                        <!-- Property address -->
                                        <h3 class="property-address">
                                            <a href="properties-details.html">
                                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-bed"></i>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Property 2 end -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Property 2 start -->
                                <div class="property-2">
                                    <!-- Property img -->
                                    <div class="property-img">
                                        <div class="featured">
                                            Featured
                                        </div>
                                        <div class="price-ratings">
                                            <div class="price">$150,000</div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/images/tes.jpg') }}" alt="rp" class="img-responsive">
                                        <div class="property-overlay">
                                            <a href="properties-details.html" class="overlay-link">
                                                <i class="fa fa-link"></i>
                                            </a>
                                            <a class="overlay-link property-video" title="Lexus GS F">
                                                <i class="fa fa-video-camera"></i>
                                            </a>
                                            <div class="property-magnify-gallery">
                                                <a href="http://placehold.it/750x540" class="overlay-link">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                                <a href="http://placehold.it/750x540" class="hidden"></a>
                                                <a href="http://placehold.it/750x540" class="hidden"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- content -->
                                    <div class="content">
                                        <!-- title -->
                                        <h4 class="title">
                                            <a href="properties-details.html">Masons Villas</a>
                                        </h4>
                                        <div class="progress mb-0" style="height:7px;">
                                            <div class="progress-bar" style="width:40%;height:20px"></div>
                                        </div>
                                        <div>
                                            <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                            <span class="pull-right" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                        </div>
                                        <br>
                                        <!-- Property address -->
                                        <h3 class="property-address">
                                            <a href="properties-details.html">
                                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-bed"></i>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Property 2 end -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Property 2 start -->
                                <div class="property-2">
                                    <!-- Property img -->
                                    <div class="property-img">
                                        <div class="featured">
                                            Featured
                                        </div>
                                        <div class="price-ratings">
                                            <div class="price">$150,000</div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/images/tes.jpg') }}" alt="rp" class="img-responsive">
                                        <div class="property-overlay">
                                            <a href="properties-details.html" class="overlay-link">
                                                <i class="fa fa-link"></i>
                                            </a>
                                            <a class="overlay-link property-video" title="Lexus GS F">
                                                <i class="fa fa-video-camera"></i>
                                            </a>
                                            <div class="property-magnify-gallery">
                                                <a href="http://placehold.it/750x540" class="overlay-link">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                                <a href="http://placehold.it/750x540" class="hidden"></a>
                                                <a href="http://placehold.it/750x540" class="hidden"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- content -->
                                    <div class="content">
                                        <!-- title -->
                                        <h4 class="title">
                                            <a href="properties-details.html">Park Avenue</a>
                                        </h4>
                                        <div class="progress mb-0" style="height:7px;">
                                            <div class="progress-bar" style="width:40%;height:20px"></div>
                                        </div>
                                        <div>
                                            <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                            <span class="pull-right" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                        </div>
                                        <br>
                                        <!-- Property address -->
                                        <h3 class="property-address">
                                            <a href="properties-details.html">
                                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-bed"></i>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Property 2 end -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Property 2 start -->
                                <div class="property-2">
                                    <!-- Property img -->
                                    <div class="property-img">
                                        <div class="featured">
                                            Featured
                                        </div>
                                        <div class="price-ratings">
                                            <div class="price">$150,000</div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/images/tes.jpg') }}" alt="rp" class="img-responsive">
                                        <div class="property-overlay">
                                            <a href="properties-details.html" class="overlay-link">
                                                <i class="fa fa-link"></i>
                                            </a>
                                            <a class="overlay-link property-video" title="Lexus GS F">
                                                <i class="fa fa-video-camera"></i>
                                            </a>
                                            <div class="property-magnify-gallery">
                                                <a href="http://placehold.it/750x540" class="overlay-link">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                                <a href="http://placehold.it/750x540" class="hidden"></a>
                                                <a href="http://placehold.it/750x540" class="hidden"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- content -->
                                    <div class="content">
                                        <!-- title -->
                                        <h4 class="title">
                                            <a href="properties-details.html">Sweet Family Home</a>
                                        </h4>
                                        <div class="progress mb-0" style="height:7px;">
                                            <div class="progress-bar" style="width:40%;height:20px"></div>
                                        </div>
                                        <div>
                                            <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                            <span class="pull-right" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                        </div>
                                        <br>
                                        <!-- Property address -->
                                        <h3 class="property-address">
                                            <a href="properties-details.html">
                                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-bed"></i>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Property 2 end -->
                            </div>
                        </div>
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
    <div class="listings-parallax  overview-bgi">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-8 col-xs-12">
                    <h1>Kami disini akan membantu anda</h1>
                    <P>Kami berusaha untuk memberikan fitur-fitur yang akan memudahkan pencari kost dan pemilik kost sehingga selalu terhubung secara digital baik melalui website maupun aplikasi mobile (Android & IOS) </P>
                    <a href="#" class="btn button-sm button-theme">Baca Selengkapnya</a>
                </div>
                <div class="col-lg-offset-3 col-lg-3 col-sm-4 col-xs-12">
                    <div class="contect-agent-photo">
                        <img src="http://placehold.it/262x308" alt="avatar-6" class="img-responsive">
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
                <h1><span>Kenapa harus pesan</span> melalui kosaku ?</h1>
            </div>

            <div class="row mgn-btm wow">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                    <div class="content">
                        <i class="flaticon-apartment"></i>
                        <h4>Keuntungan Pertama</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</P>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                    <div class="content">
                        <i class="flaticon-internet"></i>
                        <h4>Keuntungan Kedua</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</P>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                    <div class="content">
                        <i class="flaticon-vehicle"></i>
                        <h4>Keuntungan Ketiga</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</P>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                    <div class="content">
                        <i class="flaticon-symbol"></i>
                        <h4>Keuntungan Keempat</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</P>
                    </div>
                </div>
            </div>
            <a href="#" class="btn button-md button-theme">Baca Selengkapnya</a>
        </div>
    </div>
    <!-- Our service end -->

    <!-- Featured properties start -->
    <div class="content-area featured-properties"  style="padding-bottom: 10px !important;>
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>SEMUA PRODUK YANG DITAWARKAN</h1>
            </div>
            <ul class="list-inline-listing filters filters-listing-navigation">
                <li class="active btn filtr-button filtr" data-filter="all"><i class="fa fa-home"></i>&nbsp; Putri</li>
                <li data-filter="1" class="btn btn-inline filtr-button filtr"><i class="fa fa-home"></i>&nbsp; Putra</li>
                <li data-filter="2" class="btn btn-inline filtr-button filtr"><i class="fa fa-home"></i>&nbsp; Campuran</li>
                <li data-filter="3" class="btn btn-inline filtr-button filtr"><i class="fa fa-home"></i>&nbsp;Kontrakan</li>
                <li data-filter="4" class="btn btn-inline filtr-button filtr"><i class="fa fa-home"></i>&nbsp;Hotel</li>
            </ul>
            <div class="row">
                <div class="filtr-container">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3">
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Khusus Putri</div>
                                <div class="property-tag button sale">diskon 50%</div>
                                <div class="property-price">$150,000</div>
                                <img src="{{ asset('assets/images/tes.jpg') }}" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Beautiful Single Home</a>
                                </h1>
                                <div class="progress mb-0" style="height:7px;">
                                    <div class="progress-bar" style="width:40%;height:20px"></div>
                                </div>
                                <div>
                                    <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                    <span class="pull-right" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                </div>
                                <br>
                                
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Beds</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baths</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>5 Days ago
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Khusus Putri</div>
                                <div class="property-tag button sale">diskon 50%</div>
                                <div class="property-price">$150,000</div>
                                <img src="{{ asset('assets/images/tes.jpg') }}" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Modern Family Home</a>
                                </h1>
                                <div class="progress mb-0" style="height:7px;">
                                    <div class="progress-bar" style="width:90%;height:20px"></div>
                                </div>
                                <div>
                                    <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                    <span class="pull-right" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                </div>
                                <br>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Beds</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baths</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>5 Days ago
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2, 3">
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Khusus Putri</div>
                                <div class="property-tag button sale">diskon 50%</div>
                                <div class="property-price">$150,000</div>
                                <img src="{{ asset('assets/images/tes.jpg') }}" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Sweet Family Home</a>
                                </h1>
                                <div class="progress mb-0" style="height:7px;">
                                    <div class="progress-bar" style="width:40%;height:20px"></div>
                                </div>
                                <div>
                                    <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                    <span class="pull-right" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                </div>
                                <br>
                                
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Beds</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baths</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>5 Days ago
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="3, 4">
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Khusus Putri</div>
                                <div class="property-tag button sale">diskon 50%</div>
                                <div class="property-price">$150,000</div>
                                <img src="{{ asset('assets/images/tes.jpg') }}" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Big Head House</a>
                                </h1>
                                <div class="progress mb-0" style="height:7px;">
                                    <div class="progress-bar" style="width:40%;height:20px"></div>
                                </div>
                                <div>
                                    <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                    <span class="pull-right" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                </div>
                                <br>
                                
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Beds</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baths</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>5 Days ago
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="4">
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Khusus Putri</div>
                                <div class="property-tag button sale">diskon 50%</div>
                                <div class="property-price">$150,000</div>
                                <img src="{{ asset('assets/images/tes.jpg') }}" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Park Avenue</a>
                                </h1>
                                <div class="progress mb-0" style="height:7px;">
                                    <div class="progress-bar" style="width:40%;height:20px"></div>
                                </div>
                                <div>
                                    <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                    <span class="pull-right" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                </div>
                                <br>
                                
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Beds</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baths</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>5 Days ago
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Khusus Putri</div>
                                <div class="property-tag button sale">diskon 50%</div>
                                <div class="property-price">$150,000</div>
                                <img src="{{ asset('assets/images/tes.jpg') }}" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Masons Villas</a>
                                </h1>
                                <div class="progress mb-0" style="height:7px;">
                                    <div class="progress-bar" style="width:40%;height:20px"></div>
                                </div>
                                <div>
                                    <span class="pull-left" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                    <span class="pull-right" style="color: #95c41f"><i class="fa fa-refresh fa-spin"></i>&nbsp;2/12 kamar</span>
                                </div>
                                <br>
                                
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Beds</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baths</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>5 Days ago
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <h1>Cari Kostan Daerah Kampus</h1>
            </div>
            <div class="clearfix"></div>
            <div class="row wow">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                            <div class="category">
                                <div class="category_bg_box cat-1-bg">
                                    <div class="category-overlay">
                                        <div class="category-content">
                                            <div class="category-subtitle">14 Properties</div>
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
                                <div class="category_bg_box cat-2-bg">
                                    <div class="category-overlay">
                                        <div class="category-content">
                                            <div class="category-subtitle">24 Properties</div>
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
                                <div class="category_bg_box cat-2-bg">
                                    <div class="category-overlay">
                                        <div class="category-content">
                                            <div class="category-subtitle">24 Properties</div>
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
                                <div class="category_bg_box cat-2-bg">
                                    <div class="category-overlay">
                                        <div class="category-content">
                                            <div class="category-subtitle">24 Properties</div>
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
                        <div class="category_bg_box category_long_bg cat-4-bg">
                            <div class="category-overlay">
                                <div class="category-content">
                                    <div class="category-subtitle">14 Properties</div>
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
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Agent 1 start -->
                                <div class="agent-1">
                                    <!-- Agent img -->
                                    <a href="properties-details.html" class="agent-img">
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="team-1" class="img-responsive">
                                    </a>
                                    <!-- Agent content -->
                                    <div class="agent-content">
                                        <h5><a href="agent-single.html">John Antony</a></h5>
                                        <h6>Web Developer</h6>
                                        <ul class="social-list clearfix">
                                            <li>
                                                <a href="#" class="facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="linkedin">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="google">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="rss">
                                                    <i class="fa fa-rss"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Agent 1 end -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Agent 1 start -->
                                <div class="agent-1">
                                    <!-- Agent img -->
                                    <a href="properties-details.html" class="agent-img">
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="team-2" class="img-responsive">
                                    </a>
                                    <!-- Agent content -->
                                    <div class="agent-content">
                                        <h5><a href="agent-single.html">Karen Paran</a></h5>
                                        <h6>Creative Director</h6>
                                        <ul class="social-list clearfix">
                                            <li>
                                                <a href="#" class="facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="linkedin">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="google">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="rss">
                                                    <i class="fa fa-rss"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Agent 1 end -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Agent 1 start -->
                                <div class="agent-1">
                                    <!-- Agent img -->
                                    <a href="properties-details.html" class="agent-img">
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="team-3" class="img-responsive">
                                    </a>
                                    <!-- Agent content -->
                                    <div class="agent-content">
                                        <h5><a href="agent-single.html">John Maikel</a></h5>
                                        <h6>Office Manager</h6>
                                        <ul class="social-list clearfix">
                                            <li>
                                                <a href="#" class="facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="linkedin">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="google">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="rss">
                                                    <i class="fa fa-rss"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Agent 1 end -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Agent 1 start -->
                                <div class="agent-1">
                                    <!-- Agent img -->
                                    <a href="properties-details.html" class="agent-img">
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="team-4" class="img-responsive">
                                    </a>
                                    <!-- Agent content -->
                                    <div class="agent-content">
                                        <h5><a href="agent-single.html">Eliane Pereira</a></h5>
                                        <h6>Support Manager</h6>
                                        <ul class="social-list clearfix">
                                            <li>
                                                <a href="#" class="facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="linkedin">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="google">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="rss">
                                                    <i class="fa fa-rss"></i>
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
    <div class="testimonials-3 overview-bgi" style="background-image: url({{ asset('assets/images/tes2.jpg') }});>
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
                                                Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                                <sub>
                                                    <i class="fa fa-quote-right"></i>
                                                </sub>
                                            </div>
                                            <div class="author-name">
                                                John Antony
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star-half-full"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item content clearfix">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/images/logo.png') }}" alt="avatar-2" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <div class="testimonials-info">
                                            <div class="text">
                                                <sup>
                                                    <i class="fa fa-quote-left"></i>
                                                </sup>
                                                Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                                <sub>
                                                    <i class="fa fa-quote-right"></i>
                                                </sub>
                                            </div>
                                            <div class="author-name">
                                                John Mery
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star-half-full"></i>
                                                </li>
                                            </ul>
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
                                                Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                                <sub>
                                                    <i class="fa fa-quote-right"></i>
                                                </sub>
                                            </div>
                                            <div class="author-name">
                                                John Top
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star-half-full"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item content clearfix">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/images/logo.png') }}" alt="avatar-3" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">
                                        <div class="testimonials-info">
                                            <div class="text">
                                                <sup>
                                                    <i class="fa fa-quote-left"></i>
                                                </sup>
                                                Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                                <sup>
                                                    <i class="fa fa-quote-right"></i>
                                                </sup>
                                            </div>
                                            <div class="author-name">
                                                John Pitarshon
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star-half-full"></i>
                                                </li>
                                            </ul>
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
                <h1><span>Artikel</span> dari kami</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft delay-04s">
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
                </div>
            </div>
        </div>
    </div>
    <!-- Blog end -->


    <!-- Counters strat -->
    <div class="counters mb-5 overview-bgi" style="background:url({{ asset('assets/images/tes2.jpg') }}); margin-bottom:50px !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 bordered-right">
                    <div class="counter-box">
                        <i class="flaticon-tag"></i>
                        <h1 class="counter">967</h1>
                        <p>Listings diskon 50%</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 bordered-right">
                    <div class="counter-box">
                        <i class="flaticon-symbol-1"></i>
                        <h1 class="counter">1276</h1>
                        <p>Listings For Rent</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 bordered-right">
                    <div class="counter-box">
                        <i class="flaticon-people"></i>
                        <h1 class="counter">396</h1>
                        <p>Agents</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-box">
                        <i class="flaticon-people-1"></i>
                        <h1 class="counter">177</h1>
                        <p>Brokers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counters end -->
@endsection