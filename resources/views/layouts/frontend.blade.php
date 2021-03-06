
<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JE4PMFEZ6W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JE4PMFEZ6W');
</script>

	<title>Kosaku.id - Platform Pencarian Kostan </title>
	<link rel="icon" href="{{ asset('assets/images/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap-submenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/leaflet.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/map.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/linearicons/style.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/frontend/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/frontend/css/dropzone.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/frontend/css/magnific-popup.css') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/skins/default.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/ie10-viewport-bug-workaround.css') }}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('assets/frontend/js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="page_loader"></div>
<header class="top-header" id="top">
    <div class="container">
        <div class="row">
            @if (Auth::check())

                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <div class="list-inline">
                        
                    </div>
                </div>
                @else
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <div class="list-inline">
                        <a class="hidden-xs" href="{{ route('login') }}"><i class="fa fa-whatsapp"></i>+6285709586249</a>
                        <a href=""><i class="fa fa-envelope"></i>kosakujaya@gmail.com</a>
                    </div>
                </div>
            @endif
            @if (Auth::check())
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <ul class="top-social-media pull-right">
                        <li>
                            <a style="color: white">Halo, {{ Auth::user()->name }}</a>&nbsp;
                            <a class="btn btn-danger btn-sm" data-toggle="control-sidebar" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i>&nbsp; {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <ul class="top-social-media pull-right">
                        <li>
                            <a href="{{ route('login') }}" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
                        </li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</header>
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                        <a tabindex="0" href="{{ route('home') }}" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            <i class="fa fa-home"></i>&nbsp;Home
                        </a>
                    </li>

                    <li class="dropdown">
                        <a tabindex="0" href="#" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            <i class="fa fa-product-hunt"></i> Kost-Kostan<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('produk.rekomendasi') }}">Kost Rekomendasi</a></li>
                            <li><a href="{{ route('produk.semua') }}">Semua Kost</a></li>
                        </ul>
                    </li>
                    {{-- <li class="dropdown">
                        <a tabindex="0" href="#" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            <i class="fa fa-list"></i> Produk<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('produk.semua') }}">Semua Produk</a></li>
                            <li><a href="agent-listing-row.html">Agent list</a></li>
                            <li><a href="agent-listing-row-sidebar.html">Agent List Sidebarbar</a></li>
                            <li><a href="agent-single.html">Agent Detail</a></li>
                        </ul>
                    </li> --}}

                    <li class="dropdown">
                        <a href="{{ route('kosaku.mart') }}"><i class="fa fa-shopping-cart"></i>&nbsp;Kosaku Mart</a>
                    </li>

                    <li class="dropdown">
                        <a tabindex="0" href="#" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            <i class="fa fa-info-circle"></i> Informasi<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="agent-listing-row-sidebar.html">Tentang Kami</a></li>
                            <li><a href="agent-single.html">Kontak Kami</a></li>
                        </ul>
                    </li>
					{{-- <li class="dropdown">
                        <a tabindex="0" href="{{ route('pendaftaran_seminar') }}"  data-submenu="" aria-expanded="false">
                            <i class="fa fa-home"></i>&nbsp;Daftar Seminar
                        </a>
                    </li> --}}
                </ul>
               
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

@yield('content')

<!-- Intro section strat -->
<div class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <h3><i class="fa fa-download"></i>&nbsp;Ingin Lebih Gampang? Download kosaku.id Versi Android </h3>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="submit-property.html" class="btn button-md button-theme"><i class="fa fa-download"></i>&nbsp; Download</a>
            </div>
        </div>
    </div>
</div>
<!-- Intro section end -->

<!-- Footer start -->
<footer class="main-footer clearfix">
    <div class="container">
        <!-- Footer info-->
        <div class="footer-info">
            <div class="row">
                <!-- About us -->
                <div class="col-lg-6 col-md-5 col-sm-8 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Kontak Kami</h1>
                        </div>
                        <p>
                            Kosaku.id adalah platform pencarian kost-kostan digital pertama di Bengkulu yang berbasis teknologi website dan android. Kosaku.id adalah produk dari PT. Kosaku Jaya Mandiri, yang mana sudah memiliki legalitas dan terdaftar sebagai perusahaan wajib pajak.
                        </p>
                        <ul class="personal-info">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Alamat : Jl. Mayjen Sutoyo, No.53, Tanah Patah, Kota Bengkulu
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                Email:<a href="mailto:sales@hotelempire.com">kosakujaya@gmail.com & hello@kosaku.id</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                Telephone: <a href="tel:+55-417-634-7071">0823-7213-3572</a>
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                Sosial Media :
                                <a href="https://www.instagram.com/kosaku.id/" target="_blank">
                                    <img src="{{ asset('assets/images/instagram.png') }}" width="30" alt="">
                                </a>
                                <a href="https://www.facebook.com/kosakujaya.mandiri.3">
                                    <img src="{{ asset('assets/images/facebook.png') }}" width="30" alt="">
                                </a>
                                <a href="https://www.youtube.com/channel/UC-2W4xlP1mW5BsDO7Q0nUzQ">
                                    <img src="{{ asset('assets/images/youtube.png') }}" width="30" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Recent cars -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-item popular-posts">
                        <div class="main-title-2">
                            <h1>Kost Rekomendasi</h1>
                        </div>
                        @foreach ($rekomendasis as $item)
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="{{ asset('storage/'.$item->foto_thumbnail) }}" alt="small-properties-1">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">
                                        <a href="properties-details.html">{{ $item->nm_vendor }}</a>
                                    </h3>
                                    <p>{{ $rekomendasi->nm_kelurahan }},{{ $rekomendasi->nm_kecamatan }},{{ $rekomendasi->nm_kota }}</p>
                                    <div class="price">
                                        Rp.{{ number_format($item->harga_sewa) }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Subscribe -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Pesan Kostan</h1>
                        </div>
                        <div class="newsletter clearfix">
                            <p>
                                Silahkan Pilih Kostan Yang Anda Inginkan, Anda Akan Diarahkan Ke Akun Whatsapp Admin Kosaku.ID
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Copy right start -->
<div class="copy-right">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-11 col-sm-12">
                &copy;  2020 <a href="https://kosaku.id" target="_blank">Kosaku.ID</a>. Platform Pencarian Kost-Kostan Online
            </div>
            <div class="col-md-1 col-sm-12">
                <a href="https://kosaku.id">Kosaku.ID</a>
            </div>
        </div>
    </div>
</div>
<!-- Copy end right-->


<script src="{{ asset('assets/frontend/js/jquery-2.2.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap-submenu.js') }}"></script>
<script src="{{ asset('assets/frontend/js/rangeslider.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.mb.YTPlayer.js') }}"></script>
<script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.scrollUp.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/leaflet.js') }}"></script>
<script src="{{ asset('assets/frontend/js/leaflet-providers.js') }}"></script>
<script src="{{ asset('assets/frontend/js/leaflet.markercluster.js') }}"></script>
<script src="{{ asset('assets/frontend/js/dropzone.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.filterizr.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/maps.js') }}"></script>
<script src="{{ asset('assets/frontend/js/app.js') }}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('assets/frontend/js/ie10-viewport-bug-workaround.js') }}"></script>
<!-- Custom javascript -->
<script src="{{ asset('assets/frontend/js/ie10-viewport-bug-workaround.js') }}"></script>
@stack('scripts')
</body>
</html>