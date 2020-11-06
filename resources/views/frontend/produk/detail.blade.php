@extends('layouts.produks')
@section('produk-content')
    <!-- Properties details page start -->
    <div class="content-area properties-details-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- Header -->
                    <div class="heading-properties clearfix sidebar-widget">
                        <div class="pull-left">
                            <h3>Sweet Family Home</h3>
                            <p>
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </p>
                        </div>
                        <div class="pull-right">
                            <h3><span>$362,100</span></h3>
                            <h5>
                                Per Manth
                            </h5>
                        </div>
                    </div>

                    <!-- Properties detail slider start -->
                    <div class="properties-detail-slider simple-slider mb-40">
                        <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                            <div class="carousel-outer">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item active">
                                        <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
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
                                <li data-target="#carousel-custom" data-slide-to="0" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="1" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="2" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="3" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="4" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="5" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="6" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="7" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
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

                        <!-- Advanced search start -->
                        <div class="advabced-search hidden-lg hidden-md">
                            <div class="main-title-2">
                                <h1><span>Advanced</span> Search</h1>
                            </div>

                            <form method="GET">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Property Status</option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Location</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                        <option>Cameroon</option>
                                        <option>Canada</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value" >
                                        <option>Property Types</option>
                                        <option>Residential</option>
                                        <option>Commercial</option>
                                        <option>Land</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value" >
                                        <option>Area From</option>
                                        <option>1000</option>
                                        <option>800</option>
                                        <option>600</option>
                                        <option>400</option>
                                        <option>200</option>
                                        <option>100</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="bedrooms">
                                                <option>Bedrooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="bathroom">
                                                <option>Bathroom</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="balcony">
                                                <option>Balcony</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" data-live-search="true" name="garage">
                                                <option>Garage</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="range-slider">
                                    <label>Area</label>
                                    <div data-min="0" data-max="10000" data-unit="Sq ft" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="range-slider">
                                    <label>Price</label>
                                    <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="form-group">
                                    <button class="search-button">Search</button>
                                </div>
                            </form>
                        </div>
                        <!-- Advanced search end -->

                        <!-- Property description start -->
                        <div class="panel-box properties-panel-box Property-description">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="true">Description</a></li>
                                <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="false">Condition</a></li>
                                <li class=""><a href="#tab3default" data-toggle="tab" aria-expanded="false">Amenities</a></li>
                                <li class=""><a href="#tab4default" data-toggle="tab" aria-expanded="false">Floor Plans</a></li>
                                <li class=""><a href="#tab5default" data-toggle="tab" aria-expanded="false">Video</a></li>
                            </ul>
                            <div class="panel with-nav-tabs panel-default">
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab1default">
                                            <div class="main-title-2">
                                                <h1><span>Description</span></h1>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.</p>
                                            <br>
                                            <p>Nam mattis lobortis felis eu blandit. Morbi tellus ligula, interdum sit amet ipsum et, viverra hendrerit lectus. Nunc efficitur sem vel est laoreet, sed bibendum eros viverra. Vestibulum finibus, ligula sed euismod tincidunt, lacus libero lobortis ligula, sit amet molestie ipsum purus ut tortor. Nunc varius, dui et sollicitudin facilisis, erat felis imperdiet felis, et iaculis dui magna vitae diam. Donec mattis diam nisl, quis ullamcorper enim malesuada non. Curabitur lobortis eu mauris nec vestibulum. Nam efficitur, ex ac semper malesuada nisi odio consequat dui, hendrerit vulputate odio dui vitae massa. Aliquam tortor urna, tincidunt</p>
                                        </div>
                                        <div class="tab-pane fade features" id="tab2default">
                                            <!-- Properties condition start -->
                                            <div class="properties-condition">
                                                <div class="main-title-2">
                                                    <h1><span>Condition</span></h1>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <ul class="condition">
                                                            <li>
                                                                <i class="fa fa-check-square"></i>3 Beds
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Bathroom
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <ul class="condition">
                                                            <li>
                                                                <i class="fa fa-check-square"></i>4800 sq ft
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-square"></i>TV
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <ul class="condition">
                                                            <li>
                                                                <i class="fa fa-check-square"></i>1 Garage
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Balcony
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Properties condition end -->
                                        </div>
                                        <div class="tab-pane fade technical" id="tab3default">
                                            <!-- Properties amenities start -->
                                            <div class="properties-amenities">
                                                <div class="main-title-2">
                                                    <h1><span>Amenities</span></h1>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <ul class="amenities">
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Air conditioning
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Balcony
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Pool
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-square"></i>TV
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Gym
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <ul class="amenities">
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Wifi
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Parking
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Double Bed
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Iron
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <ul class="amenities">
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Telephone
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Jacuzzi
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Alarm
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-square"></i>Garage
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Properties amenities end -->
                                        </div>
                                        <div class="tab-pane fade" id="tab4default">
                                            <!-- Floor Plans start -->
                                            <div class="floor-plans">
                                                <div class="main-title-2">
                                                    <h1><span>Floor Plans</span></h1>
                                                </div>
                                                <table>
                                                    <tbody><tr>
                                                        <td><strong>Size</strong></td>
                                                        <td><strong>Rooms</strong></td>
                                                        <td><strong>2 Bathrooms</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1600</td>
                                                        <td>3</td>
                                                        <td>2</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <img src="http://placehold.it/708x359" alt="floor-plans" class="img-responsive">
                                            </div>
                                            <!-- Floor Plans end -->
                                        </div>
                                        <div class="tab-pane fade" id="tab5default">
                                            <!-- Inside properties start  -->
                                            <div class="inside-properties">
                                                <!-- Main Title 2 -->
                                                <div class="main-title-2">
                                                    <h1><span>Video </span></h1>
                                                </div>
                                                <iframe src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen=""></iframe>
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

                    <!-- Properties details section start -->
                    <div class="properties-details-section sidebar-widget">
                        <!-- Properties comments start -->
                        <div class="properties-comments mb-40">
                            <!-- Comments section start -->
                            <div class="comments-section">
                                <!-- Main Title 2 -->
                                <div class="main-title-2">
                                    <h1><span>Comments </span> Section</h1>
                                </div>

                                <ul class="comments">
                                    <li>
                                        <div class="comment">
                                            <div class="comment-author">
                                                <a href="#">
                                                    <img src="http://placehold.it/60x60" alt="avatar-5">
                                                </a>
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <div class="comment-meta-author">
                                                        Jane Doe
                                                    </div>
                                                    <div class="comment-meta-reply">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                    <div class="comment-meta-date">
                                                        <span class="hidden-xs">8:42 PM 3/3/2017</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="comment-body">
                                                    <div class="comment-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-author">
                                                        <a href="#">
                                                            <img src="http://placehold.it/60x60" alt="avatar-5">
                                                        </a>
                                                    </div>

                                                    <div class="comment-content">
                                                        <div class="comment-meta">
                                                            <div class="comment-meta-author">
                                                                Jane Doe
                                                            </div>

                                                            <div class="comment-meta-reply">
                                                                <a href="#">Reply</a>
                                                            </div>

                                                            <div class="comment-meta-date">
                                                                <span class="hidden-xs">8:42 PM 3/3/2017</span>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="comment-body">
                                                            <div class="comment-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="comment-author">
                                                <a href="#">
                                                    <img src="http://placehold.it/60x60" alt="avatar-5">
                                                </a>
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <div class="comment-meta-author">
                                                        Jane Doe
                                                    </div>
                                                    <div class="comment-meta-reply">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                    <div class="comment-meta-date">
                                                        <span class="hidden-xs">8:42 PM 3/3/2017</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="comment-body">
                                                    <div class="comment-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="comment comment-mrg-bdr-nane">
                                                    <div class="comment-author">
                                                        <a href="#">
                                                            <img src="http://placehold.it/60x60" alt="avatar-5">
                                                        </a>
                                                    </div>

                                                    <div class="comment-content">
                                                        <div class="comment-meta">
                                                            <div class="comment-meta-author">
                                                                Jane Doe
                                                            </div>

                                                            <div class="comment-meta-reply">
                                                                <a href="#">Reply</a>
                                                            </div>

                                                            <div class="comment-meta-date">
                                                                <span class="hidden-xs">8:42 PM 3/3/2017</span>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="comment-body">
                                                            <div class="comment-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Comments section end -->
                        </div>
                        <!-- Properties comments end -->

                        <!-- Contact 1 start -->
                        <div class="contact-1">
                            <div class="contact-form">
                                <!-- Main Title 2 -->
                                <div class="main-title-2">
                                    <h1><span>Contact</span> with us</h1>
                                </div>
                                <form id="contact_form" action="index.html" method="GET" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group fullname">
                                                <input type="text" name="full-name" class="input-text" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group enter-email">
                                                <input type="email" name="email" class="input-text"  placeholder="Enter email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group subject">
                                                <input type="text" name="subject" class="input-text" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group number">
                                                <input type="text" name="phone" class="input-text" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group message">
                                                <textarea class="input-text" name="message" placeholder="Write message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group send-btn mb-0">
                                                <button type="submit" class="button-md button-theme">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Contact 1 end -->
                    </div>
                    <!-- Properties details section end -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <!-- Sidebar start -->
                    <div class="sidebar right">

                        <!-- Search contents sidebar start -->
                        <div class="sidebar-widget hidden-sm hidden-xs">
                            <div class="main-title-2">
                                <h1><span>Advanced</span> Search</h1>
                            </div>

                            <form method="GET">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Property Status</option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Location</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                        <option>Cameroon</option>
                                        <option>Canada</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value" >
                                        <option>Property Types</option>
                                        <option>Residential</option>
                                        <option>Commercial</option>
                                        <option>Land</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value" >
                                        <option>Area From</option>
                                        <option>1000</option>
                                        <option>800</option>
                                        <option>600</option>
                                        <option>400</option>
                                        <option>200</option>
                                        <option>100</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="bedrooms">
                                                <option>Bedrooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="bathroom">
                                                <option>Bathroom</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="balcony">
                                                <option>Balcony</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" data-live-search="true" name="garage">
                                                <option>Garage</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="range-slider">
                                    <label>Area</label>
                                    <div data-min="0" data-max="10000" data-unit="Sq ft" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="range-slider">
                                    <label>Price</label>
                                    <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="form-group mb-0">
                                    <button class="search-button">Search</button>
                                </div>
                            </form>
                        </div>
                        <!-- Search contents sidebar end -->

                        <!-- Popular posts start -->
                        <div class="sidebar-widget popular-posts">
                            <div class="main-title-2">
                                <h1><span>Recently</span> Properties</h1>
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
                        <!-- Popular posts end -->

                        <!-- Social media start -->
                        <div class="social-media sidebar-widget clearfix">
                            <!-- Main Title 2 -->
                            <div class="main-title-2">
                                <h1><span>Social</span> Media</h1>
                            </div>
                            <!-- Social list -->
                            <ul class="social-list">
                                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <!-- Social media end -->

                        <!-- Location start  -->
                        <div class="location sidebar-widget">
                            <div class="map">
                                <!-- Main Title 2 -->
                                <div class="main-title-2">
                                    <h1><span>Location</span></h1>
                                </div>
                                <div id="map" class="contact-map" style="height: 662px;"></div>
                            </div>
                        </div>
                        <!-- Location end -->
                        <div class="clearfix"></div>
                        <!-- Latest reviews start  -->
                        <div class="sidebar-widget latest-reviews">
                            <div class="main-title-2">
                                <h1><span>Latest</span> Reviews</h1>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="avatar-1">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Property title</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                        Etiamrisus tortor, accumsan at nisi et,
                                    </p>
                                </div>
                            </div>
                            <div class="media mb-0">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="avatar-2">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Property title</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                        Etiamrisus tortor, accumsan at nisi et,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Latest reviews end -->
                    </div>
                    <!-- Sidebar end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Properties details page end -->


@endsection