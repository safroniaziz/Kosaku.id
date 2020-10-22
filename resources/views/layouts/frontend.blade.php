
<!DOCTYPE html>
<html lang="zxx">
<head>
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
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('assets/frontend/css/skins/default.css') }}">

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
                    <li class="dropdown active">
                        <a tabindex="0" href="{{ route('home') }}" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            <i class="fa fa-home"></i>&nbsp;Home
                        </a>
                    </li>
                    <li class="dropdown">
                        <a tabindex="0" href="#" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            <i class="fa fa-list"></i> Produk<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('produk.semua') }}">Semua Produk</a></li>
                            <li><a href="agent-listing-row.html">Agent list</a></li>
                            <li><a href="agent-listing-row-sidebar.html">Agent List Sidebarbar</a></li>
                            <li><a href="agent-single.html">Agent Detail</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a tabindex="0" href="#" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            <i class="fa fa-list"></i> Menu<span class="caret"></span>
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
					<li class="dropdown">
                        <a tabindex="0" href="" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            <i class="fa fa-desktop"></i>&nbsp;Kosaku Teknologi
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

<!-- Banner start -->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach ($sliders as $slider)
				<div class="item item-100vh">
					<img src="{{ asset('storage/'.$slider->gambar) }}" alt="banner-slider-1">
					<div class="carousel-caption banner-slider-inner">
						<div class="banner-content container banner-content-left">
							<h1 data-animation="animated fadeInDown delay-05s"><span>{{ $slider->title }} </span> </h1>
							<p data-animation="animated fadeInUp delay-1s">{{ $slider->slogan }}</p>
							<a href="#" class="btn button-md button-theme" data-animation="animated fadeInUp delay-15s">Download Kosaku Android</a>
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

<!-- Featured properties start -->
<div class="content-area featured-properties">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>PRODUK YANG DITAWARKAN</h1>
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

<!-- Our service start -->
<div class="mb-50 our-service">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Apa keuntungan jika memesan</span> melalui kosaku ?</h1>
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
		<hr style="width: 50%;">
    </div>
</div>
<!-- Our service end -->

<!-- Recently properties start -->
<div class="mb-50 recently-properties chevron-icon">
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
		<hr style="width: 50%;">
    </div>
</div>
<!-- Partners block end -->

<div class="clearfix"></div>
<!-- Categories strat -->
<div class="categories">
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
<div class="testimonials-3 overview-bgi" style="background-image: url({{ asset('assets/images/tes2.jpg') }})">
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

<!-- Intro section strat -->
<div class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <img src="{{ asset('assets/images/playstore.png') }}" alt="logo-2">
                <h3>Ingin Lebih Gampang? Download kosaku.id Versi Android </h3>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="submit-property.html" class="btn button-md button-theme"><i class="fa fa-download"></i>&nbsp; Download</a>
            </div>
        </div>
    </div>
</div>
<!-- Intro section end -->


<!-- Counters strat -->
<div class="counters mb-5 overview-bgi" style="background:url({{ asset('assets/images/tes2.jpg') }})">
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

<!-- Blog start -->
<div class="blog content-area">
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

<!-- Partners block start -->
<div class="partners-block">
    <div class="container">
        <h3>Daftar kerja sama</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel our-partners slide" id="ourPartners">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="{{ asset('assets/images/tes2.jpg') }}" alt="partner">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="{{ asset('assets/images/tes2.jpg') }}" alt="partner-2">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="{{ asset('assets/images/tes2.jpg') }}" alt="partner-3">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="{{ asset('assets/images/tes2.jpg') }}" alt="partner-4">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="{{ asset('assets/images/tes2.jpg') }}" alt="partner-5">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#ourPartners" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners block end -->

