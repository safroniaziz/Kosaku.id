@extends('layouts.produks')
@section('produk-content')
    <!-- property section start -->
    <div class="properties-section-body content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <!-- Option bar Start -->
                    <div class="option-bar">
                        <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                            <h4>
                                    <span class="heading-icon">
                                        <i class="fa fa-th-large"></i>
                                    </span>
                                    <span class="hidden-xs">Properties Grid</span>
                                </h4>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 cod-pad">
                                <div class="sorting-options">
                                    <select class="sorting">
                                    <option>New To Old</option>
                                    <option>Old To New</option>
                                    <option>Properties (High To Low)</option>
                                    <option>Properties (Low To High)</option>
                                    </select>
                                    <a href="properties-list-fullwidth.html" class="change-view-btn"><i class="fa fa-th-list"></i></a>
                                    <a href="properties-grid-fullwidth.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Option bar end -->
                    <div class="clearfix"></div>

                    <!-- Property grid start -->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="property-tag button alt featured">Featured</div>
                                    <div class="property-tag button sale">For Sale</div>
                                    <div class="property-price">$150,000</div>
                                    <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
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
                            <!-- Property end -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="property-tag button alt featured">Featured</div>
                                    <div class="property-tag button sale">For Sale</div>
                                    <div class="property-price">$150,000</div>
                                    <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
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
                            <!-- Property end -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="property-tag button alt featured">Featured</div>
                                    <div class="property-tag button sale">For Sale</div>
                                    <div class="property-price">$150,000</div>
                                    <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
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
                            <!-- Property end -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="property-tag button alt featured">Featured</div>
                                    <div class="property-tag button sale">For Sale</div>
                                    <div class="property-price">$150,000</div>
                                    <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
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
                            <!-- Property end -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="property-tag button alt featured">Featured</div>
                                    <div class="property-tag button sale">For Sale</div>
                                    <div class="property-price">$150,000</div>
                                    <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
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
                            <!-- Property end -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="property-tag button alt featured">Featured</div>
                                    <div class="property-tag button sale">For Sale</div>
                                    <div class="property-price">$150,000</div>
                                    <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
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
                            <!-- Property end -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="property-tag button alt featured">Featured</div>
                                    <div class="property-tag button sale">For Sale</div>
                                    <div class="property-price">$150,000</div>
                                    <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
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
                            <!-- Property end -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="property-tag button alt featured">Featured</div>
                                    <div class="property-tag button sale">For Sale</div>
                                    <div class="property-price">$150,000</div>
                                    <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
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
                            <!-- Property end -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="property-tag button alt featured">Featured</div>
                                    <div class="property-tag button sale">For Sale</div>
                                    <div class="property-price">$150,000</div>
                                    <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
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
                            <!-- Property end -->
                        </div>
                    </div>
                    <!-- Property grid end -->

                    <!-- Page navigation start -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="properties-grid-leftside.html" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li><a href="properties-grid-rightside.html">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="properties-grid-leftside.html">2</a></li>
                            <li class="active"><a href="properties-grid-fullwidth.html">3</a></li>
                            <li >
                                <a href="properties-grid-fullwidth.html" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Page navigation end-->
                </div>
            </div>
        </div>
    </div>
    <!-- property end -->
@endsection