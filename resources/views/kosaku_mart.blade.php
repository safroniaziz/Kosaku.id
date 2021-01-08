
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kosaku Mart - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/mart/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/mart/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/mart/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/mart/vendor/icofont/icofont.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/mart/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: WeBuild - v2.2.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>Kosaku,ID</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{ asset('assets/mart/img/logo.png') }}" alt="" class="img-fluid"></a>-->
      </div>

      <div class="contact-link float-right">
      </div>

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1><i class="fa fa-shopping-cart"></i>&nbsp; KOSAKU MART</h1>
      <h2>Memenuhi semua kebutuhan mendasar rumah tangga </h2>
      <div class="countdown" data-count="2021/02/10" data-template="%w minggu %d hari <br> %H:%M:%S"></div>

      <form action="forms/notify.php" method="post" role="form" class="php-email-form">
       

        <div class="mb-1">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your notification request was sent. Thank you!</div>
        </div>
        <a href="{{ route('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; Kembali Ke Website</a>
    </div>
  </section><!-- End Hero -->


  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/mart/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/mart/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/mart/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/mart/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/mart/vendor/jquery-countdown/jquery.countdown.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/mart/js/main.js') }}"></script>

</body>

</html>