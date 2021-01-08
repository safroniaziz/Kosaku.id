
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>The Nest - Real Estate HTML Template</title>
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
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
    <script src="{{ asset('assets/frontend/js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js') }} for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js') }}"></script>
    <script type="text/javascript" src="js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body style="background-image:url({{ asset('assets/images/bg.jpg') }});-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;">

<div class="page_loader"></div>

<!-- Login section start -->
<div class="login-section">
    <div class="form-content-box">
        <!-- details -->
        <div class="details">
            <div class="logo">
                <a href="index.html">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" style="width: 120px; height:auto">
                </a>
            </div>
            <div class="clearfix"></div>
            <h3>Masuk untuk melanjutkan</h3>
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="input-text" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="input-text" placeholder="Password">
                </div>
                <div class="checkbox">
                    <div class="ez-checkbox pull-left">
                        <label>
                            <input type="checkbox" class="ez-hide">
                            Remember me
                        </label>
                    </div>
                    <a href="forgot-password.html" class="link-not-important pull-right">Forgot Password</a>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="button-md button-theme btn-block">login</button>
                </div>
            </form>
            <ul class="social-list clearfix">
                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="footer">
                        <span>
                            Belum memiliki akun? <a href="{{ route('register') }}">Daftar disini</a>
                        </span>
        </div>
    </div>
</div>
<!-- Login section end -->

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