<!-- Footer start -->
<footer class="main-footer clearfix">
    <div class="container">
        <!-- Footer info-->
        <div class="footer-info">
            <div class="row">
                <!-- About us -->
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Contact Us</h1>
                        </div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printing and
                        </p>
                        <ul class="personal-info">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Address: 20/F Green Road, Dhanmondi, Dhaka
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                Email:<a href="mailto:sales@hotelempire.com">info@themevessel.com</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                Phone: <a href="tel:+55-417-634-7071">+55 4XX-634-7071</a>
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                Fax: +55 4XX-634-7071
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Links -->
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Links</h1>
                        </div>
                        <ul class="links">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact Us</a>
                            </li>
                            <li>
                                <a href="blog-single-sidebar-right.html">Blog</a>
                            </li>
                            <li>
                                <a href="blog-single-sidebar-right.html">Services</a>
                            </li>
                            <li>
                                <a href="properties-list-rightside.html">properties Listing</a>
                            </li>
                            <li>
                                <a href="properties-grid-rightside.html">properties Grid</a>
                            </li>
                            <li>
                                <a href="properties-details.html">properties Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Recent cars -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-item popular-posts">
                        <div class="main-title-2">
                            <h1>Popular Posts</h1>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/70x70" alt="small-properties-1">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="properties-details.html">Sweet Family Home</a>
                                </h3>
                                <p>February 27, 2018</p>
                                <div class="price">
                                    $734,000
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/70x70" alt="small-properties-2">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="properties-details.html">Modern Family Home</a>
                                </h3>
                                <p>February 27, 2018</p>
                                <div class="price">
                                    $734,000
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/70x70" alt="small-properties-3">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="properties-details.html">Beautiful Single Home</a>
                                </h3>
                                <p>February 27, 2018</p>
                                <div class="price">
                                    $734,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Subscribe -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Subscribe</h1>
                        </div>
                        <div class="newsletter clearfix">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                            </p>

                            <form action="#" method="post">
                                <div class="form-group">
                                    <input class="nsu-field btn-block" id="nsu-email-0" type="text" name="email" placeholder="Email Address" required="">
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="button-sm button-theme btn-block">
                                        Subscribe
                                    </button>
                                </div>
                            </form>
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
            <div class="col-md-8 col-sm-12">
                &copy;  2017 <a href="http://themevessel.com/" target="_blank">Theme Vessel</a>. Trademarks and brands are the property of their respective owners.
            </div>
            <div class="col-md-4 col-sm-12">
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
    </div>
</div>
<!-- Copy end right-->

<!-- Car Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="carModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="carModalLabel">
                    Find Your Dream House
                </h5>
                <p>
                    123 Kathal St. Tampa City,
                </p>
                <span class="ratings">
                    <i class="fa fa-star s1 active" data-score="1"></i>
                    <i class="fa fa-star s2 active" data-score="2"></i>
                    <i class="fa fa-star s3 active" data-score="3"></i>
                    <i class="fa fa-star s4 active" data-score="4"></i>
                    <i class="fa fa-star s5 active" data-score="5"></i>
                </span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row modal-raw">
                    <div class="col-lg-5 modal-left">
                        <div class="modal-left-content">
                            <div class="bs-example" data-example-id="carousel-with-captions">
                                <div class="carousel slide" id="properties-carousel" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item">
                                            <img src="http://placehold.it/450x300 " alt="best-properties">
                                        </div>
                                        <div class="item">
                                            <img src="http://placehold.it/450x300 " alt="best-properties">
                                        </div>
                                        <div class="item active">
                                            <iframe class="modalIframe" src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <a class="control control-prev" href="#properties-carousel" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="control control-next" href="#properties-carousel" role="button" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="description">
                                <h3>Description</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 modal-right">
                        <div class="modal-right-content bg-white">
                            <strong class="price">
                                $178,000
                            </strong>
                            <section>
                                <h3>Features</h3>
                                <div class="features">
                                    <ul class="bullets">
                                        <li><i class="flaticon-air-conditioner"></i>Air conditioning</li>
                                        <li><i class="flaticon-wifi"></i>Wifi</li>
                                        <li><i class="flaticon-transport"></i>Parking</li>
                                        <li><i class="flaticon-people-2"></i>Pool</li>
                                        <li><i class="flaticon-weightlifting"></i>Gym</li>
                                        <li><i class="flaticon-building"></i>Alarm</li>
                                        <li><i class="flaticon-old-telephone-ringing"></i>Balcony</li>
                                        <li><i class="flaticon-monitor"></i>TV</li>
                                    </ul>
                                </div>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <dl>
                                    <dt>Model</dt>
                                    <dd>Maxima</dd>
                                    <dt>Condition</dt>
                                    <dd>Brand New</dd>
                                    <dt>Year</dt>
                                    <dd>2018</dd>
                                    <dt>Price</dt>
                                    <dd>$178,000</dd>
                                </dl>
                            </section>
                            <section>
                                <h3>Last Review</h3>
                                <div class="ratings" data-rating="5">
                                    <span>
                                        <i class="fa fa-star s1 active" data-score="1"></i>
                                        <i class="fa fa-star s2 active" data-score="2"></i>
                                        <i class="fa fa-star s3 active" data-score="3"></i>
                                        <i class="fa fa-star s4 active" data-score="4"></i>
                                        <i class="fa fa-star s5 active" data-score="5"></i>
                                    </span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                            </section>
                            <a href="properties-details.html" class="btn button-sm button-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

</body>
</html>