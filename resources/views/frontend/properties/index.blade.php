@extends('frontend.layouts.frontend')

@section('title', 'Property Listings')

@push('styles')

@endpush

@section('content')
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-area-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                                <h3>Property Grid Layout</h3>
                            </div>
                            <div class="breadcrumb-menu" data-aos="fade-left" data-aos-easing="linear"
                                data-aos-duration="500">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Property Grid</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

    <!--Start Property five-->
    <section class="property-grid">
        <div class="container">
            <div class="row">

                <div class="col-xl-4">
                    <div class="property-sidebar-content">
                        <div class="inner-title">
                            <h5>Advanced Search</h5>
                        </div>

                        <div class="advanced-search-box">
                            <form action="index.html" method="post" class="clearfix advanced-search-form">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <!--Start Form Group -->
                                        <div class="clearfix form-group">
                                            <label>Keywords</label>
                                            <div class="field-input">
                                                <input type="text" name="keywords"
                                                    placeholder="What are you looking for?">
                                            </div>
                                        </div>
                                        <!--End Form Group -->
                                        <!--Start Form Group -->
                                        <div class="clearfix form-group">
                                            <label>Type</label>
                                            <div class="field-input">
                                                <div class="select-box">
                                                    <select class="wide">
                                                        <option data-display="Property Type">Property
                                                            Type
                                                        </option>
                                                        <option value="1">Laxury</option>
                                                        <option value="2">Classic</option>
                                                        <option value="3">Modern</option>
                                                        <option value="4">New</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Form Group -->
                                        <!--Start Form Group -->
                                        <div class="clearfix form-group">
                                            <label>Status</label>
                                            <div class="field-input">
                                                <div class="select-box">
                                                    <select class="wide">
                                                        <option data-display="Select Status">
                                                            Select Status
                                                        </option>
                                                        <option value="1">Select Status 01</option>
                                                        <option value="2">Select Status 02</option>
                                                        <option value="3">Select Status 03</option>
                                                        <option value="4">Select Status 04</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Form Group -->
                                        <!--Start Form Group -->
                                        <div class="clearfix form-group">
                                            <label>Bed/Bathrooms</label>
                                            <div class="field-input">
                                                <div class="select-box">
                                                    <select class="wide">
                                                        <option data-display="00 Bed / 00 Bathrooms">
                                                            00 Bed / 00 Bathrooms
                                                        </option>
                                                        <option value="1">05 Bed / 02 Bathrooms</option>
                                                        <option value="2">02 Bed / 01 Bathrooms</option>
                                                        <option value="3">07 Bed / 03 Bathrooms</option>
                                                        <option value="4">01 Bed / 01 Bathrooms</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Form Group -->
                                        <!--Start Form Group -->
                                        <div class="clearfix form-group">
                                            <label>Floors</label>
                                            <div class="field-input">
                                                <input type="number" min="1" max="30" step="1" placeholder="1">
                                            </div>
                                        </div>
                                        <!--End Form Group -->
                                        <!--Start Form Group -->
                                        <div class="clearfix form-group">
                                            <label for="currency-field">Price</label>
                                            <div class="field-input">
                                                <input type="text" name="currency-field" id="currency-field"
                                                    pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value=""
                                                    data-type="currency" placeholder="$000,000.00">
                                            </div>
                                        </div>
                                        <!--End Form Group -->

                                        <!--Start Form Group -->
                                        <div class="clearfix form-group">
                                            <label>Square Feet</label>
                                            <div class="field-input">
                                                <input type="text" placeholder="1600 SQFT  -  2200 SQFT">
                                            </div>
                                        </div>
                                        <!--End Form Group -->

                                        <!--Start Form Group -->
                                        <div class="clearfix form-group">
                                            <label>Year Built</label>
                                            <div class="field-input">
                                                <input type="text" placeholder="2005  -  2022">
                                            </div>
                                        </div>
                                        <!--End Form Group -->
                                        <!--Start Form Group -->
                                        <div class="clearfix form-group">
                                            <label>Your Location</label>
                                            <div class="field-input">
                                                <div class="select-box">
                                                    <select class="wide">
                                                        <option data-display="Your Location">
                                                            Your Location
                                                        </option>
                                                        <option value="1">New York</option>
                                                        <option value="2">California</option>
                                                        <option value="3">London</option>
                                                        <option value="4">Maxico</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Form Group -->
                                        <!--Start Sidebar Map Box-->
                                        <div class="sidebar-map-box">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                                class="google-map__two" allowfullscreen></iframe>
                                        </div>
                                        <!--End Sidebar Map Box-->
                                        <!--Start Sidebar Features Box-->
                                        <div class="sidebar-features-box">
                                            <div class="inner-title">
                                                <h5>Features</h5>
                                            </div>
                                            <div class="scrollbar" id="style-1">
                                                <div class="force-overflow">
                                                    <div class="checkboxes">
                                                        <input id="check-2" type="checkbox" name="check">
                                                        <label for="check-2">Free parking</label>

                                                        <input id="check-3" type="checkbox" name="check">
                                                        <label for="check-3">Free Internet (WiFi)</label>

                                                        <input id="check-4" type="checkbox" name="check" checked>
                                                        <label for="check-4">Bar</label>

                                                        <input id="check-5" type="checkbox" name="check" checked>
                                                        <label for="check-5">Coffeeshop</label>

                                                        <input id="check-6" type="checkbox" name="check">
                                                        <label for="check-6">WiFi</label>

                                                        <input id="check-7" type="checkbox" name="check">
                                                        <label for="check-7">Refrigerator</label>

                                                        <input id="check-8" type="checkbox" name="check">
                                                        <label for="check-8">Outdoor Shower</label>

                                                        <input id="check-9" type="checkbox" name="check">
                                                        <label for="check-9">Refrigerator</label>

                                                        <input id="check-10" type="checkbox" name="check">
                                                        <label for="check-10">Outdoor Shower</label>

                                                        <input id="check-11" type="checkbox" name="check">
                                                        <label for="check-11">Microwave</label>

                                                        <input id="check-12" type="checkbox" name="check">
                                                        <label for="check-12">Laundry</label>

                                                        <input id="check-13" type="checkbox" name="check">
                                                        <label for="check-13">Smoking rooms</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Sidebar Features Box-->
                                        <div class="btn-box">
                                            <button class="btn-one" type="submit"
                                                data-loading-text="Please wait...">
                                                <span class="txt">
                                                    search here
                                                    <i class="icon-plus-sign"></i>
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="property-grid-content-box">
                        <div class="property-item-shorting">
                            <!--Start Left Colum-->
                            <div class="left-column">
                                <div class="short-menu">
                                    <div class="inner-title">
                                        <h6>View as:</h6>
                                    </div>
                                    <div class="btn-box">
                                        <button class="grid-view on"><i class="icon-squares"></i></button>
                                        <button class="list-view"><i class="icon-list"></i></button>
                                    </div>
                                </div>
                                <div class="short-box">
                                    <div class="inner-title">
                                        <h6>Sort by:</h6>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Most Recent">Most Recent</option>
                                            <option value="1">New Arrival</option>
                                            <option value="2">Top Rated</option>
                                            <option value="3">Offer Place</option>
                                            <option value="4">Most Place</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--End Left Colum-->
                            <!--Start Right Colum-->
                            <div class="right-column">
                                <p><span>205</span> Properties Found</p>
                            </div>
                            <!--End Right Colum-->
                        </div>

                        <div class="grid property-content-box__inner">

                            <!-- Start Properties Grid Content-->
                            <div class="property-grid-content grid-item">
                                <div class="row">

                                    <!-- Start Single Properties Box Style1-->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-properties-box-style1">
                                            <div class="img-holder">
                                                <img src="assets/images/properties/properties-v2-1.jpg" alt="">
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li class="bg1">For Sell</li>
                                                    </ul>
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-heart"></span>
                                                </div>
                                            </div>
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="dot"></div>
                                                    <p>By <a href="#">Mex Bond</a></p>
                                                </div>
                                                <h3>
                                                    <a href="{{ route('properties.show') }}">Luxury Villa in Los Angeles.</a>
                                                </h3>
                                                <p>Buffalo, New York</p>
                                                <div class="rating-value-box">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star-1"></span>
                                                            </li>
                                                        </ul>
                                                        <span class="text">(5.4)</span>
                                                    </div>
                                                    <div class="value-box">
                                                        <h4>$59.60</h4>
                                                    </div>
                                                </div>
                                                <div class="info-box">
                                                    <ul>
                                                        <li>
                                                            <span class="icon-bed"></span>04 Bed
                                                        </li>
                                                        <li>
                                                            <span class="icon-bath-tub"></span>02 Bath
                                                        </li>
                                                        <li>
                                                            <span class="icon-selection"></span>2500 sq ft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Properties Box Style1-->
                                    <!-- Start Single Properties Box Style1-->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-properties-box-style1">
                                            <div class="img-holder">
                                                <img src="assets/images/properties/properties-v2-2.jpg" alt="">
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li class="bg2">For Rent</li>
                                                    </ul>
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-heart"></span>
                                                </div>
                                            </div>
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="dot"></div>
                                                    <p>By <a href="#">Mex Bond</a></p>
                                                </div>
                                                <h3>
                                                    <a href="{{ route('properties.show') }}">Smart fokhrey Ara Ashan
                                                        Garden.</a>
                                                </h3>
                                                <p>Buffalo, New York</p>
                                                <div class="rating-value-box">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star-1"></span>
                                                            </li>
                                                        </ul>
                                                        <span class="text">(5.4)</span>
                                                    </div>
                                                    <div class="value-box">
                                                        <h4>$70.60</h4>
                                                    </div>
                                                </div>
                                                <div class="info-box">
                                                    <ul>
                                                        <li>
                                                            <span class="icon-bed"></span>04 Bed
                                                        </li>
                                                        <li>
                                                            <span class="icon-bath-tub"></span>02 Bath
                                                        </li>
                                                        <li>
                                                            <span class="icon-selection"></span>2500 sq ft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Properties Box Style1-->

                                    <!-- Start Single Properties Box Style1-->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-properties-box-style1">
                                            <div class="img-holder">
                                                <img src="assets/images/properties/properties-v2-3.jpg" alt="">
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li class="bg1">For Sell</li>
                                                    </ul>
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-heart"></span>
                                                </div>
                                            </div>
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="dot"></div>
                                                    <p>By <a href="#">Mex Bond</a></p>
                                                </div>
                                                <h3>
                                                    <a href="{{ route('properties.show') }}">Purbachal Marine City.</a>
                                                </h3>
                                                <p>Buffalo, New York</p>
                                                <div class="rating-value-box">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star-1"></span>
                                                            </li>
                                                        </ul>
                                                        <span class="text">(5.4)</span>
                                                    </div>
                                                    <div class="value-box">
                                                        <h4>$40.00</h4>
                                                    </div>
                                                </div>
                                                <div class="info-box">
                                                    <ul>
                                                        <li>
                                                            <span class="icon-bed"></span>04 Bed
                                                        </li>
                                                        <li>
                                                            <span class="icon-bath-tub"></span>02 Bath
                                                        </li>
                                                        <li>
                                                            <span class="icon-selection"></span>2500 sq ft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Properties Box Style1-->

                                    <!-- Start Single Properties Box Style1-->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-properties-box-style1">
                                            <div class="img-holder">
                                                <img src="assets/images/properties/properties-v2-4.jpg" alt="">
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li class="bg1">For Sell</li>
                                                    </ul>
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-heart"></span>
                                                </div>
                                            </div>
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="dot"></div>
                                                    <p>By <a href="#">Mex Bond</a></p>
                                                </div>
                                                <h3>
                                                    <a href="{{ route('properties.show') }}">Purbachal Marine City.</a>
                                                </h3>
                                                <p>Buffalo, New York</p>
                                                <div class="rating-value-box">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star-1"></span>
                                                            </li>
                                                        </ul>
                                                        <span class="text">(5.4)</span>
                                                    </div>
                                                    <div class="value-box">
                                                        <h4>$40.00</h4>
                                                    </div>
                                                </div>
                                                <div class="info-box">
                                                    <ul>
                                                        <li>
                                                            <span class="icon-bed"></span>04 Bed
                                                        </li>
                                                        <li>
                                                            <span class="icon-bath-tub"></span>02 Bath
                                                        </li>
                                                        <li>
                                                            <span class="icon-selection"></span>2500 sq ft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Properties Box Style1-->

                                    <!-- Start Single Properties Box Style1-->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-properties-box-style1">
                                            <div class="img-holder">
                                                <img src="assets/images/properties/properties-v2-5.jpg" alt="">
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li class="bg2">For Rent</li>
                                                    </ul>
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-heart"></span>
                                                </div>
                                            </div>
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="dot"></div>
                                                    <p>By <a href="#">Mex Bond</a></p>
                                                </div>
                                                <h3>
                                                    <a href="{{ route('properties.show') }}">Smart fokhrey Ara Ashan
                                                        Garden.</a>
                                                </h3>
                                                <p>Buffalo, New York</p>
                                                <div class="rating-value-box">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star-1"></span>
                                                            </li>
                                                        </ul>
                                                        <span class="text">(5.4)</span>
                                                    </div>
                                                    <div class="value-box">
                                                        <h4>$70.60</h4>
                                                    </div>
                                                </div>
                                                <div class="info-box">
                                                    <ul>
                                                        <li>
                                                            <span class="icon-bed"></span>04 Bed
                                                        </li>
                                                        <li>
                                                            <span class="icon-bath-tub"></span>02 Bath
                                                        </li>
                                                        <li>
                                                            <span class="icon-selection"></span>2500 sq ft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Properties Box Style1-->

                                    <!-- Start Single Properties Box Style1-->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-properties-box-style1">
                                            <div class="img-holder">
                                                <img src="assets/images/properties/properties-v2-1.jpg" alt="">
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li class="bg1">For Sell</li>
                                                    </ul>
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-heart"></span>
                                                </div>
                                            </div>
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="dot"></div>
                                                    <p>By <a href="#">Mex Bond</a></p>
                                                </div>
                                                <h3>
                                                    <a href="{{ route('properties.show') }}">Luxury Villa in Los Angeles.</a>
                                                </h3>
                                                <p>Buffalo, New York</p>
                                                <div class="rating-value-box">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star-1"></span>
                                                            </li>
                                                        </ul>
                                                        <span class="text">(5.4)</span>
                                                    </div>
                                                    <div class="value-box">
                                                        <h4>$59.60</h4>
                                                    </div>
                                                </div>
                                                <div class="info-box">
                                                    <ul>
                                                        <li>
                                                            <span class="icon-bed"></span>04 Bed
                                                        </li>
                                                        <li>
                                                            <span class="icon-bath-tub"></span>02 Bath
                                                        </li>
                                                        <li>
                                                            <span class="icon-selection"></span>2500 sq ft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Properties Box Style1-->

                                </div>
                            </div>
                            <!--End Properties Grid Content-->


                            <!--Start Properties List Content-->
                            <div class="property-list-content list-item">
                                <!--Start Single Properties Box Style2-->
                                <div class="single-properties-box-style1 single-properties-box-style1--style2">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="img-holder">
                                                <img src="assets/images/properties/properties-v3-1.jpg" alt="">
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li class="bg1">For Sell</li>
                                                    </ul>
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-heart"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="dot"></div>
                                                    <p>By <a href="#">Mex Bond</a></p>
                                                </div>
                                                <h3>
                                                    <a href="{{ route('properties.show') }}">Luxury Villa in Los Angeles.</a>
                                                </h3>
                                                <p>Buffalo, New York</p>
                                                <div class="rating-value-box">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star-1"></span>
                                                            </li>
                                                        </ul>
                                                        <span class="text">(5.4)</span>
                                                    </div>
                                                    <div class="value-box">
                                                        <h4>$59.60</h4>
                                                    </div>
                                                </div>
                                                <div class="info-box">
                                                    <ul>
                                                        <li>
                                                            <span class="icon-bed"></span>04 Bed
                                                        </li>
                                                        <li>
                                                            <span class="icon-bath-tub"></span>02 Bath
                                                        </li>
                                                        <li>
                                                            <span class="icon-selection"></span>2500 sq ft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Properties Box Style2-->
                                <!--Start Single Properties Box Style2-->
                                <div class="single-properties-box-style1 single-properties-box-style1--style2">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="img-holder">
                                                <img src="assets/images/properties/properties-v3-2.jpg" alt="">
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li class="bg1">For Sell</li>
                                                    </ul>
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-heart"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="dot"></div>
                                                    <p>By <a href="#">Mex Bond</a></p>
                                                </div>
                                                <h3>
                                                    <a href="{{ route('properties.show') }}">Apartment in Glasgow</a>
                                                </h3>
                                                <p>Buffalo, New York</p>
                                                <div class="rating-value-box">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star-1"></span>
                                                            </li>
                                                        </ul>
                                                        <span class="text">(5.4)</span>
                                                    </div>
                                                    <div class="value-box">
                                                        <h4>$59.60</h4>
                                                    </div>
                                                </div>
                                                <div class="info-box">
                                                    <ul>
                                                        <li>
                                                            <span class="icon-bed"></span>04 Bed
                                                        </li>
                                                        <li>
                                                            <span class="icon-bath-tub"></span>02 Bath
                                                        </li>
                                                        <li>
                                                            <span class="icon-selection"></span>2500 sq ft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Properties Box Style2-->
                                <!--Start Single Properties Box Style2-->
                                <div class="single-properties-box-style1 single-properties-box-style1--style2">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="img-holder">
                                                <img src="assets/images/properties/properties-v3-3.jpg" alt="">
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li class="bg2">For Sell</li>
                                                    </ul>
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-heart"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="dot"></div>
                                                    <p>By <a href="#">Mex Bond</a></p>
                                                </div>
                                                <h3>
                                                    <a href="{{ route('properties.show') }}">Luxury Villa in Los Angeles.</a>
                                                </h3>
                                                <p>Buffalo, New York</p>
                                                <div class="rating-value-box">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star-1"></span>
                                                            </li>
                                                        </ul>
                                                        <span class="text">(5.4)</span>
                                                    </div>
                                                    <div class="value-box">
                                                        <h4>$59.60</h4>
                                                    </div>
                                                </div>
                                                <div class="info-box">
                                                    <ul>
                                                        <li>
                                                            <span class="icon-bed"></span>04 Bed
                                                        </li>
                                                        <li>
                                                            <span class="icon-bath-tub"></span>02 Bath
                                                        </li>
                                                        <li>
                                                            <span class="icon-selection"></span>2500 sq ft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Properties Box Style2-->
                                <!--Start Single Properties Box Style2-->
                                <div class="single-properties-box-style1 single-properties-box-style1--style2">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="img-holder">
                                                <img src="assets/images/properties/properties-v3-4.jpg" alt="">
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li class="bg1">For Sell</li>
                                                    </ul>
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-heart"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="dot"></div>
                                                    <p>By <a href="#">Mex Bond</a></p>
                                                </div>
                                                <h3>
                                                    <a href="{{ route('properties.show') }}">Family Home For Sale</a>
                                                </h3>
                                                <p>Buffalo, New York</p>
                                                <div class="rating-value-box">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star-1"></span>
                                                            </li>
                                                        </ul>
                                                        <span class="text">(5.4)</span>
                                                    </div>
                                                    <div class="value-box">
                                                        <h4>$59.60</h4>
                                                    </div>
                                                </div>
                                                <div class="info-box">
                                                    <ul>
                                                        <li>
                                                            <span class="icon-bed"></span>04 Bed
                                                        </li>
                                                        <li>
                                                            <span class="icon-bath-tub"></span>02 Bath
                                                        </li>
                                                        <li>
                                                            <span class="icon-selection"></span>2500 sq ft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Properties Box Style2-->
                                <!--Start Single Properties Box Style2-->
                                <div class="single-properties-box-style1 single-properties-box-style1--style2">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="img-holder">
                                                <img src="assets/images/properties/properties-v3-5.jpg" alt="">
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li class="bg1">For Sell</li>
                                                    </ul>
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-heart"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="dot"></div>
                                                    <p>By <a href="#">Mex Bond</a></p>
                                                </div>
                                                <h3>
                                                    <a href="{{ route('properties.show') }}">Luxury Villa in Los Angeles.</a>
                                                </h3>
                                                <p>Buffalo, New York</p>
                                                <div class="rating-value-box">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star-1"></span>
                                                            </li>
                                                        </ul>
                                                        <span class="text">(5.4)</span>
                                                    </div>
                                                    <div class="value-box">
                                                        <h4>$59.60</h4>
                                                    </div>
                                                </div>
                                                <div class="info-box">
                                                    <ul>
                                                        <li>
                                                            <span class="icon-bed"></span>04 Bed
                                                        </li>
                                                        <li>
                                                            <span class="icon-bath-tub"></span>02 Bath
                                                        </li>
                                                        <li>
                                                            <span class="icon-selection"></span>2500 sq ft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Properties Box Style2-->
                                <!--Start Single Properties Box Style2-->
                                <div class="single-properties-box-style1 single-properties-box-style1--style2">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="img-holder">
                                                <img src="assets/images/properties/properties-v3-6.jpg" alt="">
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li class="bg1">For Sell</li>
                                                    </ul>
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-heart"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="dot"></div>
                                                    <p>By <a href="#">Mex Bond</a></p>
                                                </div>
                                                <h3>
                                                    <a href="{{ route('properties.show') }}">Luxury Villa in Los Angeles.</a>
                                                </h3>
                                                <p>Buffalo, New York</p>
                                                <div class="rating-value-box">
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star-1"></span>
                                                            </li>
                                                        </ul>
                                                        <span class="text">(5.4)</span>
                                                    </div>
                                                    <div class="value-box">
                                                        <h4>$59.60</h4>
                                                    </div>
                                                </div>
                                                <div class="info-box">
                                                    <ul>
                                                        <li>
                                                            <span class="icon-bed"></span>04 Bed
                                                        </li>
                                                        <li>
                                                            <span class="icon-bath-tub"></span>02 Bath
                                                        </li>
                                                        <li>
                                                            <span class="icon-selection"></span>2500 sq ft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Properties Box Style2-->
                            </div>
                            <!--End Properties List Content-->
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <ul class="clearfix styled-pagination">
                                    <li class="arrow prev">
                                        <a href="#">
                                            <span class="icon-left-arrow left"></span>Prev
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="arrow next">
                                        <a href="#">
                                            Next<span class="icon-right-arrow-1 right"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Property five-->
@endsection
