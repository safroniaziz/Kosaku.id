
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Kosaku.id - Platform Pencarian Kostan </title>
	<link rel="icon" href="{{ asset('assets/images/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/animate.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap-submenu.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap-select.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/leaflet.css ') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/map.css ') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/font-awesome/css/font-awesome.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/flaticon/font/flaticon.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/linearicons/style.css ') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/frontend/css/jquery.mCustomScrollbar.css ') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/frontend/css/dropzone.css ') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/frontend/css/magnific-popup.css ') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css ') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('assets/frontend/css/skins/default.css ') }}">

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
                    <li class="dropdown">
                        <a tabindex="0" href="{{ route('home') }}"  data-submenu="" aria-expanded="false">
                            <i class="fa fa-home"></i>&nbsp;Home
                        </a>
                    </li>
                    <li class="dropdown">
                        <a tabindex="0" href="{{ route('produk.semua') }}"  data-submenu="" aria-expanded="false">
                            <i class="fa fa-home"></i>&nbsp;Kost-Kostan
                        </a>
                    </li>
                    {{-- <li class="dropdown active">
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
                        <a tabindex="0" href="#" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            <i class="fa fa-list"></i> Kosaku<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="agent-listing-row-sidebar.html">Tentang Kami</a></li>
                            <li><a href="agent-single.html">Kontak Kami</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a tabindex="0" href="#" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            <i class="fa fa-book"></i>&nbsp; Artikel
                        </a>
					</li>
                    <li class="dropdown active">
                        <a tabindex="0" href="{{ route('pendaftaran_seminar') }}"  data-submenu="" aria-expanded="false">
                            <i class="fa fa-home"></i>&nbsp;Daftar Seminar
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right rightside-navbar">
                    <li>
                        <a href="submit-property.html" class="button">
                            Masuk
                        </a>
                    </li>
                    &nbsp;
                   
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi" style=" background=size:auto ; background-image: url({{ asset('assets/frontend/img/bgkomputer.png') }})">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>PENDAFTARAN SEMINAR BEASISWA KOSAKU.ID</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html" style="text-transform: uppercase">Sabtu, 21 November 2020</a></li>
                    <li class="active">ZOOM VIDEO CONFERENCE</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties details page start -->
<div class="content-area properties-details-page" style="padding-top: 20px !important; padding-bottom:0px !important">
    <div class="properties-section-body content-area" style="padding-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block" id="berhasil">
                            <strong><i class="fa fa-info-circle"></i>&nbsp;Berhasil: </strong> {{ $message }}
                        </div>
                        @elseif ($message2 = Session::get('error'))
                        <div class="alert alert-danger alert-block" id="berhasil">
                            <strong><i class="fa fa-info-circle"></i>&nbsp;Gagal: </strong> {{ $message2 }}
                        </div>
                        @else
                        <div class="alert alert-info">
                            <h4>SYARAT DAN KETENTUAN</h4>
                            Silahkan Follow Instagram <a href="https://www.instagram.com/kosaku.id/">Kosaku.id</a>, lalu tag 3 temanmu di kolom komentar yaa ....
                        </div>
                    @endif
                </div>
                <div class="col-md-12" style="margin-bottom: 10px;">
                    <a href="{{ route('pendaftaran_seminar') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Form Pendaftaran</a>
                </div>
                <div class="col-md-12 table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>No</th>
                            <th>Nama Peserta</th>
                            <th>Nomor Induk Mahasiswa</th>
                            <th>Program Studi</th>
                            <th>Fakultas</th>
                            <th>Universitas</th>
                            <th>Telephone</th>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nm_peserta }}</td>
                                    <td>{{ $data->nim }}</td>
                                    <td>{{ $data->prodi }}</td>
                                    <td>{{ $data->fakultas }}</td>
                                    <td>{{ $data->universitas }}</td>
                                    <td>{{ $data->telephone }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->

<!-- Footer start -->
<footer class="main-footer clearfix">
    <div class="container">
        <!-- Footer info-->
        <div class="footer-info">
            <div class="row">
                <!-- About us -->
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
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

<script src="{{ asset('assets/frontend/js/jquery-2.2.0.min.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap-submenu.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/rangeslider.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.mb.YTPlayer.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/wow.min.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap-select.min.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.easing.1.3.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.scrollUp.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.mCustomScrollbar.concat.min.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/leaflet.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/leaflet-providers.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/leaflet.markercluster.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/dropzone.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.filterizr.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/maps.js ') }}"></script>
<script src="{{ asset('assets/frontend/js/app.js ') }}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('assets/frontend/js/ie10-viewport-bug-workaround.js') }}"></script>
<!-- Custom javascript -->
<script src="{{ asset('assets/frontend/js/ie10-viewport-bug-workaround.js') }}"></script>



</body>
</html>